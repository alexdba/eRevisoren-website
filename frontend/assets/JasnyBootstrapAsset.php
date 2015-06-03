<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Leonardo Quijano <leoquijano@gmail.com>
 */
class JasnyBootstrapAsset extends AssetBundle {

  public $basePath = '@vendor/jasny/bootstrap';
  public $baseUrl = '@web/vendor/jasny/bootstrap';
  public $depends = [
      'yii\web\YiiAsset',
      'yii\bootstrap\BootstrapAsset',
  ];

  public function init() {
    $this->css[] = (YII_DEBUG ? 'dist/css/jasny-bootstrap.css' : 'dist/css/jasny-bootstrap.min.css');
    
    // We don't include the fileinput component since we're using another widget for that.
    $this->js[] = 'js/transition.js';
    $this->js[] = 'js/inputmask.js';
    $this->js[] = 'js/offcanvas.js';
    $this->js[] = 'js/rowlink.js';
  }

}
