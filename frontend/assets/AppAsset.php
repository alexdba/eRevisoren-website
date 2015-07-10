<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

  public $basePath = '@webroot';
  public $baseUrl  = '@web/frontend/assets';
  public $css = [
    'css/owl.theme.css',
    'css/owl.carousel.css',
    'css/jquery.vegas.min.css',
    'css/animate.min.css',
    'css/icon-fonts.css',
    'css/pixeden-icons.css',
    'css/jquery.qtip.min.css',
    'css/styles.css?v=7.1',
    'css/responsive.css?v=6.4',
    'css/custom.css?v=3.9',
    'css/jquery.bxslider.css',
  ];
  public $js = [
    'js/jquery.scrollTo.min.js',
    'js/wow.min.js',
    'js/jquery.nav.js',
    'js/jquery.knob.js',
    'js/owl.carousel.min.js',
    'js/smoothscroll.js',
    'js/jquery.vegas.min.js',
    'js/jquery.bxslider.js',
    'js/jquery.validate.js',
    'js/jquery.placeholder.js',
    'js/additional-methods.js',
    'js/jquery.qtip.min.js',
    'js/public.js?v=1.5',
  ];
  public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset',
    'yii\bootstrap\BootstrapPluginAsset',
    'frontend\assets\JasnyBootstrapAsset'
  ];

}
