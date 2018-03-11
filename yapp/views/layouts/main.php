<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\MainAsset;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
<!--    <title>--><?//= Html::encode($this->title) ?><!--</title>-->
    <?php $this->head() ?>
</head>
<body class="<?= Yii::$app->view->params['bodyClass'] ?>">
<?php $this->beginBody() ?>

<!--    <div class="wrap">-->
<!--        <div class="container">-->
<!--            --><?//= $content ?>
<!--        </div>-->
<!--    </div>-->


    <div id="darkfilter" class="darker"></div>
    <div id="whitefilter" class="whitefilter"></div>
    <div id="roadwrap" class="roadwrap">
        <div id="road1left" class="road roadleft">	</div>
        <div id="road1right" class="road roadright">	</div>
    </div>
    <div id="tunnel" class="tunnel"></div>


    <div class="navbar ">
        <div class="container">
            <div class="row">
                <div id="logo" class="col-sm-6 logo">
                    <a  class="navbar-brand" href="#"><img src="/img/mototol_logo.png" alt="Мототол"><span class="logolead"> ремонт мотоциклов </span></a>
                </div>
                <div id="menubackfilter" class="menufilter backfilterOff">
                </div>

                <div class="col-sm-6 ">

                    <?= app\widgets\MenuWidget::widget(['formfactor'=>'mainMenu','currentItem'=> Yii::$app->view->params['currentItem'] ]); ?>


                    <div id="hamburger" class="hamburglar ">

                        <div class="burger-icon">
                            <div class="burger-container">
                                <span class="burger-bun-top"></span>
                                <span class="burger-filling"></span>
                                <span class="burger-bun-bot"></span>
                            </div>
                        </div>

                        <div class="burger-ring">
                            <svg class="svg-ring">
                                <path class="path" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
                            </svg>
                        </div>

                        <svg width="0" height="0">
                            <mask id="mask">
                                <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                            </mask>
                        </svg>
                        <div class="path-burger">
                            <div class="animate-path">
                                <div class="path-rotation"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


        <?= $content ?>


    <div id="motorcycle"	class="motorcycle">

        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="1000px" height="768.1px" viewBox="0 0 1000 1800" style="enable-background:new 0 0 1000 768.1;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}
    .st1{stroke:#000000;stroke-miterlimit:10;}
    .st2{fill:#333333;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .st3{fill:#E6E6E6;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .st4{stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .st5{fill:#FFFFFF;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .st6{fill:#F2F2F2;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .st7{fill:none;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .st8{fill:#999999;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .st9{fill:#E6E6E6;stroke:#000000;stroke-miterlimit:10;}
    .st10{fill:#808080;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .st11{fill:#1A1A1A;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .st12{fill:#666666;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .st13{fill:#333333;stroke:#B3B3B3;stroke-width:5;stroke-miterlimit:10;}
    .st14{fill:#ED1C24;}
    .st15{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
    .st16{fill:none;}
    .st17{fill:#FFFFFF;}
    .st18{font-family:'MyriadPro-Cond';}
    .st19{font-size:7px;}
    .st20{fill:none;stroke:#ED1C24;stroke-width:4;stroke-linecap:round;stroke-miterlimit:10;}
    .st21{stroke:#000000;stroke-width:5;stroke-miterlimit:10;}
    .st22{fill:#FFFFFF;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;}
    .st23{fill:#808080;stroke:#000000;stroke-linejoin:round;stroke-miterlimit:10;}
    .st24{fill:#B3B3B3;stroke:#B3B3B3;stroke-miterlimit:10;}
    .st25{fill:#CCCCCC;stroke:#CCCCCC;stroke-miterlimit:10;}
    .st26{fill:#E6E6E6;stroke:#E6E6E6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .st27{fill:#999999;stroke:#E6E6E6;stroke-miterlimit:10;}
</style>
            <circle id="light" class="st0" cx="507.1" cy="158" r="85"/>
            <path id="wireleft" class="st1" d="M252,88.4c23-4.1,41.5-8.7,54.2-12.2c26.4-7.3,44.7-14.4,50.1-7.5c2.1,2.7-0.1,4.7,0,15.5
	c0,5.1,0.2,18.7,7,31.7c2.2,4.1,6.1,11.7,14.1,17.2c11.6,7.9,23.2,0.2,36.2,7.1C424,145.6,452,160,452,160l6.2-10.1
	c-15.6-12.3-29.4-16.8-39.6-18.4c-15.7-2.6-24.6,1.2-35.1-6.4c-10.4-7.5-14.3-20.2-15-22.6c-0.9-3-2.7-9.1-2-16.9
	c0.6-5.8,1.9-6.1,2-10.5c0.1-7.2-3.3-16.3-10.1-19.8c-5-2.5-10.3-1.2-15.9,0.4c-16.4,4.5-24.6,6.8-36.8,11.1
	c-29,10.2-57.3,11-57.7,9.4c0,0,0-0.2,0-0.2C248.3,75.9,249.4,79.6,252,88.4z"/>
            <path id="wirerighy_1_" class="st1" d="M796.4,81.5c0,0-10.2,30.7-19.5,32.3c-9.3,1.7-32.2-14.8-42.3-19.7s-40.3-22.7-53.2-22.7
	c-12.8,0-23.5,14.8-30,23.5s-24.3,27-31.9,39.4c-7.6,12.4-36.9,36.6-59.4,41.1s-51.4,8.5-57.8,11.5c-6.4,3-2.3-7-2.3-7
	s25.2-7,35.1-9s20.7-3.2,25-5.2c4.4-2,33.6-16.1,38.6-22.5s42-53.2,46-58.2s19.6-20.6,26-22c6.4-1.4,23.9-1.4,31.4,2.4
	c7.5,3.7,58.4,31,63.6,32.9c5.2,1.9,4.8,1.5,9.3,0c4.5-1.5,10.1-23.2,10.1-23.2L796.4,81.5z"/>
            <polygon id="backgrey" points="399.6,172.9 608.7,171 598.8,274.8 403.7,279.8 "/>
            <polygon id="center" class="st2" points="427.2,128.3 429.7,185.9 487.9,224 532,224 582,185.3 582,127 "/>
            <g id="springs">
                <path id="stright" class="st3" d="M582,255V145.8c0-4,1.9-7.9,5.1-10.3c8.2-6.2,25.3-14.9,44.1,0.9c2.6,2.2,4,5.6,3.7,9.1
		c-2.1,20.3-9.7,94.5-11.9,115.8c-0.3,3.3-3.1,5.7-6.3,5.7h-28.3c-3.5,0-6.4-2.9-6.4-6.4V255z"/>
                <path id="stleft" class="st3" d="M392,256.2l-16.2-106.9c-0.6-4.1,0.6-8.3,3.5-11.3c7.1-7.4,22.3-18.3,42.8-5.9
		c3.2,1.9,5.2,5.4,5.3,9.2l5.2,120.1l-39,5.7L392,256.2z"/>
            </g>
            <path id="back" class="st2" d="M311.3,439.6c-1.7-11.6-4.3-33.3-3-61c1.8-36.7,3.9-86.7,39.4-124.2c24.3-25.6,54.6-35.6,72.5-41.4
	c30.9-10.1,55.9-10.2,82.8-10.4c29.7-0.1,55.6-0.2,87.1,10.9c17.1,6,45.2,16,66.9,40.9c30.2,34.6,30.6,78.7,31.2,117.5
	c0.5,33.8-4.3,59.7-6.7,71.4c-12.8,61.5-49.7,239.2-157.8,264.2c-27.5,6.4-50.4,0.7-57.8-1.2C346.5,675.4,316.2,472.2,311.3,439.6z"
            />
            <ellipse id="centralbolt" class="st4" cx="505.3" cy="187" rx="23.1" ry="10.2"/>
            <g id="turnsignal_2_">
                <path id="turnsignal_1_" class="st5" d="M365.2,140.5l-29.3-0.4c0,0-3.8-15.4-21-15.5c-5.8,0-9.9,2.2-10.8,2.7
		c-7.9,4.4-10.4,12.5-11.1,14.8c-0.6,1.9-3.6,12.1,2.4,21.7c1.1,1.8,5.9,8.9,15.1,10.9c0.8,0.2,10.1,2,17-3.1
		c1.2-0.9,2.2-1.9,2.7-2.5c3.4-3.8,4.5-8.1,4.9-10.4c9.1-0.4,18.2-0.8,27.3-1.2L365.2,140.5z"/>
                <path id="linrefs" class="st5" d="M335.9,140.1c0,0-5.5,9.6-0.8,18.6"/>
            </g>
            <g id="turnsignal2">
                <path id="turnsignal" class="st5" d="M644.7,140.5l29.3-0.4c0,0,3.8-15.4,21-15.5c5.8,0,9.9,2.2,10.8,2.7
		c7.9,4.4,10.4,12.5,11.1,14.8c0.6,1.9,3.6,12.1-2.4,21.7c-1.1,1.8-5.9,8.9-15.1,10.9c-0.8,0.2-10.1,2-17-3.1
		c-1.2-0.9-2.2-1.9-2.7-2.5c-3.4-3.8-4.5-8.1-4.9-10.4c-9.1-0.4-18.2-0.8-27.3-1.2L644.7,140.5z"/>
                <path id="linefs2" class="st5" d="M674,140.1c0,0,4.4,6.4,0.8,18.6"/>
            </g>
            <g id="spring_plate">
                <path id="sp2" class="st6" d="M373.4,171c1.5,1.1,3.6,2.5,6.4,3.8c4.4,2,8.6,2.7,11.3,3c72,0.3,144,0.5,216,0.8
		c0,0,9.6-0.1,18.3-2.6c4.9-1.4,8.8-3.2,11.5-4.7c4.6-0.1,9.2-0.3,13.7-0.4c0.3-3.6,0.6-7.3,0.9-10.9c-5.2,0-10.4,0-15.6,0H373.4
		h-15l3.5,11H373.4z"/>
                <path id="sp1" class="st6" d="M358.5,160h15c2.2,1.7,5.4,3.9,9.6,5.4c7.5,2.7,16.5,2.6,16.5,2.6H610c0,0,8.4-0.9,15.3-3.2
		c4.3-1.4,7.7-3.2,10.3-4.7c5.4-0.1,10.7-0.3,16.1-0.4l-5-26.7h-13.5c0,0-5.6-7-26-6.5c-20.5,0.5-207.5-0.4-207.5-0.4
		c-1-1-18.6,2.2-22.1,6.9h-13.1L358.5,160z"/>
                <line id="sp3" class="st7" x1="373.4" y1="171" x2="371.7" y2="160"/>
                <line id="sp4" class="st7" x1="637.1" y1="171" x2="637.5" y2="160.6"/>
            </g>
            <g id="dbp">
                <path id="dbp3" class="st8" d="M450.4,146.2c-0.3-6.4-0.6-12.8-0.9-19.2c36.7,0,73.4,0,110.1,0c-0.4,6.8-0.9,13.6-1.3,20.5
		c-17.2-0.9-35.1-1.5-53.6-1.7C486.1,145.5,467.9,145.7,450.4,146.2z"/>
                <path id="dbp1" class="st5" d="M453.5,109.1c-1.3,6.1-2.7,12.1-4,18.2l109.4-0.9c-1.5-5.9-3-11.7-4.5-17.6
		C520.9,108.9,487.2,109,453.5,109.1z"/>
                <polygon id="dbp2" class="st9" points="485,81.5 521,81.5 545.7,108.5 463,108.5 	"/>
            </g>
            <ellipse id="topspring" transform="matrix(0.9968 -7.978057e-02 7.978057e-02 0.9968 -10.2004 32.526)" class="st5" cx="401.9" cy="143.9" rx="19.2" ry="11.9"/>
            <ellipse id="topspring_1_" transform="matrix(0.9968 -7.978057e-02 7.978057e-02 0.9968 -9.6203 49.0437)" class="st5" cx="608.9" cy="144.9" rx="19.2" ry="11.9"/>
            <path id="lefthandle" class="st2" d="M76.6,136.5c-1.4,0.9-1.8,2.7-0.9,4.1c2.6,4.3,8.4,14.9,12.7,19.6c1.8,1.9,4.6,2.5,7,1.4
	c16.7-9.9,29.7-18.2,39.2-24.6c14.5-9.9,29.4-19.4,43.6-29.7c2.2-1.6,5-3.6,8.9-3.9c7.1-0.4,10.4,6.3,15.4,3.7
	c1.1-0.6,2.1-1.2,2.9-1.8c3.5-2.6,4.7-7.2,2.8-11.1l-16.1-34.6c-1.4-3.1-4.5-5.1-7.9-5.2c-3.3-0.1-7,0.5-8,3.4
	c-1.1,3.3-1.8,8-2.2,11.4c-0.3,2.7-1.8,5-4.1,6.5L76.6,136.5z"/>
            <path id="leftbox-2" d="M256.2,54.5c0,0,6.3,21,6,23.7c-0.3,2.7-6,12.7-6,12.7l-39.9-72.3c0,0,6.8-4.6,10.7-4
	C230.9,15.2,256.2,54.5,256.2,54.5z"/>
            <path id="leftbox-1" class="st2" d="M190.1,32.4c-5.1,2.9-7.6,9-5.9,14.7c3,10.1,8.4,26,16,38.4c12,19.7,20.3,32.7,24.6,32.5
	s13.7-6.7,13.7-6.7V102l12.3-6.4c5.4-2.8,7.1-9.7,3.7-14.7l-15.8-23l-13.5-33.5c-1.3-3.2-4.2-5.2-7.3-5.7c-1.9-0.3-4,0.1-5.8,1.1
	L190.1,32.4z"/>
            <g id="sw1">
                <path id="sw1-1" class="st10" d="M238.8,80.8c0,0-10.8,5.4-10.8,7.5s-0.9,4.5-0.9,4.5l-5.9,4.2c0,0-4.2-1.4-7.3,0s-3,1.4-3,1.4
		l-7.7-14.8l30.2-13.8L238.8,80.8z"/>
                <path id="sw1-2" class="st8" d="M203.2,83.6l29.1-16.9l1.2,3c0,0-10.3,5.2-12,7s-0.2,5.2-0.2,5.2l-6.1,3.6c0,0-1.9-4.6-5.4-2.7
		s-5.6,2.7-5.6,2.7L203.2,83.6z"/>
                <polygon id="sw1-3" class="st7" points="221.2,97 215.1,85.6 221.2,82 227.1,92.8 	"/>
            </g>
            <g id="sw2">
                <polygon id="sw2-1" class="st10" points="188,46 197.9,73.5 216.3,64.9 203.5,35.3 188,44.2 	"/>
                <line id="sw2-2" class="st7" x1="188.6" y1="47.7" x2="205.1" y2="39.1"/>
            </g>
            <path id="righthandle" class="st2" d="M933,133.3c1.4,0.9,1.8,2.7,0.9,4.1c-2.6,4.3-8.4,14.9-12.7,19.6c-1.8,1.9-4.6,2.5-7,1.4
	c-16.7-9.9-29.7-18.2-39.2-24.6c-14.5-9.9-29.4-19.4-43.6-29.7c-2.2-1.6-5-3.6-8.9-3.9c-7.1-0.4-10.4,6.3-15.4,3.7
	c-1.1-0.6-2.1-1.2-2.9-1.8c-3.5-2.6-4.7-7.2-2.8-11.1l16.1-34.6c1.4-3.1,4.5-5.1,7.9-5.2c3.3-0.1,7,0.5,8,3.4
	c1.1,3.3,1.8,8,2.2,11.4c0.3,2.7,1.8,5,4.1,6.5L933,133.3z"/>
            <polygon id="rboxp2" class="st2" points="789.8,19.3 822.4,38.6 814.8,69.9 791.7,106.8 779,100.2 779,94 754.5,78.3 774.9,49.9 "/>
            <path id="rboxp1" class="st11" d="M768.7,22.5c0,0,4.6-16.3,21.1-3.3l-14.9,30.5L754.5,78H750c0,0-7.8-3-8.3-6.8
	C741.2,67.4,768.7,22.5,768.7,22.5z"/>
            <path id="rsw-1" class="st12" d="M798.3,28.4l16.6,10.3c0,0-8.6,6.2-9.6,10.9c-1,4.8-1.7,12.7-1.7,12.7L787.7,54
	C787.7,54,785,42.1,798.3,28.4z"/>
            <path id="wheel" class="st5" d="M241.3,36.5c60.9-35.7,91.5-32.7,108.2-22.6c42.2,25.4,33.4,118,79.4,129.9c4,1,7.3,1.2,9,1.2
	c25.8,0.4,69.9,0.5,69.9,0.5c0.3,8,0.6,16,0.9,24l0,0c0,0-66.1-0.7-72.6-1.4c-12.7-1.3-19.1-1.8-21.6-2.7
	c-50-18-38.2-110.1-80.3-129.9c-14.4-6.8-38.7-6.8-82.1,23.5C248.6,51.5,244.9,44,241.3,36.5z"/>
            <path id="wheel_1_" class="st5" d="M769.8,36.5C708.9,0.8,678.3,3.8,661.6,13.9c-42.2,25.4-33.4,118-79.4,129.9c-4,1-7.3,1.2-9,1.2
	c-25.8,0.4-69.9,0.5-69.9,0.5c-0.3,8-0.6,16-0.9,24l0,0c0,0,66.1-0.7,72.6-1.4c12.7-1.3,19.1-1.8,21.6-2.7
	c50-18,38.2-110.1,80.3-129.9c14.4-6.8,38.7-6.8,82.1,23.5C762.6,51.5,766.2,44,769.8,36.5z"/>
            <circle id="tahometer" class="st13" cx="554.2" cy="61.2" r="44.5"/>
            <path id="red" class="st14" d="M592.7,76.9c-2.5-1.1-5.1-2.2-7.6-3.2c1.2-2.8,3.6-9.8,2.1-18.7c-1.5-8.2-5.7-13.7-7.6-16
	c1.8-1.9,3.7-3.8,5.5-5.6c3.7,4.1,5.8,8,7,10.7c1.5,3.3,4.5,11.1,3.5,21.3C595,70.4,593.8,74.3,592.7,76.9z"/>
            <circle id="speedometer" class="st13" cx="458.2" cy="61.2" r="44.5"/>
            <g id="tahoinfo">
                <line id="spline_23_" class="st15" x1="588.2" y1="48.5" x2="592.8" y2="46.5"/>
                <g id="speednumbers_3_">
                    <line id="spline_22_" class="st15" x1="555.5" y1="20" x2="555.5" y2="25"/>
                    <line id="spline_21_" class="st15" x1="515" y1="61.5" x2="520" y2="61.5"/>
                    <line id="spline_20_" class="st15" x1="570.5" y1="28.8" x2="572.5" y2="24.2"/>
                    <line id="spline_19_" class="st15" x1="538.5" y1="24.2" x2="540.5" y2="28.8"/>
                    <line id="spline_18_" class="st15" x1="581.7" y1="37.3" x2="585.3" y2="33.7"/>
                    <line id="spline_17_" class="st15" x1="525.7" y1="89.3" x2="529.3" y2="85.7"/>
                    <line id="spline_16_" class="st15" x1="524.7" y1="33.7" x2="528.3" y2="37.3"/>
                    <line id="spline_15_" class="st15" x1="517.2" y1="46.5" x2="521.8" y2="48.5"/>
                    <line id="spline_14_" class="st15" x1="588.2" y1="74.5" x2="592.8" y2="76.5"/>
                    <line id="spline_13_" class="st15" x1="517.2" y1="76.5" x2="521.8" y2="74.5"/>
                    <line id="spline_5_" class="st15" x1="590" y1="61.5" x2="595" y2="61.5"/>
                    <rect id="XMLID_71_" x="549.3" y="26.1" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_70_" transform="matrix(1 0 0 1 554.1899 30.9209)" class="st17 st18 st19">6</text>
                    <rect id="XMLID_69_" x="519.5" y="71.7" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_68_" transform="matrix(1 0 0 1 524.3562 76.5883)" class="st17 st18 st19">1</text>
                    <rect id="XMLID_67_" x="517.6" y="59.2" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_66_" transform="matrix(1 0 0 1 522.5228 64.0859)" class="st17 st18 st19">2</text>
                    <rect id="XMLID_65_" x="518.6" y="47.7" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_64_" transform="matrix(1 0 0 1 523.5228 52.5771)" class="st17 st18 st19">3</text>
                    <rect id="XMLID_63_" x="524.5" y="37.7" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_62_" transform="matrix(1 0 0 1 529.3562 42.4956)" class="st17 st18 st19">4</text>
                    <rect id="XMLID_61_" x="535.2" y="29.2" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_60_" transform="matrix(1 0 0 1 540.0854 34.0713)" class="st17 st18 st19">5</text>
                    <rect id="XMLID_59_" x="563.5" y="29.2" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_58_" transform="matrix(1 0 0 1 568.4189 34.0713)" class="st17 st18 st19">7</text>
                    <rect id="XMLID_57_" x="571.7" y="37.7" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_56_" transform="matrix(1 0 0 1 576.5366 42.4956)" class="st17 st18 st19">8</text>
                    <rect id="XMLID_55_" x="576.9" y="47.7" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_54_" transform="matrix(1 0 0 1 581.7646 52.5771)" class="st17 st18 st19">9</text>
                    <rect id="XMLID_53_" x="578.7" y="59.2" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_52_" transform="matrix(1 0 0 1 582.2347 64.0859)" class="st17 st18 st19">10</text>
                    <rect id="XMLID_25_" x="576.5" y="71.9" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_24_" transform="matrix(1 0 0 1 580.0226 76.7555)" class="st17 st18 st19">11</text>
                    <rect id="XMLID_23_" x="540.5" y="87.5" class="st16" width="26.1" height="8.3"/>
                    <text id="XMLID_22_" transform="matrix(1 0 0 1 542.487 92.3436)" class="st17 st18 st19">x1000rpm</text>
                </g>
            </g>
            <g id="speednumbers_1_">
                <line id="spline_9_" class="st15" x1="491.2" y1="48.5" x2="495.8" y2="46.5"/>
                <g id="speednumbers">
                    <line id="spline" class="st15" x1="458.5" y1="20" x2="458.5" y2="25"/>
                    <line id="spline_1_" class="st15" x1="418" y1="61.5" x2="423" y2="61.5"/>
                    <line id="spline_7_" class="st15" x1="473.5" y1="28.8" x2="475.5" y2="24.2"/>
                    <line id="spline_8_" class="st15" x1="441.5" y1="24.2" x2="443.5" y2="28.8"/>
                    <line id="spline_2_" class="st15" x1="484.7" y1="37.3" x2="488.3" y2="33.7"/>
                    <line id="spline_4_" class="st15" x1="428.7" y1="89.3" x2="432.3" y2="85.7"/>
                    <line id="spline_3_" class="st15" x1="427.7" y1="33.7" x2="431.3" y2="37.3"/>
                    <line id="spline_10_" class="st15" x1="420.2" y1="46.5" x2="424.8" y2="48.5"/>
                    <line id="spline_12_" class="st15" x1="491.2" y1="74.5" x2="495.8" y2="76.5"/>
                    <line id="spline_11_" class="st15" x1="420.2" y1="76.5" x2="424.8" y2="74.5"/>
                    <line id="spline_6_" class="st15" x1="493" y1="61.5" x2="498" y2="61.5"/>
                    <rect id="XMLID_28_" x="452.3" y="26.1" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_29_" transform="matrix(1 0 0 1 454.4951 30.9209)" class="st17 st18 st19">120</text>
                    <rect id="XMLID_33_" x="422.5" y="71.7" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_30_" transform="matrix(1 0 0 1 426.009 76.5883)" class="st17 st18 st19">20</text>
                    <rect id="XMLID_35_" x="420.6" y="59.2" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_34_" transform="matrix(1 0 0 1 424.1757 64.0859)" class="st17 st18 st19">40</text>
                    <rect id="XMLID_37_" x="421.6" y="47.7" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_36_" transform="matrix(1 0 0 1 425.1757 52.5771)" class="st17 st18 st19">60</text>
                    <rect id="XMLID_39_" x="427.5" y="37.7" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_38_" transform="matrix(1 0 0 1 431.009 42.4956)" class="st17 st18 st19">80</text>
                    <rect id="XMLID_41_" x="438.2" y="29.2" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_40_" transform="matrix(1 0 0 1 440.3906 34.0713)" class="st17 st18 st19">100</text>
                    <rect id="XMLID_43_" x="466.5" y="29.2" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_42_" transform="matrix(1 0 0 1 468.7241 34.0713)" class="st17 st18 st19">140</text>
                    <rect id="XMLID_45_" x="474.7" y="37.7" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_44_" transform="matrix(1 0 0 1 476.8418 42.4956)" class="st17 st18 st19">160</text>
                    <rect id="XMLID_47_" x="479.9" y="47.7" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_46_" transform="matrix(1 0 0 1 482.0698 52.5771)" class="st17 st18 st19">180</text>
                    <rect id="XMLID_49_" x="481.7" y="59.2" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_48_" transform="matrix(1 0 0 1 483.887 64.0859)" class="st17 st18 st19">200</text>
                    <rect id="XMLID_51_" x="479.5" y="71.9" class="st16" width="12.5" height="8.3"/>
                    <text id="XMLID_50_" transform="matrix(1 0 0 1 481.675 76.7555)" class="st17 st18 st19">220</text>
                    <rect id="XMLID_32_" x="451" y="86.7" class="st16" width="13" height="8.3"/>
                    <text id="XMLID_31_" transform="matrix(1 0 0 1 451.7036 91.5428)" class="st17 st18 st19">km/h</text>
                </g>
            </g>
            <g id="arrows">
                <line id="speed_arrow" class="st20" x1="458.2" y1="61.2" x2="429.5" y2="88.4"/>
                <line id="taho_arrow" class="st20" x1="554.2" y1="61.2" x2="525.7" y2="89.3"/>
            </g>
            <circle id="tahocenter" class="st21" cx="554.2" cy="61.2" r="5.9"/>
            <circle id="speedocenter" class="st21" cx="458.2" cy="61.2" r="5.9"/>
            <g id="plate">
                <polygon id="platetopr" class="st22" points="454.7,129.5 452.4,172 470,172 471.3,129.9 	"/>
                <polygon id="platetopl" class="st22" points="539.1,130 541,172 559,172 555,130 	"/>
                <polygon id="platetop" class="st22" points="470.9,134.4 538.9,134.7 537.7,180 472,180 	"/>
                <polygon id="platefront_1_" class="st22" points="541,172 559,172 557.4,180 538,180 	"/>
                <polygon id="platefront" class="st22" points="452,180 472,180 470,172 452,172 	"/>
                <path id="screw_7_" class="st23" d="M555.1,163.7c0,3-2.5,5.4-5.6,5.2c-3.1-0.2-5.6-2.8-5.6-5.9c0-3,2.5-5.4,5.6-5.2
		C552.6,158,555.2,160.7,555.1,163.7z"/>
                <path id="screw_6_" class="st23" d="M552.7,138.4c0,2.9-2.4,5.1-5.4,4.9c-3-0.2-5.4-2.7-5.3-5.6c0-2.9,2.4-5.1,5.4-4.9
		C550.3,133,552.7,135.5,552.7,138.4z"/>
                <path id="screw_5_" class="st23" d="M455.9,163.7c0,3,2.5,5.4,5.6,5.2c3.1-0.2,5.6-2.8,5.6-5.9c0-3-2.5-5.4-5.6-5.2
		C458.4,158,455.9,160.7,455.9,163.7z"/>
                <path id="screw_4_" class="st23" d="M456.4,138.4c0,2.9,2.4,5.1,5.4,4.9c3-0.2,5.4-2.7,5.3-5.6s-2.4-5.1-5.4-4.9
		C458.8,133,456.4,135.5,456.4,138.4z"/>
                <polygon id="platefront_2_" class="st22" points="454.5,187 452,180 557,180 555.1,187 	"/>
                <polygon id="ugol2" class="st23" points="537.7,180 541,172 539.3,131.5 	"/>
                <polygon id="ugol1" class="st23" points="469.4,172 471.3,131.5 472,180 	"/>
            </g>
            <g id="cap">
                <polygon id="bok2" class="st24" points="487,291.6 487.8,269.8 488.5,263.7 488.5,281 	"/>
                <polygon id="bok1" class="st24" points="522,263.1 523.9,269 526,291.5 524,280.8 	"/>
                <path id="XMLID_74_" class="st24" d="M459.1,243.4c-0.1,1.6-0.1,4,0.5,6.7c0,0,1,4.9,3.9,9.3c4.5,6.8,20.2,11.3,39.3,11.3
		c7.8,0,30-2.6,38.5-9c6.7-5,6.9-20.3,6.9-20.3C481.3,229.8,459.1,243.4,459.1,243.4z"/>
                <ellipse id="XMLID_2_" class="st25" cx="503.7" cy="243.4" rx="44.5" ry="21.6"/>
                <path id="XMLID_73_" class="st26" d="M488.5,280.9c0.5-15.8,1-31.6,1.5-47.4c1.3-1.1,6.4-5.5,14.3-5.6c8.2-0.1,13.5,4.4,14.7,5.5
		c1.6,15.7,3.2,31.5,4.9,47.2C512.1,280.8,500.3,280.8,488.5,280.9z"/>
                <ellipse id="XMLID_72_" class="st27" cx="503.7" cy="234.7" rx="9.8" ry="3.8"/>
                <path id="XMLID_75_" class="st24" d="M488.8,281.2l-1.8,10.3h39c-0.7-3.6-1.3-7.1-2-10.7C512.2,281,500.5,281.1,488.8,281.2z"/>
            </g>
</svg>
    </div>


    <a id="sendtopage"  class="vizibleOff" href="/<?= Yii::$app->view->params['meta']['sendtopage'] ?>"></a>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
