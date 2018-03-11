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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'libs/bootstrap/css/bootstrap-grid.min.css',
//        'css/main.css',
        'css/site.css',
    ];
    public $js = [
//        'libs/modernizr/modernizr.js',
//        'libs/waypoints/waypoints.min.js',
//        'libs/animate/animate-css.js',
//        'libs/plugins-scroll/plugins-scroll.js',
//        'libs/tweenmax/tweenmax.min.js',
//        'js/whoarewe.js',
//        'js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
