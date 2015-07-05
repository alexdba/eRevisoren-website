<?php
use yii\helpers\Url;


$this->title = 'Testimonials';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="testimonials" id="testimonials">
	<div class="container">
      	<div class="section-header">
        	<h2 class="subpage dark-text"><?= $this->title;?></h2>
          <h6>
            What Our Customers Say About Us
          </h6>
        </div>
        <div>
        <?= $model->get('<div class="extended [!line_marker!]"><div class="item"><div class="img_container">[!html_img!]</div><div class="content"><img class="quotation" src="' . Url::to("@web/frontend/assets/images/", true) .  'quotation.png"/><h3>[!heading!]</h3><div class="text">"[!text!]"</div><div class="name"><strong>[!name!], [!position!]</strong></div></div></div></div>');?>
        </div>
    </div>
</section>
