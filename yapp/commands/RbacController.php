<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\models\RolesAssignment;

use app\rbac\AdminRule;

use yii\console\Controller;

class RbacController extends Controller {

    public function actionIndex() {

        $oldAssigns = RolesAssignment::find()->all();
//        $oldAssigns = null;

        $auth = \Yii::$app->authManager;
        $auth->removeAll();


//        создание ролей
        $admin = $auth->createRole( 'Admin' );



        $auth->add( $admin );




        // правило


        $adminRule = new AdminRule();
        $auth->add( $adminRule );
        $adminPermission = $auth->createPermission('adminPermission');
        $adminPermission->description = 'Доступ к админке';
        $adminPermission->ruleName = $adminRule->name;
        $auth->add( $adminPermission );




//        наследование
        $auth->addChild( $admin, $adminPermission );




//        $auth->assign($admin,1);
//        $auth->assign($admin,3);
//        $auth->assign($stat,5);
//        $auth->assign($creator,4);

        if (is_array($oldAssigns)) {
            foreach ($oldAssigns as $oldAssign) {
                $auth->assign($auth->createRole($oldAssign['item_name']),$oldAssign['user_id']);
            }
        }

    }
}

// запуск из консоли php yii rbac