<?php

namespace app\controllers;

use app\models\MenuMain;
use app\models\Page;
use app\models\Post;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
//    private $layout = 'main';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
//        $this->view->params['bodyClass'] = 'homepage';
        $page = Page::find()->where(['hrurl'=>'home'])->one();
        $this->view->params['bodyClass'] = 'homebackfoto';
        $MainMenuItem = MenuMain::find()->where(['link'=>''])->one();
        $this->view->params['currentItem'] = $MainMenuItem['id'];
        $this->view->params['meta'] = $page;
        $this->layout = 'main';

        return $this->render('home');
    }


    public function actionPatients(){
        $page = Page::find()->where(['hrurl'=>'patients'])->one();
        $MainMenuItem = MenuMain::find()->where(['link'=>'patients'])->one();
        $this->view->params['currentItem'] = $MainMenuItem['id'];
        $this->view->params['meta'] = $page;
        $this->layout = 'patients';
        $posts = Post::find()->all();

        return $this->render('patients', [
            'posts' => $posts,
        ]);
    }

    public function actionWhoarewe(){
        $page = Page::find()->where(['hrurl'=>'whoarewe'])->one();
        $MainMenuItem = MenuMain::find()->where(['link'=>'whoarewe'])->one();
        $this->view->params['currentItem'] = $MainMenuItem['id'];
        $this->view->params['bodyClass'] = 'whoarewe';
        $this->view->params['meta'] = $page;

        $this->layout = 'main';

        return $this->render('whoarewe');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
