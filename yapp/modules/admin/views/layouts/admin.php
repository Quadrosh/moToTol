<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
//app\assets\MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' =>  Html::img('@web/img/mototol_logo.png',[
                'alt'=>'Мототол',
                'class'=> 'adminLogo'
            ]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Post', 'url' => ['/admin/post']],

//            ['label' => 'Gii', 'url' => ['/gii']],
//            Yii::$app->user->can('creatorPermission', []) ? (
//            ['label' => 'Users', 'url' => ['/admin/usermanage']]
//            ) : (
//            ['label' => false]
//            ),

            [
                'label' => 'lib',
                'items' => [
                    ['label' => 'Menu Main', 'url' => ['/admin/menu-main']],
                    ['label' => 'Post Image', 'url' => ['/admin/post-image']],
                    ['label' => 'Images', 'url' => ['/admin/imagefiles']],
                    ['label' => 'Page', 'url' => ['/admin/page']],
                    ['label' => 'Quote', 'url' => ['/admin/quote']],
//                    ['label' => 'Chat Messages', 'url' => ['/admin/chatmessage']],

                ],
            ],

//            ['label' => 'Preorders', 'url' => ['/admin/preorders']],
//            ['label' => 'Feedback', 'url' => ['/admin/feedback']],
//            ['label' => 'Articles', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/admin/default/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= \app\widgets\Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Мототол <?= date('Y') ?></p>

<!--        <p class="pull-right">Глобал Логистик Групп</p>-->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
