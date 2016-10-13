<?php 
use yii\helpers\Url;
use yii\helpers\Html;
?>
<section class="faq privat" id="faq">

  <div class="container">
    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION TITLE -->
      <h2 class="dark-text"><?= Yii::t('app','FAQ'); ?></h2>

      <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
      <h6>
        <?= Yii::t('app','Top questions asked about ClickBooks'); ?>
      </h6>
    </div>
    <!-- / END SECTION HEADER -->

    <!-- FAQS -->
    <div class="row">
      <!-- FAQS COLUMN LEFT -->
      <div class="col-md-6 col-sm-6 wow fadeInLeft animated" 
           data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
        <!-- FAQ -->
        <div class="faq_row faq_row1">
          <h5>
              <?= Yii::t('app','Does the monthly rate cover everything? Or are there any additional costs or fees involved with ClickBooks?'); ?>
          </h5>
          <p>
              <?= Yii::t('app','The monthly rate covers absolutely everything. There will never be any additional fees you\'ll have to pay. In fact, one of the benefits of using ClickBooks is you\'ll always know exactly what bookkeeping is costing your business.'); ?>
          </p>
        </div>
        <!-- / END FAQ -->

        <!-- FAQ -->
        <div class="faq_row faq_row2">
          <h5>
              <?= Yii::t('app','Can I try the service before I buy?'); ?>
          </h5>
          <p>
              <?= Yii::t('app','Yes. For all new customers we offer, at no cost or obligation, a 30 day risk-free trial. Once you realize it\'s as easy as taking a picture, we\'re confident you\'ll want to stay focused on running your business and let us take care of maintaining your books.'); ?>
          </p>
        </div>
        <!-- / END FAQ -->
        <!-- FAQ -->
        <div class="faq_row faq_row3">
          <h5>
              <?= Yii::t('app','Can I switch to ClickBooks in the middle of the year?'); ?>
          </h5>
          <p>
              <?= Yii::t('app','Absolutely. In fact most of our customers join us in the middle of the year.  With our catch-up service we will have you up to speed in no time.  And from there on your bookkeeping will be as easy as taking a picture.'); ?>
          </p>
        </div>
        <!-- / END FAQ -->

        <!-- FAQ -->
        <div class="faq_row faq_row4">
          <h5>
              <?= Yii::t('app','My books are a mess... Can you still help me?'); ?>
          </h5>
          <p>
              <?= Yii::t('app','That\'s why we are here. Because bookkeeping is such a burden for self-employed people and small sized businesses, with most new customers we go back in time, sometimes for many months, in order to bring their books fully up to date. Send us what you have, get back to running your business, and we\'ll takecare of your books. From now on you\'ll realize that doing your books is as easy as taking a picture.'); ?>
          </p>
        </div>
        <!-- / END FAQ -->

      </div> <!-- / FAQS COLUMN LEFT -->
      <!-- FAQS COLUMN RIGHT -->
      <div class="col-md-6 col-sm-6 wow fadeInRight animated" 
           data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
        <!-- FAQ -->
        <div class="faq_row faq_row1">
          <h5>
              <?= Yii::t('app','Will I get my own dedicated Bookkeeper?'); ?>
          </h5>
          <p>
              <?= Yii::t('app','Yes you will. At ClickBooks all our customers have their own dedicated Bookkeeper.  This ensures that your ClickBooks bookkeeper will get to know your company and industry more intimately. It also makes it easier and more comfortable for you to ask questions without having to explain the nuances of your business each time.'); ?>
          </p>
        </div>
        <!-- / END FAQ -->
        <!-- FAQ -->
        <div class="faq_row faq_row2">
          <h5>
              <?= Yii::t('app','Can you also do my taxes?'); ?>
          </h5>
          <p>
              <?= Yii::t('app','Yes we can. By signing up to our Tax Service Package we will take care of your Tax Filing as well as your Bookkeeping.'); ?>
          </p>
        </div>
        <!-- / END FAQ -->
        <!-- FAQ -->
        <div class="faq_row faq_row3">
          <h5>
              <?= Yii::t('app','What if I want to leave?'); ?>
          </h5>
          <p>
              <?= Yii::t('app','No problem. You will never be tied to ClickBooks longer than you want to. Just give us 30 days notice and we\'ll export your current books to a csv/excel format that can be utilized by your new bookkeeper.'); ?>
          </p>
        </div>
        <!-- / END FAQ -->

        <!-- / END FEATURE -->
      </div> <!-- / END FAQS COLUMN RIGHT -->

      
    </div> <!-- / END FAQS -->
    
  </div> <!-- / END CONTAINER -->
    <div class="col-sm-12 text-center bottom_separator">
      <div id="signup-diagram"> 
        <div class="signup-part">
            <?= 
                Html::img(
                  Url::to("@web/frontend/assets/images/custom-icons/icon_signup-step-1.png?v=1.0", true), 
                  ["alt" => "Bookkeeping - Sign Up.", "class" => "img-responsive"]);
            ?>
            <br/>
            <?= Yii::t('app','Sign Up for a Free Trial (no credit card needed)'); ?>
        </div>
        <?= 
            Html::img(
              Url::to("@web/frontend/assets/images/arrow.png?v=1.0", true), 
              ["alt" => "arrow", "class" => "img-responsive arrow"]);
        ?>
        <div class="signup-part">
            <?= 
                Html::img(
                  Url::to("@web/frontend/assets/images/custom-icons/icon_signup-step-2.png?v=1.0", true), 
                  ["alt" => "Bookkeeping - Meet Your Bookkeeper.", "class" => "img-responsive"]);
            ?>
            <br/>
            <?= Yii::t('app','Meet Your Bookkeeper'); ?>
        </div>
        <?= 
            Html::img(
              Url::to("@web/frontend/assets/images/arrow.png?v=1.0", true), 
              ["alt" => "arrow", "class" => "img-responsive arrow"]);
        ?>
        <div class="signup-part">
            <?= 
                Html::img(
                  Url::to("@web/frontend/assets/images/custom-icons/icon_signup-step-3.png?v=1.0", true), 
                  ["alt" => "Bookkeeping - Receive a Free Income Statement.", "class" => "img-responsive"]);
            ?>
            <br/>
            <?= Yii::t('app','Receive a Free Income Statement'); ?>
        </div>
      </div>    
        <a href="#" class="btn btn-primary start-trial-button btn-front-page" onclick = "fbq('track', 'InitiateCheckout');ga('send','event','Footer','Prøv gratis');">
            <?= Yii::t('app','Start Your Free Trial'); ?>
        </a>

    </div>
</section>
