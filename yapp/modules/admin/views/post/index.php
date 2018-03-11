<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'list_name',

//            'list_num',
//            'hrurl',
//            'title',
            'pagehead',
            'topimage',

            'layout_type',
            'symptom:ntext',
            //'treatment:ntext',
            'result:ntext',

            //'promolink',
            //'promoname',
            //'imagelink',
            //'imagelink_alt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
