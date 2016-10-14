<?php 
use yii\helpers\Url;
?>
<section class="trustpilot">
    <div class="container">
        <h3 class="text wow fadeInLeft animated separator-line1" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
          <?= Yii::t('app', 'Vores kunder er glade!'); ?>
        </h3>
        <div class="row">
            <div class="col-sm-3 col-md-4 text-center">
                <img src="<?=Url::to('/frontend/assets/images/home/trustpilot-anmeldelser.jpg?2')?>" alt="" class="img-responsive anmeldelser"/>
            </div>
            <div class="col-sm-7 col-sm-offset-2 col-md-7 col-md-offset-1 lines">
                <ul class="list-unstyled text wow fadeInRight animated separator-line2">
                    <li><big><i>”Vi er 110% tilfredse med eBogholderen”</i></big> <small>Tommy Madsen, Logmar Camera Solution</small></li>
                    <li style="margin-left: 25px;"><big><i>“Dejlig menneskelig og hjælpsom support”</i></big> <small>Mikkel Preisler, Preisler Group</small></li>
                    <li style="margin-left: 50px;"><big><i>“Den bedste investering som start-up”</i></big> <small>Henrik Thorsen, Solid Skiing</small></li>
                </ul>
            </div>
        </div>
    </div>
</section>
