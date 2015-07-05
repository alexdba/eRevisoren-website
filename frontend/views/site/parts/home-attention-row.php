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
              <?= Yii::t('app', 'Tax Ready Bookkeeping $'); ?>
                <span class="fullscreen-highlighted-price">
                149
                </span>
                <span class="fullscreen-after-highlighted-price">
                <?= Yii::t('app', '/mo'); ?>
                </span>
              <div class="intro_sub_heading">
                <?= Yii::t('app', 'By Certified Bookkeepers Specializing In Small Businesses'); ?>
              </div>
            </h4>
            <h4 class="mobile-page-heading">
              <?= Yii::t('app', 'TAX READY BOOKKEEPING'); ?>
              <div class="intro_sub_heading">
                <?= Yii::t('app', 'By Certified Bookkeepers'); ?>
                <br/>
                <?= Yii::t('app', 'only $'); ?>
                <span class="highlighted-price">
                149
                </span>
                <span class="after-price">
                <?= Yii::t('app', '/ month'); ?>
                </span>
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