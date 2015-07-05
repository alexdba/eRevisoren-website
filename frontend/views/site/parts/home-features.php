<?php 
use yii\helpers\Url;
?>
<section class="features privat" id="features">
  <div class="container">
    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION TITLE -->
      <h2 class="dark-text">Features</h2>

      <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
      <h6>
        A revolution for the small-business owner
      </h6>
    </div>
    <!-- / END SECTION HEADER -->

    <!-- FEATURES -->
    <div class="row">
      <!-- FEATURES COLUMN LEFT -->
      <div class="col-md-6 col-sm-6 wow fadeInLeft animated" 
           data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
        <!-- FEATURE -->
        <div class="feature">
          <div class="feature-icon">
            <img src="<?= Url::to("@web/frontend/assets/images/custom-icons/icon_save-money.png", true); ?>">
          </div>
          <h5>It Saves Money</h5>
          <p>
            ClickBooks gives you great value for your money. Not only do we offer the
            lowest bookkeeping rates in America. But on top of that our clients find
            that they are finally able to easily capture all of their receipts and thereby
            getting their full tax deductions.
          </p>
        </div>
        <!-- / END FEATURE -->

        <!-- FEATURE -->
        <div class="feature">
          <div class="feature-icon">
            <img src="<?= Url::to("@web/frontend/assets/images/custom-icons/icon_bookkeeper.png", true); ?>">
          </div>
          <h5>Top Notch Experienced Bookkeepers</h5>
          <p>
            At ClickBooks we only use the best bookkeepers. Our bookkeepers are all 
            certified seasoned professionals carefully selected, tested and trained in
            using the latest tools and technologies.
          </p>
        </div>
        <!-- / END FEATURE -->

        <!-- FEATURE -->
        <div class="feature">
          <div class="feature-icon">
            <img src="<?= Url::to("@web/frontend/assets/images/custom-icons/icon_secure.png", true); ?>">
          </div>
          <h5>It's highly Secure</h5>
          <p>
          	The security and privacy of your data is our highest priority. To ensure
          	your safety we have invested in the latest state-of-the art technologies
          	used by large banking and leading financial institutions.
          </p>
        </div>
        <!-- / END FEATURE -->
      </div> <!-- / FEATURES COLUMN LEFT -->

      <!-- FEATURES COLUMN RIGHT -->
      <div class="col-md-6 col-sm-6 wow fadeInRight animated" 
           data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
        <!-- FEATURE -->
        <div class="feature">
          <div class="feature-icon">
            <img src="<?= Url::to("@web/frontend/assets/images/custom-icons/icon_save-time.png", true); ?>">
          </div>
          <h5>It Saves Time</h5>
          <p>
            With ClickBooks your time spent organizing your receipt and invoices
            have just been dramatically reduced. Not only the time you spend on
            organizing but also the time you spend worrying about it.
          </p>
        </div>
        <!-- / END FEATURE -->
        
        <!-- FEATURE -->
        <div class="feature">
          <div class="feature-icon">
            <img src="<?= Url::to("@web/frontend/assets/images/custom-icons/icon_easy.png", true); ?>">
          </div>
          <h5>It's Incredibly Easy to Use</h5>
          <p>
            You'll never find a service that's easier to use than Clickbooks. Use our simple app
            to take pictures of your receipts and invoices and just 
            let us take it from there. You're only 5 minutes away from being fully and finally
            out of the bookkeeping business.
          </p>
        </div>
        <!-- / END FEATURE -->
        
        <!-- FEATURE -->
        <div class="feature">
          <div class="feature-icon">
            <img src="<?= Url::to("@web/frontend/assets/images/custom-icons/icon_with-you.png", true); ?>">
          </div>
          <h5>It's Always With You</h5>
          <p>
            With the ClickBooks App it's like always having your bookkeeper available
			and by your side. You never have to worry about managing and storing
			your invoices and receipts. You can always go to the personal Picture
            Archive online and print them.
          </p>
        </div>
        <!-- / END FEATURE -->
      </div> <!-- / END FEATURES COLUMN RIGHT -->
    </div> <!-- / END FEATURES -->
  </div> <!-- / END CONTAINER -->
</section>
