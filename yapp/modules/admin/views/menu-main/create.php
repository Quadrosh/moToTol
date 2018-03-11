<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MenuMain */

$this->title = 'Create Menu Main';
$this->params['breadcrumbs'][] = ['label' => 'Menu Mains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-main-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
