<?php 
use yii\helpers\Url;
?>
<section class="separator privat">
  <div class="color-overlay">
    <div class="inline-block">
        <h3 class="container text wow fadeInLeft animated separator-line1" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
          <?= Yii::t('app', 'ClickBooks can <b>help you</b>'); ?>
        </h3>
        <h2 class="container text wow fadeInRight animated separator-line2">
        <?= Yii::t('app', 'Call to find out how:'); ?>
        </h2>
        <h2 class="container text wow fadeInRight animated separator-line3">

          &nbsp;<?=Yii::$app->params['contactPhone'];?>
        </h2>
    </div>
  </div>
</section>