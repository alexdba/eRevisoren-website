<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */
$this->registerCssFile(
  "http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple|Varela|Anton", 
  ["media" => "screen"]);
$this->registerCssFile(
  "//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css");
  
  
AppAsset::register($this);

$mainMenuItems = [
  ['label'       => Yii::t('app', 'How it works'), 
   'url'         => Yii::$app->homeUrl.'#how-it-works'],
  ['label'       => Yii::t('app', 'Features'), 
   'url'         => Yii::$app->homeUrl.'#features'],
  ['label'       => Yii::t('app', 'Pricing'), 
   'url'         => Url::to(["site/pricing-plans"]),
   'linkOptions' => ['class'=>'external' . (Url::to(["site/pricing-plans"])==$_SERVER['REQUEST_URI']?' current':'') ] ],
  ['label'       => Yii::t('app', 'FAQ'), 
   'url'         => Yii::$app->homeUrl.'#faq'],
  ['label'       => Yii::t('app', 'Contact'), 
   'url'         => Url::to(["site/contact"]),
   'linkOptions' => ['class'=>'external' . (Url::to(["site/contact"])==$_SERVER['REQUEST_URI']?' current':'')] ],
  ['label'       => Yii::t('app', 'Free Trial'), 
   'url'         => "#",
   'linkOptions' => ['class' => 'signup-menu-item external'] ],
  ['label'       => Yii::t('app', 'Call Me Back'), 
   'url'         => "#",
   'linkOptions' => ['class' => 'callmeback-menu-item external'] ],
];

$mainMenuItemsMobileVersion = [
  ['label'       => Yii::t('app', 'Home'), 
   'url'         => Yii::$app->homeUrl,
   'linkOptions' => ['class'=>'external']   
   ],
  ['label'       => Yii::t('app', 'Pricing'), 
   'url'         => Url::to(["site/pricing-plans"]),
   'linkOptions' => ['class'=>'external'] ],
  ['label'       => Yii::$app->params['contactPhone'], 
   'url'         => 'tel:' . str_replace('-','',Yii::$app->params['contactPhone']),
   'linkOptions' => ['class'=>'external mobile-phone'] ],
  ['label'       => Yii::t('app', 'Free Trial'), 
   'url'         => "#",
   'linkOptions' => ['class' => 'signup-menu-item external'] ],
];

$companyMenuItems = [
  ['label'       => Yii::t('app', 'Contact Us'), 
   'url'         => Url::to(["site/contact"])],
  ['label'       => Yii::t('app', 'Careers'), 
   'url'         => Url::to(["document/careers"])],
  ['label'       => Yii::t('app', 'Terms and conditions'), 
   'url'         => Url::to(["document/terms-and-conditions"])],
  ['label'       => Yii::t('app', 'Cancellation Policy'), 
   'url'         => Url::to(["document/cancellation-and-return-policies"])],
  ['label'       => Yii::t('app', 'Privacy Policy'), 
   'url'         => Url::to(["document/privacy-policy"])],
];

$serviceMenuItems = [
  ['label'       => Yii::t('app', 'Security'), 
   'url'         => Url::to(["document/security"])],
  ['label'       => Yii::t('app', 'Testimonials'), 
   'url'         => Url::to(["site/testimonials"])],
  ['label'       => Yii::t('app', 'For Accountants'), 
   'url'         => Url::to(["document/for-accountants"])],
];

$socialMenuItems = [
  ['label'       => Yii::t('app', 'Facebook'), 
   'url'         => "#"],
  ['label'       => Yii::t('app', 'Twitter'), 
   'url'         => "#"],
  ['label'       => Yii::t('app', 'Google +'), 
   'url'         => "#"],
  ['label'       => Yii::t('app', 'YouTube'), 
   'url'         => "#"],
  ['label'       => Yii::t('app', 'LinkedIn'), 
   'url'         => "#"],
];

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= Url::to("@web/assets/images/favicon.ico?v=1.4", true); ?>" />
    <link rel="apple-touch-icon" href="<?= Url::to("@web/assets/images/clickbooks-57x57.png?v=1.1", true); ?>"/> 
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="text/javascript">
      var config = {
        baseUrl : <?= json_encode(Url::to("@web", true)); ?>,
        assetsUrl : <?= json_encode(Url::to("@web/assets/", true)); ?>
      };      
    </script>
    <?php if(isset($this->params["html_head_appendix"])) : ?>
        <?= $this->params["html_head_appendix"]; ?>
    <?php endif; ?>
    
    <?= $this->render("../../config/google-analytics-tracking"); ?>
  </head>
  <body>
    <div style="display:none;"><?= $this->render("../../config/google-remarketing"); ?></div>
    <?php $this->beginBody() ?>
    <?= $this->render("../site/modal-signup"); ?>
    <?= $this->render("../site/modal-callmeback"); ?>
    <header id="home" class="header<?= (isset($this->params["attention_row"]) ? " with-attention-row" : ""); ?>">
      <div id="main-nav" class="navbar navbar-inverse bs-docs-nav<?= (isset($this->params["attention_row"]) ? "" : " fixed"); ?>" role="banner">
        <div class="container">
          <div class="navbar-header responsive-logo">
            <button class="navbar-toggle collapsed" type="button" 
                    data-toggle="collapse" data-target=".bs-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="<?= Yii::$app->homeUrl; ?>" class="navbar-brand logo">
              <img src="<?= Url::to("@web/assets/images/logo.jpg?v=1.2"); ?>" alt="ebogholderen.dk">
            </a>
            <a href="<?= Yii::$app->homeUrl; ?>" class="navbar-brand logo-white">
              <img src="<?= Url::to("@web/frontend/assets/images/home/Logo-white-clickbooks.png?v=1.0"); ?>" alt="ClickBooks">
            </a>
          </div>
          <nav class="navbar-collapse bs-navbar-collapse collapse" 
               role="navigation" style="height: 1px;"> 
            <div class="menu-container">
                <div class="fullscreen-menu">
                    <div class="top-phone"> <?=Yii::$app->params['contactPhone'];?></div>
                    <?php
                      echo Nav::widget([
                        'options' => ['class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list'],
                        'items'   => $mainMenuItems,
                      ]);
                    ?>
                </div>
                <div class="mobile-menu">
                    <?php
                      echo Nav::widget([
                        'options' => ['class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list'],
                        'items'   => $mainMenuItemsMobileVersion,
                      ]);
                    ?>
                </div>
            </div>
          </nav>
        </div>
      </div>
      <!-- / END TOP BAR -->
      <?php if(isset($this->params["attention_row"])) : ?>
        <?= $this->params["attention_row"]; ?>
      <?php endif; ?>
      <!-- / IMAGE TOP BANNER -->
      <?php if(isset($this->params["top_banner"])) : ?>
        <?= $this->params["top_banner"]; ?>
      <?php endif; ?>
      <!-- IMAGE TOP BANNER -->
    </header>
    <div id="content" <?= (isset($this->params["attention_row"]) ? "" : " class='container'"); ?>>
      <?= Alert::widget() ?>
      <?= $content ?>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-column">
            <h4>Company Information</h4>
            <?php
              echo Nav::widget([
                'options' => ['class' => 'footer-menu'],
                'items'   => $companyMenuItems,
              ]);
            ?>
          </div>
          <div class="col-md-3 footer-column">
            <h4>Service</h4>
            <?php
              echo Nav::widget([
                'options' => ['class' => 'footer-menu'],
                'items'   => $serviceMenuItems,
              ]);
            ?>
          </div>
          <div class="col-md-5 footer-column">
              <h4>Certificates</h4>
              ClickBooks accountants are certified by the following<br/>
              national associations of bookkeepers:<br/><br/>
            <?= 
              Html::img(
                Url::to("@web/assets/images/logo-associations.jpg?v=1.1", true),
                ["alt" => "associations", "class" => "img-responsive"]);
            ?>
          </div>
        </div>
      </div>
      <div class="copyright">
        <div class="container">
          &copy; Copyright <?= date("Y"); ?>, ClickBooks. All Rights Reserved.
        </div>
      </div>
    </div>
    </footer>
    <?php $this->endBody() ?>
    <?= $this->render("../../config/olark-chat"); ?>
  </body>
</html>
<?php $this->endPage() ?>