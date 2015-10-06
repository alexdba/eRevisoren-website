<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<section class="pricing privat" id="pricing">
 <div class="pricing">
  <div class="packages container">
    <div class="section-header">
      <h6 class="white-text">
        <?= Yii::t('app','A revolutionary service that helps 1000\'s of small businesses every day')?>
      </h6>
      <h2 class="white-text"><?= Yii::t('app','AT A GREAT PRICE!')?></h2>
      <br/><br/>
    </div>
    <div class="row">
      <div class="col-sm-12 text-center">
          <a href="<?= Url::to(["site/pricing-plans"]); ?>" class="pricing-img" >
          <?= 
            Html::img(
              Url::to("@web/frontend/assets/images/home/price-light.jpg?v=1.4", true), 
              ["alt" => "Light Bookkeeping", "class" => "img-responsive qtip1", 'title'=>Yii::t('app','If you’re self-employed without a separate company bank account and only have a few monthly receipts and invoices, but still want to keep your books in order. Then this Package is right for you.')]);
          ?>
          </a>
          <a href="<?= Url::to(["site/pricing-plans"]); ?>" class="pricing-img" >
          <?= 
            Html::img(
              Url::to("@web/frontend/assets/images/home/price-standard.jpg?v=1.4", true), 
              ["alt" => "Standard Bookkeeping", "class" => "img-responsive mid qtip2", 'title'=>Yii::t('app','Never miss a receipt or tax deduction. This package will pay for itself while giving you peace of mind in the process. Let us do the grunt work (cheaply), and leave only the taxes to your CPA or Tax consultant.')]);
          ?>
          </a>
          <a href="<?= Url::to(["site/pricing-plans"]); ?>" class="pricing-img" >
          <?= 
            Html::img(
              Url::to("@web/frontend/assets/images/home/price-plus.jpg?v=1.4", true), 
              ["alt" => "Plus Bookkeeping", "class" => "img-responsive qtip3", 'title'=>Yii::t('app','Why even pay a CPA or Tax Consultant if you don\'t have to. If your books are simple then so is your tax filing. Let us handle it all for just a little extra a month.')]);
          ?>
          </a>
      </div>
    </div>
    <div class="row">
        <br/><br/>
      <div class="col-sm-12 text-center pricing_info">
        <?= Yii::t('app','What\'s included?')?><br/>
        <a href='<?= Url::to(["site/pricing-plans"]); ?>'><?= Yii::t('app','Compare plans')?></a>
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
