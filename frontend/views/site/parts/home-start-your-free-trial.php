<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<section class="pricing privat" id="pricing">
 <div class="pricing">
  <div class="packages container">
    <div class="section-header">
      <h6 class="white-text">
        A revolutionary service that helps 1000's of small businesses every day
      </h6>
      <h2 class="white-text">AT A GREAT PRICE!</h2>
      <br/><br/>
    </div>
    <div class="row">
      <div class="col-sm-12 text-center">
          <a href="<?= Url::to(["site/pricing-plans"]); ?>" class="pricing-img" >
          <?= 
            Html::img(
              Url::to("@web/frontend/assets/images/home/price-light.jpg?v=1.2", true), 
              ["alt" => "Light Bookkeeping", "class" => "img-responsive"]);
          ?>
          </a>
          <a href="<?= Url::to(["site/pricing-plans"]); ?>" class="pricing-img" >
          <?= 
            Html::img(
              Url::to("@web/frontend/assets/images/home/price-standard.jpg?v=1.2", true), 
              ["alt" => "Standard Bookkeeping", "class" => "img-responsive mid"]);
          ?>
          </a>
          <a href="<?= Url::to(["site/pricing-plans"]); ?>" class="pricing-img" >
          <?= 
            Html::img(
              Url::to("@web/frontend/assets/images/home/price-plus.jpg?v=1.2", true), 
              ["alt" => "Plus Bookkeeping", "class" => "img-responsive"]);
          ?>
          </a>
      </div>
    </div>
    <div class="row">
        <br/><br/>
      <div class="col-sm-12 text-center pricing_info">
        What's included?<br/>
        <a href='<?= Url::to(["site/pricing-plans"]); ?>'>Compare plans</a>
      </div>
    </div>
  </div>
 </div>
  <div class='pricing-start-free-trial text-center'>
    <a href='#'
       class='btn btn-lg btn-primary start-trial-button btn-front-page'>
        <?= Yii::t('app', 'Start your FREE trial'); ?>
    </a>
    <br/><br/><br/>
  </div>
</section>
