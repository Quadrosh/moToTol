<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/slick/slick.css',
        'css/main.css',
        'libs/font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        'libs/slick/slick.min.js',

//        'libs/modernizr/modernizr.js',
//        'libs/waypoints/waypoints.min.js',
//        'libs/animate/animate-css.js',
//        'libs/plugins-scroll/plugins-scroll.js',
        'libs/tweenmax/tweenmax.min.js',
        'js/common.js',
//        'js/whoarewe.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
