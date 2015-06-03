<?php 
use yii\helpers\Url;
use yii\helpers\Html;
?>
<section class="how-it-works privat" id="how-it-works">
  <div class="container">

    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION TITLE -->
      <h6 class="dark-text" 
          style="font-size:50px;">
        <?= Yii::t('app', 'How it works?'); ?>
        
      </h6>

      <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
      <h6>
        <?= Yii::t('app', 'As simple as taking a picture'); ?>
      </h6>
      
    </div>
    
    <!-- / END SECTION HEADER -->

    <div class='row descriptions'>
      <div class='col-md-4 col-sm-12 one-two-three-cell'>
        <div class="how-it-works-wrapper">
            <div class="diamond">1</div>
              <?= 
                Html::img(
                  Url::to("@web/frontend/assets/images/how-it-works/step1.jpg?v=1.2", true), 
                  ["alt" => "Bookkeeping - How it works 1.", "class" => "img-responsive"]);
              ?>
            <div class="how-it-works-text-wrapper">
                <h4><?= Yii::t('app', 'Take pictures of your receipts'); ?></h4>
                <p>
                  <?= Yii::t('app', 'Using the ClickBooks app simply take photos of your invoices and expenses'); ?>
                  
                </p>
            </div>
        </div>
      </div>
      <div class='col-md-4 col-sm-12 one-two-three-cell'>
        <div class="how-it-works-wrapper">
            <div class="diamond">2</div>
              <?= 
                Html::img(
                  Url::to("@web/frontend/assets/images/how-it-works/step2.jpg?v=1.3", true), 
                  ["alt" => "Bookkeeping - How it works 2.", "class" => "img-responsive"]);
              ?>
            <div class="how-it-works-text-wrapper">
                <h4><?= Yii::t('app', 'A dedicated Bookkeeper will do the work'); ?></h4>
                <p>
                  <?= Yii::t('app', 'Your ClickBooks bookkeeper will categorize, review and reconcile your books against your bank statements'); ?>
                </p>
            </div>
        </div>
      </div>
      <div class='col-md-4 col-sm-12 one-two-three-cell'>
        <div class="how-it-works-wrapper">
            <div class="diamond">3</div>
              <?= 
                Html::img(
                  Url::to("@web/frontend/assets/images/how-it-works/step3.jpg?v=1.2", true), 
                  ["alt" => "Bookkeeping - How it works 3.", "class" => "img-responsive"]);
              ?>
            <div class="how-it-works-text-wrapper">
                <h4><?= Yii::t('app', 'Get back to work'); ?><br/></h4>
                <p>
                  <?= Yii::t('app', 'Receive monthly statements and tax-ready financials without having to play an integral role in the bookkeeping process'); ?>
                </p>
            </div>
        </div>
      </div>
    </div>
  </div> <!-- / END CONTAINER -->
</section>
