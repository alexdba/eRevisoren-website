<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\CallMeBackForm;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

$model = new CallMeBackForm();

$this->registerJsFile(
  Url::to("@web/frontend/assets/js/ebogholderen.callmeback.js?v=1.1"), [
    "depends" => "\\frontend\\assets\\AppAsset"
  ]);


//Modal Form for CallMeBack

Modal::begin([
	'id' => 'modalCallMeBack',
	'header' => '<h2 class="modal-signup">' . Yii::t('app', 'CALL ME BACK') . '</h2>'
]);
?>
            <?php $form = ActiveForm::begin(['id' => 'callmeback-form', 'action' => ['site/callmeback' ] ]); ?>
            <br/>

                <div class="form-group">
                    <br/>
                	<div class="col-lg-6 col-md-6 col-sm-6">
                	    <?= $form->field($model, 'phone')->textInput(array('placeholder' => '99 99 99 99')) ?>
                	</div>
                	<div class="col-lg-6 col-md-6 col-sm-6">
                	    <?= $form->field($model, 'name')->textInput(array('placeholder' => Yii::t('app', 'OPTIONAL'))) ?>
                	</div>
                	<br class="clear"/> 
                	
                	<div id="notice"></div>
    	            <br/>
                    <div class="col-lg-12"><?= Html::submitButton('SEND', ['class' => 'btn btn-primary btn-modal-callmeback', 'name' => 'callmeback-button', 'onclick'=>"fbq('track', 'CompleteRegistration'); ga('send','event','Send','Ring mig op');"]) ?></div>
                    <br/><br/>
                </div>
            <?php ActiveForm::end(); ?>
<?php 
Modal::end();