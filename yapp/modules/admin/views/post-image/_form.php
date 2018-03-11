<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PostImage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-image-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-3"> <?= $form->field($model, 'post_id')->textInput() ?></div>
        <div class="col-sm-3"> <?= $form->field($model, 'imagefile_id')->textInput() ?></div>
        <div class="col-sm-3"> <?= $form->field($model, 'list_num')->textInput() ?></div>
        <div class="col-sm-12"><?= $form->field($model, 'alt')->textArea(['maxlength' => true, 'rows'=>2]) ?></div>
    </div>








    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
