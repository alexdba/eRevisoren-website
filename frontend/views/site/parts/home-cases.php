<?php 
use yii\helpers\Url;
use frontend\models\CustomerCases;
?>
<section class="cases" id="cases">
    <div class="cases_container">
    	<div class="container">
            <div id="speeches">
              	<div class="section-header">
                	<h6 class="dark-text" style="font-size:50px;">What Our Customers Say</h6>
                	<h6 style="color:#0C3B45;">How Real Customers Have Benefitted from ClickBooks</h6>
                </div>
                <div class="play-video">
                    <img src="<?= Url::to("@web/frontend/assets/images/home/video-clients.jpg", true); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <br/>
        <div class="row">
            <img class="starting-quote" src="<?= Url::to("@web/frontend/assets/images/home/starting-quote.png", true); ?>">
            <?php
                $template = '
                    <div class="speech_heading_text">
                        "[!heading!]"
                    </div>
                    <span class="typer_name">[!name!], [!position!]</span>
                    </div>
                ';
                echo $model->get($template, 0);
            ?>
            
            <div class="left_navigate_button navi">&nbsp;</div>
            <div class="right_navigate_button navi">&nbsp;</div>
            <div class="col-sm-12 text-center pricing_info">
                <a href='<?= Url::to(["site/testimonials"]); ?>'>VIEW FULL TESTIMONIALS HERE</a>
            </div>
            <img class="ending-quote" src="<?= Url::to("@web/frontend/assets/images/home/ending-quote.png", true); ?>">
        </div>
	</div>
</section>
<script type="text/javascript">
    var cases =<?= $model->getJSON();?>;
    var case_index = 0;
</script>