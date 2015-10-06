<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\CallMeBackForm */
?>
<div class="home-attention-row-wrapper">
  <div class="container">
    <div class="row home-attention-row">
      <div class="col-xs-12 col-md-12 intro attention-box">
        <div class="home-attention-row-subcontainer">
          <div class="attention-row-headings">
            <h4 class="fullscreen-page-heading">
              <?= Yii::t('app', 'Vi laver løbende bogføring, moms- og årsopgørelse for kun 3.490 per år.'); ?>
              <div class="intro_sub_heading">
                <?= Yii::t('app', 'Alt du skal gøre er at tage billeder af dine bilag med vores app'); ?>
              </div>
            </h4>
            <h4 class="mobile-page-heading">
              <?= Yii::t('app', 'Vi laver løbende bogføring, moms- og årsopgørelse for kun 3.490 per år.'); ?>
              <div class="intro_sub_heading">
                <?= Yii::t('app', 'Alt du skal gøre er at tage billeder af dine bilag med vores app'); ?>
              </div>
            </h4>
          </div>
          <br/>
          <div class="attention-row-buttons">
              <a href="<?= Yii::$app->homeUrl ?>#" id="watch-button" class="btn">
                <i class="glyphicon glyphicon-play-circle"></i><?= Yii::t('app', 'Watch The Video'); ?>
              </a>
              <a href="#" class="btn btn-primary btn-front-page">
                <?= Yii::t('app', 'Start your FREE trial'); ?>
              </a>
              <a href="#" id="callme-button" class="btn">
                <?= Yii::t('app', 'Call Me Back'); ?>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>