<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\SignupForm;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$model = new SignupForm();

$this->registerJsFile(
  Url::to("@web/frontend/assets/js/ebogholderen.signup.js?v=1.4"), [
    "depends" => "\\frontend\\assets\\AppAsset"
  ]);


//Modal Form for Signup

Modal::begin([
	'id' => 'modalSignup',
	'header' => '<h2 class="modal-signup">' . Yii::t('app', 'FREE TRIAL') . '</h2>'
]);
?>
            <?php $form = ActiveForm::begin(['id' => 'signup-form', 'action' => ['site/signup' ] ]); ?>
            <br/><br/>
              <div id="signup-diagram"> 
                <div class="signup-part">
                    <?= 
                        Html::img(
                          Url::to("@web/frontend/assets/images/custom-icons/icon_signup-step-1.png?v=1.0", true), 
                          ["alt" => "Bookkeeping - Sign Up.", "class" => "img-responsive"]);
                    ?>
                    <br/>
                    Sign Up for a 
                    <br/>
                    Free Trial
                    <br/>
                    (no credit card needed)
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
                    Meet Your
                    <br/>
                    Bookkeeper
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
                    Receive a Free 
                    <br/>
                    Income Statement
                </div>
              </div>  
                <div class="form-group">

                	<div class="col-lg-12"><?= $form->field($model, 'name')->label(false)->textInput(array('placeholder' => 'NAME*')) ?></div>
                    <div class="col-lg-12"><?= $form->field($model, 'email')->label(false)->textInput(array('placeholder' => 'EMAIL*')) ?></div>

                    <div class="col-lg-12"><?= $form->field($model, 'contact_me')->checkbox() ?></div>
                    <div id="signup-call_detail">
                        <div class="col-lg-12"><?= $form->field($model, 'phone')->label(false)->textInput(array('placeholder' => 'PHONE NO.')) ?></div>
                        <div class="col-lg-12"><?= $form->field($model, 'contact_time')->label(false)->textInput(array('placeholder' => 'BEST TIME TO CONTACT (OPTIONAL)')) ?></div>
                    </div>
                    
                	<br class="clear"/> 
                	<div id="notice"></div>
    	
                    <div class="col-lg-12 text-right"><?= Html::submitButton('Sign Up', ['class' => 'btn btn-primary btn-modal-signup', 'name' => 'signup-button']) ?></div>
                    <br/><br/>
                </div>
            <?php ActiveForm::end(); ?>
<?php 
Modal::end();

