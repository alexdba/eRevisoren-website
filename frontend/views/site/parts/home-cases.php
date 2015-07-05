<?php 
use yii\helpers\Url;
use yii\helpers\Html;
?>
<section class="cases" id="cases">
    <div class="starting-quote-div">
        <?= 
            Html::img(
              Url::to("@web/frontend/assets/images/home/starting-quote.png", true), 
              ["alt" => "starting quote", "class" => "starting-quote"]);
        ?>
    </div>
    <div class="cases_container">
    	<div class="container">
            <div id="speeches">
              	<div class="section-header">
                	<h6 class="dark-text" style="font-size:50px;"><?= Yii::t('app','What Our Customers Say'); ?></h6>
                	<h6 style="color:#0C3B45;">How Real Customers Have Benefitted from ClickBooks</h6>
                </div>
                <div class="play-video">
                    <img src="<?= Url::to("@web/frontend/assets/images/home/video-clients.jpg", true); ?>">
                </div>
                <div class="col-sm-12 text-center pricing_info">
                    <a href='<?= Url::to(["site/testimonials"]); ?>'>View More Customer Feedback From A Range Of Businesses</a>
                </div>
            </div>
        </div>
    </div>
    <div class="ending-quote-div">
        <?= 
            Html::img(
              Url::to("@web/frontend/assets/images/home/ending-quote.png", true), 
              ["alt" => "ending quote", "class" => "ending-quote"]);
        ?>
    </div>
    <div class="container clickbooks-cheap-bookkeepers">
        <br/><br/><br/><br/>
        <!-- SECTION HEADER -->
        <div class="section-header">
          <!-- SECTION TITLE -->
          <h6 class="dark-text" 
              style="font-size:50px;">
              <?= Yii::t('app','Why Are ClickBooks Bookkeepers So Cheap?'); ?>
            
          </h6>
            <br/>
          <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
          <h6 class="line1-5">
            <?= Yii::t('app','A traditional bookkeepers spends 73% of his time handling paper. And on average each paper is handled 12.6 times.'); ?>
          </h6>
          
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-1 col-sm-1">
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="small-section-header">
                      <!-- SECTION TITLE -->
                      <h6 class="blue-text" >
                          <?= Yii::t('app','ClickBooks Bookkeeper'); ?>
                      </h6>
                      <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                      <h6 >
                        <?= Yii::t('app','Paperless'); ?>
                      </h6>  
                    </div>
                    <br/><br class="clear"/>
                    <?= 
                        Html::img(
                          Url::to("@web/frontend/assets/images/home/mobile-bookkeepers.jpg", true), 
                          ["alt" => "clickbooks bookkeepers", "class" => "img-responsive center-by-margin"]);
                    ?>
                </div>
                
                 <div class="col-md-2 col-sm-2 chart-img">
                    <?= 
                        Html::img(
                          Url::to("@web/frontend/assets/images/home/pointer.jpg", true), 
                          ["alt" => "pointer", "class" => "img-responsive center-by-margin"]);
                    ?>
                </div>
                
                <div class="col-md-4 col-sm-4">
                    
                    <div class="small-section-header">
                      <!-- SECTION TITLE -->
                      <h6 class="blue-text" >
                          <?= Yii::t('app','Traditional Bookkeeper'); ?>
                      </h6>
                      <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                      <h6 >
                        <?= Yii::t('app','Lots of Papers'); ?>
                      </h6>  
                    </div>

                    <br/><br class="clear"/>
                    <?= 
                        Html::img(
                          Url::to("@web/frontend/assets/images/home/traditional-bookkeepers.jpg", true), 
                          ["alt" => "traditional bookkeepers", "class" => "img-responsive center-by-margin"]);
                    ?>
                </div>
                <div class="col-md-1 col-sm-1">
                </div>
            </div>
            <br class="clear"/>
            <br/><br/><br/>
            <div class="section-header">
              <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
              <h6 class="line1-5" style="font-size: 1.7em;">
                <?= Yii::t('app','We are Paperless that\'s why we are cheap.'); ?>
              </h6>
              
            </div>
        </div>
	</div>
</section>