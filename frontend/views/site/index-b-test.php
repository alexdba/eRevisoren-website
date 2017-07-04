<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use frontend\models\CallMeBackForm;
use frontend\models\CustomerCases;

$modelCallMeBackForm = new CallMeBackForm();

$this->title = 'eRevisoren.dk';
$this->registerJsFile(
  Url::to("@web/frontend/assets/js/home.private.js?v=1.3"), [
    "depends" => "\\frontend\\assets\\AppAsset"
  ]);
$this->registerJsFile(
  Url::to("@web/frontend/assets/js/ebogholderen.index.js?v=2.5"), [
    "depends" => "\\frontend\\assets\\AppAsset"
  ]);
  
$this->registerCssFile('@web/frontend/assets/css/index-test-b.css?v=1.2', [
    "depends" => "\\frontend\\assets\\AppAsset"
  ]);
  
$this->params["attention_row"] = $this->render("parts/home-attention-row-test-b", [
        'model' => $modelCallMeBackForm,
      ]);
      
$model = new CustomerCases();
?>
<?= $this->render("parts/home-how-it-works"); ?>
<?= $this->render("parts/home-cases", [
      'model' => $model,
    ]); 
?>
<?= $this->render("parts/home-separator"); ?>
<?= $this->render("parts/home-features"); ?>
<?= $this->render("parts/home-start-your-free-trial"); ?>
<?= $this->render("parts/home-faq"); ?>