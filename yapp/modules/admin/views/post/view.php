<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use \app\models\PostImage;

$uploadmodel = new \app\models\UploadForm();


/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'list_name',
            'list_num',
            'hrurl',
            'title',
            'symptom:ntext',
            'treatment:ntext',
            'result:ntext',
            'pagehead',
            'layout_type',
            'topimage',
            'promolink',
            'promoname',
            'imagelink',
            'imagelink_alt',
        ],
    ]) ?>

</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <h4>Image Upload</h4>
                <?php $form = ActiveForm::begin([
                    'method' => 'post',
                    'action' => ['/admin/post/image-upload'],
                    'options' => ['enctype' => 'multipart/form-data'],
                ]); ?>
                <?= $form->field($uploadmodel, 'toModelProperty')->dropDownList([
                    'postImage'=>'Post Image',
                    'topimage'=>'Top Image',
                    'imagelink'=>'Imagelink',
                ])->label(false) ?>
                <?= $form->field($uploadmodel, 'imageFile')->fileInput()->label(false) ?>
                <?= $form->field($uploadmodel, 'toModelId')->hiddenInput(['value'=>$model->id])->label(false) ?>


                <?= Html::submitButton('Upload', ['class' => 'btn btn-danger']) ?>
                <?php ActiveForm::end() ?>

                <h6>----------------------</h6>
                <h6>Выбор уже загруженных изображений</h6>
                <?php $form = ActiveForm::begin([
                    'method' => 'post',
                    'action' => ['/admin/post/image-assign-uploaded'],
                    'options' => ['enctype' => 'multipart/form-data'],
                ]); ?>
                <?= $form->field($uploadmodel, 'toModelProperty')->dropDownList([
                    'postImage'=>'Post Image',
                    'topimage'=>'Top Image',
                    'imagelink'=>'Imagelink',
                ])->label(false) ?>
                <?= $form->field($uploadmodel, 'imageFileName')->dropDownList(
                    \yii\helpers\ArrayHelper::map(
                        \app\models\Imagefiles::find()->orderBy('name')->all(), 'id','name'
                    )
                ) ?>
                <?= $form->field($uploadmodel, 'toModelId')->hiddenInput(['value'=>$model->id])->label(false) ?>


                <?= Html::submitButton('Выбрать', ['class' => 'btn btn-primary']) ?>
                <?php ActiveForm::end() ?>
            </div>


            <div class="col-xs-6 col-sm-9 text-center">
                <?php if ($model->postImages) : ?>

                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Post Image</th>
                        <th>Описание</th>
                        <th class="action-column">&nbsp;</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($model->postImages as $postImage) : ?>
                        <tr >
                            <td><?= $postImage['list_num']?></td>
                            <td><?= Html::img('/img/'.$postImage->image['name'],['class'=>'adminTableImg'])?></td>
                            <td>
                                <?php
                                if ($postImage['alt']) {
                                    echo nl2br($postImage['alt']);
                                }  else {
                                    $form = ActiveForm::begin([
                                        'method' => 'post',
                                        'action' => ['/admin/post-image/update?id='.$postImage['id']],
                                        'options' => ['enctype' => 'multipart/form-data'],
                                    ]);
                                    echo $form->field($postImage, 'alt')
                                        ->textArea(['value'=>$postImage['alt'],'rows' => 2])
                                        ->label(false);
                                    echo Html::submitButton(
                                        'добавить <i class="fa fa-share" aria-hidden="true"></i>',
                                        ['class' => 'btn btn-primary btn-xs']
                                    );
                                    ActiveForm::end();
                                }
                                ?>
                            </td>
                            <td>
                                <a href="/admin/post-image/update?id=<?= $postImage['id'] ?>"
                                   title="Редактировать" aria-label="Добавить описание"
                                   data-method="post"><span class="glyphicon glyphicon glyphicon-wrench"></span></a>

                                <a href="/admin/post-image/delete?id=<?= $postImage['id'] ?>"
                                   title="Delete" aria-label="Delete"
                                   data-confirm="Удалится только назначение. Файл останется.
Прям точно удалить назначение?"
                                   data-pjax="0"
                                   data-method="post"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
<!--                        <div class="row">-->
<!--                            <div class="col-xs-4">-->
<!--                                -->
<!--                            </div>-->
<!--                            <div class="col-xs-8">-->
<!--                                --><?//= Html::a( 'добавить описание','/',['class'=>'btn btn-primary'])?>
<!--                            </div>-->
<!--                        </div>-->
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
            </div>

        </div>
    </div>

</section>