// SET Background slider
$.vegas('slideshow', {
  delay:7000,
  backgrounds:[
    { src:config.assetsUrl + 'themes/zerif/images/backgrounds/forweb_3byg.jpg', fade:1000 },
    { src:config.assetsUrl + 'themes/zerif/images/backgrounds/forweb_2Designer.jpg', fade:1000 },
    { src:config.assetsUrl + 'themes/zerif/images/backgrounds/forweb_1Fotograf2.jpg', fade:1000 }
  ]
});

// SET Loader animation
jQuery(window).load(function() {
        // will first fade out the loading animation
	jQuery(".status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery(".preloader").delay(200).fadeOut("slow");
})
