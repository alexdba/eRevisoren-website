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
        <?= Yii::t('app', 'Hvorfor vælge eBogholderen'); ?>
        
      </h6>

      <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
      <h6>
        <?= Yii::t('app', 'eBogholderen er Danmarks bedste bogholder hvis du er en lille virksomhed som lægger vægt på kvalitet og pris'); ?>
      </h6>
      
    </div>
    
    <!-- / END SECTION HEADER -->

    <div class='row descriptions'>
      <div class='col-md-4 col-sm-12 one-two-three-cell'>
        <div class="how-it-works-wrapper">
              <?= 
                Html::img(
                  Url::to("@web/frontend/assets/images/how-it-works/step-1.jpg?v=1.4", true), 
                  ["alt" => "Bookkeeping - How it works 1.", "class" => "img-responsive"]);
              ?>
            <div class="how-it-works-text-wrapper">
                <h4><?= Yii::t('app', 'Landsdækkende service'); ?></h4>
                <p>
                  <?= Yii::t('app', 'eBogholderen servicerer 100-vis af små virksomheder over hele landet. Men vi er ikke større end at du får din helt personlige bogholder.'); ?>
                  
                </p>
            </div>
        </div>
      </div>
      <div class='col-md-4 col-sm-12 one-two-three-cell'>
        <div class="how-it-works-wrapper">
              <?= 
                Html::img(
                  Url::to("@web/frontend/assets/images/how-it-works/step-2.jpg?v=1.4", true), 
                  ["alt" => "Bookkeeping - How it works 2.", "class" => "img-responsive"]);
              ?>
            <div class="how-it-works-text-wrapper">
                <h4><?= Yii::t('app', 'Specialister i små virksomheder'); ?></h4>
                <p>
                  <?= Yii::t('app', 'Alle vores bogholdere har mange års erfaring og er specialiserede i håndtering af små virksomheder, hvilket giver dig mange fordele.'); ?>
                </p>
            </div>
        </div>
      </div>
      <div class='col-md-4 col-sm-12 one-two-three-cell'>
        <div class="how-it-works-wrapper">
              <?= 
                Html::img(
                  Url::to("@web/frontend/assets/images/how-it-works/billig-bogholder.jpg", true), 
                  ["alt" => "Bookkeeping - How it works 3.", "class" => "img-responsive"]);
              ?>
            <div class="how-it-works-text-wrapper">
                <h4><?= Yii::t('app', 'Så meget sparer du'); ?><br/></h4>
                <p>
                  <?= Yii::t('app', 'Med eBogholderen er du garanteret landets bedste pris. Vi er ofte 2-3 gange billigere end de almindelige revisorer. Læs videre om vores services og priser, og find ud af hvor meget du kan spare.'); ?>
                </p>
            </div>
        </div>
      </div>
    </div>
  </div> <!-- / END CONTAINER -->
</section>

