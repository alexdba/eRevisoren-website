<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'My Clickbooks - Pricing Plan';


$this->registerJsFile(
  Url::to("@web/frontend/assets/js/ebogholderen.pricing-plans.js?v=1.3"), [
    "depends" => "\\frontend\\assets\\AppAsset"
  ]);

?>
<section class="pricing-page privat" id="pricing-page">
  <div class="packages-page packages-container">
      	<div class="section-header">
        	<h2 class="subpage dark-text">Pricing Plan</h2>
          <h6>
            We have chosen to keep our pricing as simple as our concept.<br/>

          </h6>
        </div>
        

    <br/>
    <div class="row">
      <div class="table-responsive">
        <table class="prices">
            <thead>
                <tr>
                    <td colspan="3">
                        <strong class="color-black">SELECT BILLING PERIOD:</strong>
                        &nbsp;
                        <span class="nowrap">
                        <button id="button_yearly"
                                     class="color-black underline">Yearly (Save 17%)</button> 
                                     | 
                                     <button id="button_monthly"
                             class="color-blue">Monthly</button> 
                        </span>
                        <br/><br/><br/>
                    </td>
                </tr>
                <tr>
                  <th>
                    <a href="#" 
                       class="package package-light btn-pricing-page">
                      <h4>
                        <span id="price_light">35</span>
                      </h4>
                    </a>
                  </th>
                  <th>
                    <a href="#" 
                       class="package package-standard btn-pricing-page">
                      <h4>
                        <span id="price_standard">75</span>
                      </h4>
                    </a>
                  </th>
                  <th>
                    <a href="#" 
                       class="package package-plus  btn-pricing-page">
                      <h4>
                        <span id="price_plus">95</span>
                      </h4>
                    </a>
                  </th>
                </tr>
            </thead>
            <tbody>
                <tr class="even">
                    <td class="text">Monthly Bookkeeping*</td>
                    <td class="text">Monthly Bookkeeping*</td>
                    <td class="text">Monthly Bookkeeping*</td>
                </tr>
                <tr class="odd">
                    <td class="text">Unlimited accounting support</td>
                    <td class="text">Unlimited accounting support</td>
                    <td class="text">Unlimited accounting support</td>
                </tr>
                <tr class="even">
                    <td class="text">Annual Tax Preparation</td>
                    <td class="text">Annual Tax Preparation</td>
                    <td class="text">Annual Tax Preparation</td>
                </tr>
                <tr class="odd">
                    <td class="text">Online Archive of Receipts and Invoices</td>
                    <td class="text">Online Archive of Receipts and Invoices</td>
                    <td class="text">Online Archive of Receipts and Invoices</td>
                </tr>
                <tr class="even">
                    <td class="text">Monthly reporting</td>
                    <td class="text">Monthly reporting</td>
                    <td class="text">Monthly reporting</td>
                </tr>
                <tr class="odd">
                    <td class="text">Free use of our easy-to-use App</td>
                    <td class="text">Free use of our easy-to-use App</td>
                    <td class="text">Free use of our easy-to-use App</td>
                </tr>
                <tr class="even">
                    <td></td>
                    <td class="text">Bank Reconciliation</td>
                    <td class="text">Bank Reconciliation</td>
                </tr>
                <tr class="odd">
                    <td></td>
                    <td></td>
                    <td class="text">Tax Calculation</td>
                </tr>
                <tr class="even">
                    <td></td>
                    <td></td>
                    <td class="text">Tax Filing</td>
                </tr>
                <tr>
                    <td><a href="#" 
             class="btn btn-primary product-button-green btn-pricing-page">Start<span class="more_text"> your FREE trial</span></a></td>
                    <td><a href="#" 
             class="btn btn-primary product-button-green btn-pricing-page">Start<span class="more_text"> your FREE trial</span></a></td>
                    <td><a href="#" 
             class="btn btn-primary product-button-green btn-pricing-page">Start<span class="more_text"> your FREE trial</span></a></td>
                </tr>
          
            </tbody>
        </table>
      </div>
    </div>
    <br/>
    <br/>
    <div class="row">
        <h2 class="subheading">Fine Print</h2>
        <br/>
        <div class="left">
            *Included in both our packages are up to 500 transactions yearly, which covers the need of almost all self-employed people and small businesses.
            <br/><br/>
            However should you find yourself in the lucky circumstances that you have more transactions than what is included in your package,
            we will only charge you a mere 50 cents extra per additional transaction.
        </div>
    </div>
    <br/>
    <br/>
  </div>
</section>
