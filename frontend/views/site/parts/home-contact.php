<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
?>
<section class="contact-us" id="contact-us">
	<div class="container">
  	<div class="section-header">
    	<h2 class="dark-text">Contact Us</h2>
    </div>
    <div class="row">
        
            <?php $form = ActiveForm::begin(['id' => 'contact-form', 'action' => ['site/contact'], 'options' => ['class' => 'ajax_form' ] ]); ?>
            	<div class="col-lg-12"><?= $form->field($model, 'name') ?></div>
                <div class="col-lg-6"><?= $form->field($model, 'email') ?></div>
                <div class="col-lg-6"><?= $form->field($model, 'phone') ?></div>
                <div class="col-lg-12"><?= $form->field($model, 'note')->textArea(['rows' => 6]) ?></div>
                <div class="col-lg-6"><?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-3">{input}</div></div>',
                ]) ?></div>
                <div class="form-group col-lg-6">
                	<span id="notice"></span>
                    <?= Html::submitButton('Submit Form', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
	</div>
</section>