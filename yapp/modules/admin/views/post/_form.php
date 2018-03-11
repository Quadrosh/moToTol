<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'list_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'list_num')->textInput() ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hrurl')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-3">
            <?= $form->field($model, 'layout_type')->dropDownList([
                'left' => 'left',
                'right' => 'right',
                'unpublished' => 'unpublished',
            ]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'topimage')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>


        <div class="col-sm-12">
            <?= $form->field($model, 'pagehead')->textInput(['maxlength' => true]) ?>
        </div>


        <div class="col-sm-12">
            <?= $form->field($model, 'symptom')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-sm-12">
            <?= $form->field($model, 'treatment')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-sm-12">
            <?= $form->field($model, 'result')->textarea(['rows' => 2]) ?>
        </div>




        <div class="col-sm-3">
            <?= $form->field($model, 'promolink')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'promoname')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'imagelink')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'imagelink_alt')->textInput(['maxlength' => true]) ?>
        </div>
    </div>















    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
