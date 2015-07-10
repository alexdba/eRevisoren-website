<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'My Clickbooks - Which pricing plan is right for you?';


$this->registerJsFile(
  Url::to("@web/frontend/assets/js/ebogholderen.pricing-plans.js?v=1.5"), [
    "depends" => "\\frontend\\assets\\AppAsset"
  ]);
  
$this->registerCssFile(
  Url::to("@web/frontend/assets/css/responsive-pricing-page.css?v=1.1"), [
    "depends" => "\\frontend\\assets\\AppAsset"
  ]);

?>
<section class="pricing-page privat" id="pricing-page">
  <div class="packages-page packages-container">
      	<div class="section-header">
        	<h2 class="subpage dark-text"><?= Yii::t('app','Which pricing plan is right for you?'); ?></h2>
        </div>
    <div class="row">
      <div class="table-responsive">
        <table class="prices">
            <thead>
                <tr>
                    <td colspan="3" class="text-right">
                        <div class="text-left button_yearly_monthly">
                            <strong class="color-black"><?= Yii::t('app','SELECT BILLING PERIOD:'); ?></strong>
                            <br/>
                            <span class="nowrap">
                            <button id="button_yearly"
                                         class="color-black underline"><?= Yii::t('app','Yearly (Save 17%)'); ?></button> 
                                         | 
                                         <button id="button_monthly"
                                 class="color-blue"><?= Yii::t('app','Monthly'); ?></button> 
                            </span>
                            <br/><br/><br/>
                        </div>
                        
                    </td>
                </tr>
                <tr class="package-tooltip-tr">
                  <th>
                      <div class="package-tooltip package-tooltip-1">
                          <?= Yii::t('app','If you’re self-employed without a separate company bank account and only have a few monthly receipts and invoices, but still want to keep your books in order. Then this Package is right for you.')?>
                      </div>
                  </th>
                  <th>
                      <div class="package-tooltip package-tooltip-2">
                          <?= Yii::t('app','Never miss a receipt or tax deduction. This package will pay for itself while giving you peace of mind in the process. Let us do the grunt work (cheaply), and leave only the taxes to your CPA or Tax consultant.')?>
                      </div>
                  </th>
                  <th>
                      <div class="package-tooltip package-tooltip-3">
                          <?= Yii::t('app','Why even pay a CPA or Tax Consultant if you don\'t have to. If your books are simple then so is your tax filing. Let us handle it all for just a little extra a month.')?>
                      </div>
                  </th>
                </tr>
                <tr>
                  <th>
                    <a href="#" 
                       class="package package-light btn-pricing-page qtip1" title="<?= Yii::t('app','If you’re self-employed without a separate company bank account and only have a few monthly receipts and invoices, but still want to keep your books in order. Then this Package is right for you.')?>">
                      <h4>
                        <span id="price_light">149</span>
                      </h4>
                    </a>
                  </th>
                  <th>
                    <a href="#" 
                       class="package package-standard btn-pricing-page qtip2" title="<?= Yii::t('app','Never miss a receipt or tax deduction. This package will pay for itself while giving you peace of mind in the process. Let us do the grunt work (cheaply), and leave only the taxes to your CPA or Tax consultant.')?>">
                      <h4>
                        <span id="price_standard">395</span>
                      </h4>
                    </a>
                  </th>
                  <th>
                    <a href="#" 
                       class="package package-plus  btn-pricing-page qtip3" title="<?= Yii::t('app','Why even pay a CPA or Tax Consultant if you don\'t have to. If your books are simple then so is your tax filing. Let us handle it all for just a little extra a month.')?>">
                      <h4>
                        <span id="price_plus">595</span>
                      </h4>
                    </a>
                  </th>
                </tr>
            </thead>
            <tbody>
                <tr class="even">
                    <td class="text"><?= Yii::t('app','Monthly Bookkeeping*'); ?></td>
                    <td class="text"><?= Yii::t('app','Monthly Bookkeeping*'); ?></td>
                    <td class="text"><?= Yii::t('app','Monthly Bookkeeping*'); ?></td>
                </tr>
                <tr class="odd">
                    <td class="text"><?= Yii::t('app','Unlimited accounting support'); ?></td>
                    <td class="text"><?= Yii::t('app','Unlimited accounting support'); ?></td>
                    <td class="text"><?= Yii::t('app','Unlimited accounting support'); ?></td>
                </tr>
                <tr class="even">
                    <td class="text"><?= Yii::t('app','Annual Tax Preparation'); ?></td>
                    <td class="text"><?= Yii::t('app','Annual Tax Preparation'); ?></td>
                    <td class="text"><?= Yii::t('app','Annual Tax Preparation'); ?></td>
                </tr>
                <tr class="odd">
                    <td class="text"><?= Yii::t('app','Online Archive of Receipts and Invoices'); ?></td>
                    <td class="text"><?= Yii::t('app','Online Archive of Receipts and Invoices'); ?></td>
                    <td class="text"><?= Yii::t('app','Online Archive of Receipts and Invoices'); ?></td>
                </tr>
                <tr class="even">
                    <td class="text"><?= Yii::t('app','Monthly reporting'); ?></td>
                    <td class="text"><?= Yii::t('app','Monthly reporting'); ?></td>
                    <td class="text"><?= Yii::t('app','Monthly reporting'); ?></td>
                </tr>
                <tr class="odd">
                    <td class="text"><?= Yii::t('app','Free use of our easy-to-use App'); ?></td>
                    <td class="text"><?= Yii::t('app','Free use of our easy-to-use App'); ?></td>
                    <td class="text"><?= Yii::t('app','Free use of our easy-to-use App'); ?></td>
                </tr>
                <tr class="even">
                    <td></td>
                    <td class="text"><?= Yii::t('app','Bank Reconciliation'); ?></td>
                    <td class="text"><?= Yii::t('app','Bank Reconciliation'); ?></td>
                </tr>
                <tr class="odd">
                    <td></td>
                    <td class="text"><?= Yii::t('app','Bank Reconciliation2'); ?></td>
                    <td class="text"><?= Yii::t('app','Bank Reconciliation2'); ?></td>
                </tr>
                <tr class="even">
                    <td></td>
                    <td></td>
                    <td class="text"><?= Yii::t('app','Tax Calculation'); ?></td>
                </tr>
                <tr class="odd">
                    <td></td>
                    <td></td>
                    <td class="text"><?= Yii::t('app','Tax Filing'); ?></td>
                </tr>
                <tr class="even">
                    <td></td>
                    <td></td>
                    <td class="text"><?= Yii::t('app','Tax Filing2'); ?></td>
                </tr>
                <tr class="odd">
                    <td></td>
                    <td></td>
                    <td class="text"><?= Yii::t('app','Tax Filing3'); ?></td>
                </tr>
                <tr>
                    <td><a href="#" 
             class="btn btn-primary product-button-green btn-pricing-page"><?= Yii::t('app','Start Your Free Trial'); ?></a></td>
                    <td><a href="#" 
             class="btn btn-primary product-button-green btn-pricing-page"><?= Yii::t('app','Start Your Free Trial'); ?></a></td>
                    <td><a href="#" 
             class="btn btn-primary product-button-green btn-pricing-page"><?= Yii::t('app','Start Your Free Trial'); ?></a></td>
                </tr>
          
            </tbody>
        </table>
      </div>
    </div>
    <br/>
    <br/>
    <div class="row">
        <div class="left foot-notes">
            <i class="notes"><?= Yii::t('app','Pricing plans notes'); ?></i>
        </div>
        <br class="clear"/><br/><br/>
        <h2 class="subheading"><?= Yii::t('app','Fine Print'); ?></h2>
        <br/>
        <div class="left">
            <?= Yii::t('app','*Included in both our packages are up to 500 transactions yearly, which covers the need of almost all self-employed people and small businesses.'); ?>
            <br/><br/>
            <?= Yii::t('app','However should you find yourself in the lucky circumstances that you have more transactions than what is included in your package, we will only charge you a mere 50 cents extra per additional transaction.'); ?>
        </div>
    </div>
    <br/>
    <br/>
  </div>
</section>
