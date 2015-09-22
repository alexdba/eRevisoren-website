<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\captcha\Captcha;
use frontend\models\NewsletterForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\CallMeBackForm */

$model = new NewsletterForm();
?>
<div class="home-attention-row-wrapper index-test-b">
  <div class="container">
    <div class="row home-attention-row">
      <div class="col-xs-12 col-md-12 intro attention-box">
        <div class="home-attention-row-subcontainer">
          <div id="newsletter-container">
               <?php $form = ActiveForm::begin(['id' => 'newsletter-form', 'action' => ['site/newsletter'], 'options' => ['class' => 'ajax_form' ] ]); ?>
                  <h5 class="text-center h4 newsletter-header">Hold dig opdateret på eBogholderen med fremtidige tilbud</h5>
                  <div class="col-md-12"><?= $form->field($model, 'name',['inputOptions'=>['placeholder'=>'Navn*']])->label(false) ?></div>
                  <div class="col-md-12"><?= $form->field($model, 'email',['inputOptions'=>['placeholder'=>'E-mail*']])->label(false) ?></div>
    
                  <div class="form-group col-md-12 newsletter-buttons">
                    <span id="notice"></span>
                    <?= Html::submitButton('Ja tak, hold mig opdateret', ['class' => 'btn btn-success btn-newsletter', 'name' => 'contact-button']) ?>
                  </div>
              <?php ActiveForm::end(); ?>
          </div>

            
          <div class="attention-row-headings">
            <h4 class="fullscreen-page-heading">
              <?= Yii::t('app', 'Vi laver løbende bogføring, moms- og årsopgørelse for kun 4.800,- per år.'); ?>
              <div class="intro_sub_heading">
                <?= Yii::t('app', 'Alt du skal gøre er at tage billeder af dine bilag med vores app'); ?>
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
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>