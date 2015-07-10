<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = Yii::t('app', 'Hos eBogholderen er prisen alt inklusive Men det er stadig dit ansvar');
$this->params['breadcrumbs'][] = $this->title;

// $this->params["top_banner"] = '<img src="' . Url::to("@web/assets/images/cancellation-policy.jpg", true) . '" class="document-img" />';
?>
<div class="document">
	<div class="section-header">
    	<h2 class="dark-text"><?= Html::encode($this->title) ?></h2>
    </div>
	<div class="document-content">
   		<?= $model->get('https://docs.google.com/document/d/11nNzJnMMTDt9x11BEw477GnwUn3Dwm5wz3DHPIdHbUY/pub?embedded=true') ?>
    </div>
</div>