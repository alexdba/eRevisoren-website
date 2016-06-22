<?php 
use yii\helpers\Url;
?>
<section class="app">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2">
                <h3 class="text wow fadeInLeft animated separator-line1" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                  <?= Yii::t('app', 'Nyhed – Gratis App gør din arbejdsdag endnu nemmere'); ?>
                </h3>
                <p>Så snart du modtager et bilag, kan du med eBogholderens nye App tage et billede af det.<br/>
        Herefter bliver bilaget automatisk leveret til din bogholder, som klarer resten. Og du sikrer dig at bilaget ikke bliver glemt eller mistet i den travle hverdag.</p>
                <ol>
                    <li>Tag et billlede af dit bilag</li>
                    <li>Billedet bliver automatisk sendt til og gemt hos eBogholderen</li>
                    <li>Den personlige bogholder klarer resten</li>
                </ol>
                <p class="lead">eBogholderens App er gratis for alle vores kunder og kan downloades på Google play eller Apple App Store.</p>
                <p>
                    <a href="https://itunes.apple.com/dk/app/ebogholderen/id553446216?l=da&mt=8" target="_blank"><img src="<?=Url::to('@web/assets/images/apple-play.jpg')?>" alt="App Store"/></a>
                    <a href="https://play.google.com/store/apps/details?id=dk.ebogholderen.images&hl=dk" target="_blank"><img src="<?=Url::to('@web/assets/images/google-play-store.jpg')?>" alt="Google play"/></a>
                </p>
            </div>
        </div>
    </div>
</section>
