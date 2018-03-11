<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PostImage */

$this->title = 'Update Post Image: '.Html::img('/img/'.$model->image['name'],['class'=>'adminTableImg']);
$this->params['breadcrumbs'][] = ['label' => 'Post Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-image-update">

    <h1><?= $this->title ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
