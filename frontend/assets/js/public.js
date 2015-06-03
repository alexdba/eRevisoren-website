/* =================================
 Public/global functions
 =================================== */
    $(document).ready(function () {
        //marking collapsed/expanded menu
        markCollapsedExpandedMenu();
        
        //placeholder for ie<=9
        $('input, textarea').placeholder({customClass:'my-placeholder'});
    });
    
    
    
    function markCollapsedExpandedMenu(){
        var flag = false;
        $('.navbar-toggle').bind('touchstart click', function(){
            
            if (!flag) {
                flag = true;
                setTimeout(function(){ flag = false; }, 10);            
                
                //expanded
                if(!$('nav').hasClass('in')){
                    $('header').removeClass('menu-collapsed')
                        .addClass('menu-expanded');
                }else{
                    $('header').removeClass('menu-expanded')
                        .addClass('menu-collapsed');
                }
            }
        });
    }
    

    //facebook tracking

    function facebookConversionPixel(fb_value){
        var image    = new Image(1,1),
            fb_pixel = '6033897843680';
        image.src = "//www.facebook.com/offsite_event.php?id=" + fb_pixel + "&amp;value=" + fb_value + "&amp;currency=DKK";
    }
    
    
    function facebookTrackingPixel(fb_pixel){
        (function() {
          var _fbq = window._fbq || (window._fbq = []);
          if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
          }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', fb_pixel, {'value':'0.00','currency':'USD'}]);
    }
    
    
    //gets param from url
    function querystring(key) {
        key = key.replace(/[*+?^$.\[\]{}()|\\\/]/g, "\\$&"); // escape RegEx meta chars
        var match = location.search.match(new RegExp("[?&]"+key+"=([^&]+)(&|$)"));
        return match && decodeURIComponent(match[1].replace(/\+/g, " "));
    }


	//state can be danger(error), success(success), info(loading...)
	function setNotice(notice_object, state, message){
		notice_object.html(message);
        notice_object.removeClass();
        notice_object.addClass('alert alert-'+state+'');
	}


    
    //scrolling
    var scrolling = {
        'disable' :function (){
            $('html, body').css({
                'overflow': 'hidden'
            });
            
            //disable mousewheel
            //defaul yes
            var disableMouseWheel = true;
            if((arguments.length===1)&&(arguments[0]===false))
                disableMouseWheel = false;
            
            if(disableMouseWheel)
                $('body').on({
                    'mousewheel': function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                })
        },
        'enable' : function (){
            $('html, body').css({
                'overflow': 'auto',
                'height': 'auto'
            });
            
            $('body').off('mousewheel');
        }
    };