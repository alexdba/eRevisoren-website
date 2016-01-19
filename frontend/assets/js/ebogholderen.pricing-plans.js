/* =================================
 Handle billed yearly/monthly buttons
 =================================== */
$(document).ready(function () {


    $('#button_monthly').on('click',function(){
        priceSelect.selectDefinedPrice(true);
    });
    
    $('#button_yearly').on('click',function(){
        priceSelect.selectDefinedPrice(false);
    });

   //tooltips
    $('.qtip1').qtip({
        position: {
            my: 'top center',  // Position my top left...
            at: 'bottom center', // at the bottom right of...
        },
        style: { classes: 'qtip-1' }
    });
    $('.qtip2').qtip({
        position: {
            my: 'top center',  // Position my top left...
            at: 'bottom center', // at the bottom right of...
        },
        style: { classes: 'qtip-2' }
    });
    $('.qtip3').qtip({
        position: {
            my: 'top center',  // Position my top left...
            at: 'bottom center', // at the bottom right of...
        },
        style: { classes: 'qtip-3' }
    });
    $('.qtip4').qtip({
        position: {
            my: 'top center',  // Position my top left...
            at: 'bottom center', // at the bottom right of...
        },
        style: { classes: 'qtip-4' }
    });
});
    //object for handling selecting price
    var priceSelect = {
        'animatePrice' : function(element_selector,from_price,to_price){
            var $el = $(element_selector); //[make sure this is a unique variable name]
            $({newValue: from_price}).animate({newValue: to_price}, {
                'duration' : 1000,
                'easing'   :'swing', // can be anything
                'step'     : function() { // called on every step
                    // Update the element's text with rounded-up value:
                    $el.text(Math.round(this.newValue));
                }
            });
        },
        'selectDefinedPrice' : function(monthly){
            if(monthly){
                price_light      = {'from':'', 'to':95 };
                price_standard   = {'from':'', 'to':145};
                price_plus       = {'from':'', 'to':345};
                button_highlight   = '#button_yearly';
                button_unhighlight = '#button_monthly';
                //images
                $('.package-light').css('background-image','url(../frontend/assets/images/home/price-light-clean-maned.jpg?v=1.5)');
                $('.package-standard').css('background-image','url(../frontend/assets/images/home/price-standard-clean-maned.jpg?v=1.5)');
                $('.package-plus').css('background-image','url(../frontend/assets/images/home/price-plus-clean-maned.jpg?v=1.5)');
            }else
            {//yearly
                price_light      = {'from':95 , 'to':''};
                price_standard   = {'from':145, 'to':''};
                price_plus       = {'from':345, 'to':''};
                button_highlight   = '#button_monthly';
                button_unhighlight = '#button_yearly';
                //images
                $('.package-light').css('background-image','url(../frontend/assets/images/home/price-light-clean.jpg?v=1.5)');
                $('.package-standard').css('background-image','url(../frontend/assets/images/home/price-standard-clean.jpg?v=1.5)');
                $('.package-plus').css('background-image','url(../frontend/assets/images/home/price-plus-clean.jpg?v=1.5)');
            }

            if($('#price_standard').html()==price_standard.to)
                return;
                
            $('#price_light').text(price_light.to);
            $('#price_standard').text(price_standard.to);
            $('#price_plus').text(price_plus.to);
            //disabled for a time
            // this.animatePrice('#price_light',price_light.from,price_light.to);
            // this.animatePrice('#price_standard',price_standard.from,price_standard.to);
            // this.animatePrice('#price_plus',price_plus.from,price_plus.to);
            
            
            $(button_highlight).removeClass().addClass('color-blue');
            $(button_unhighlight).removeClass().addClass('color-black underline');
        }
    };

