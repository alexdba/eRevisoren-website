<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;

Modal::begin([
	'id' => 'modalReceipt',
	'header' => '<h3 class="modal-signup">' . Yii::t('app', 'Vi har modtaget din henvendelse') . '</h3>',
]);
?>
    <br/>
    <div class="text-left">
        <p>Tak for din interesse.</p>
        <p>Vi tilstræber at besvare alle henvendelser inden for 24 timer.</p>
        <p>Har du ikke hørt fra os, er du altid velkommen til at følge op på din status, ved at kontakte os direkte på telefon 91 11 11 97</p>
        <p>Vi glæder os til at snakke med dig,<br/>Team eBogholderen</p>
    </div>
    <div class="form-group">
        <br/>
        <div class="col-lg-12"><?= Html::button('OK', ['class' => 'btn btn-primary btn-modal-close','data-dismiss' => 'modal']) ?></div>
        <br/><br/>
    </div>
<?php 
Modal::end();