/* ================================
===  BACKGROUND SLIDER        ====
================================= */
$.vegas('slideshow', {
  delay:6000,
  backgrounds:[
    { src:config.baseUrl+'assets/themes/zerif/images/home/privat/forweb_2designer.jpg', fade:1000 },
    { src:config.baseUrl+'assets/themes/zerif/images/home/privat/forweb_farogdatter.jpg', fade:1000 },
    { src:config.baseUrl+'assets/themes/zerif/images/home/privat/forweb_tek-kvinde-cph.jpg', fade:1000 }
  ]
});


/* =================================
   LOADER
=================================== */
// makes sure the whole site is loaded
jQuery(window).load(function() {
        // will first fade out the loading animation
    jQuery(".status").fadeOut();
        // will fade out the whole DIV that covers the website.
    jQuery(".preloader").delay(200).fadeOut("slow");
})


/* =================================
===  Bootstrap Fix              ====
=================================== */
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement('style')
  msViewportStyle.appendChild(
    document.createTextNode(
      '@-ms-viewport{width:auto!important}'
    )
  )
  document.querySelector('head').appendChild(msViewportStyle)
}

/* =================================
===  STICKY NAV                 ====
=================================== */

$(document).ready(function() {
  $('.main-nav-list').onePageNav({
    changeHash: true,
    scrollThreshold: 0.2, // Adjust if Navigation highlights too early or too late
    scrollOffset: 75 //Height of Navigation Bar
  });

  // Sticky Header - http://jqueryfordesigners.com/fixed-floating-elements/
  var top = $('#main-nav').offset().top - parseFloat($('#main-nav').css('margin-top').replace(/auto/, 0));

  $(window).scroll(function (event) {
    // what the y position of the scroll is
    var y = $(this).scrollTop();

    // whether that's below the form
    if (y >= top) {
      // if so, ad the fixed class
      $('#main-nav').addClass('fixed');
    } else {
      // otherwise remove it
      $('#main-nav').removeClass('fixed');
    }
  });

  // Link to section a
  $('a.section-b').click(function() {
      window.location.href = $(this).attr('href');
  });

  // Text decoration
  $('.first-menu-a').addClass("current");
});


/*=================================
===  OWL CROUSEL               ====
===================================*/
   $(document).ready(function() {
  var owl = $("#client-feedbacks");
  owl.owlCarousel({
      items : 2, //10 items above 1000px browser width
      itemsDesktop : [1000,2], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
});


/*=================================
===  SMOOTH SCROLL             ====
=================================== */
var scrollAnimationTime = 1200,
        scrollAnimation = 'easeInOutExpo';
    $('a.scrollto').bind('click.smoothscroll',function (event) {
        event.preventDefault();
        var target = this.hash;
        $('html, body').stop().animate({
            'scrollTop': $(target).offset().top
        }, scrollAnimationTime, scrollAnimation, function () {
            window.location.hash = target;
        });
    });

/* ================================
===  PROJECT LOADING           ====
================================= */

$(document).ready(function($) {
    
    $('.branch-more').on('click', function(event) {
        event.preventDefault();

        var href = $(this).attr('href') + ' .single-project',
            portfolioList = $('#portfolio-list'),
            content = $('#loaded-content');

        portfolioList.animate({'marginLeft':'-120%'},{duration:400,queue:false});
        portfolioList.fadeOut(400);
        setTimeout(function(){ $('#loader').show(); },400);
        setTimeout(function(){
            content.load(href, function() {
                $('#loaded-content meta').remove();
                $('#loader').hide();
                content.fadeIn(600);
                $('#back-button').fadeIn(600);
                $('#buy-button').fadeIn(600);
            });
        },800);

    });

    $('#back-button').on('click', function(event) {
        event.preventDefault();

        var portfolioList = $('#portfolio-list')
            content = $('#loaded-content');

        content.fadeOut(400);
        $('#back-button').fadeOut(400);
        $('#buy-button').fadeOut(400);
        setTimeout(function(){
            portfolioList.animate({'marginLeft':'0'},{duration:400,queue:false});
            portfolioList.fadeIn(600);
        },800);
    });

    /* START faq list */
    $('.faq-more').on('click', function(event) {
        event.preventDefault();

        var href = $(this).attr('href') + ' .faq-single-project',
            faqPortfolioList = $('#faq-portfolio-list'),
            faqContent = $('#faq-loaded-content');

        faqPortfolioList.animate({'marginLeft':'-120%'},{duration:400,queue:false});
        faqPortfolioList.fadeOut(400);
        setTimeout(function(){ $('#faq-loader').show(); },400);
        setTimeout(function(){
            faqContent.load(href, function() {
                $('#faq-loaded-content meta').remove();
                $('#faq-loader').hide();
                faqContent.fadeIn(600);
                $('#faq-back-button').fadeIn(600);
            });
        },800);

    });

    $('#faq-back-button').on('click', function(event) {
        event.preventDefault();

        var faqPortfolioList = $('#faq-portfolio-list')
            faqContent = $('#faq-loaded-content');

        faqContent.fadeOut(400);
        $('#faq-back-button').fadeOut(400);
        setTimeout(function(){
            faqPortfolioList.animate({'marginLeft':'0'},{duration:400,queue:false});
            faqPortfolioList.fadeIn(600);
        },800);
    });
    /* END faq list */

    $('#kontakt-form').validate({
      submitHandler: function() {
        $.post("home/postcontact", $('#kontakt-form').serialize(), function(result) {
              // ... process the result ...
          }, 'json')
          .done(function() {
              $('#success-contack-submit').modal('show');
              $('#inputName').val('');
              $('#inputEmail').val('');
              $('#inputSubject').val('');
              $('#inputDescription').val('');
          });
        }
    });

});

/* ================================
===  PARALLAX                  ====
================================= */
$(document).ready(function(){
  var $window = $(window);
  $('div[data-type="background"], header[data-type="background"], section[data-type="background"]').each(function(){
    var $bgobj = $(this);
    $(window).scroll(function() {
      var yPos = -($window.scrollTop() / $bgobj.data('speed'));
      var coords = '50% '+ yPos + 'px';
      $bgobj.css({
        backgroundPosition: coords
      });
    });
  });
});

/* ================================
===  KNOB                      ====
================================= */
$(function() {
$(".skill1").knob({
                'max':100,
                'width': 64,
                'readOnly':true,
                'inputColor':' #FFFFFF ',
                'bgColor':' #222222 ',
                'fgColor':' #e96656 '
                });
$(".skill2").knob({
                'max':100,
                'width': 64,
                'readOnly':true,
                'inputColor':' #FFFFFF ',
                'bgColor':' #222222 ',
                'fgColor':' #34d293 '
                });
  $(".skill3").knob({
                'max': 100,
                'width': 64,
                'readOnly': true,
                'inputColor':' #FFFFFF ',
                'bgColor':' #222222 ',
                'fgColor':' #3ab0e2 '
                });
  $(".skill4").knob({
                'max': 100,
                'width': 64,
                'readOnly': true,
                'inputColor':' #FFFFFF ',
                'bgColor':' #222222 ',
                'fgColor':' #E7AC44 '
                });
});

/* =================================
===  WOW ANIMATION             ====
=================================== */
$('.bxslider').bxSlider({
    auto: true,
    autoControls: true
  });

new WOW().init();