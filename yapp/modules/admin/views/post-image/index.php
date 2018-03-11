<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Post Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-image-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Post Image', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'post_id',
            'imagefile_id',
//            'imagefile_id',
            [
                'attribute'=> 'imagefile_id',
                'value' => function($data) {
                    $image = \app\models\Imagefiles::find()->where(['id'=>$data['imagefile_id']])->one();
                    $markup = '<img class="adminTableImg" src="/img/'.$image['name'].'" alt="">';
                    return $markup;
                },
                'format'=> 'html',
            ],
            'list_num',
            'alt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
