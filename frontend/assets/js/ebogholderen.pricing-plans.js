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
                price_light      = {'from':149, 'to':175};
                price_standard   = {'from':399, 'to':465};
                price_plus       = {'from':599, 'to':699};
                button_highlight   = '#button_yearly';
                button_unhighlight = '#button_monthly';
            }else
            {//yearly
                price_light      = {'from':175, 'to':149};
                price_standard   = {'from':465, 'to':399};
                price_plus       = {'from':699, 'to':599};
                button_highlight   = '#button_monthly';
                button_unhighlight = '#button_yearly';
            }

            if($('#price_standard').html()==price_standard.to)
                return;
                
            this.animatePrice('#price_light',price_light.from,price_light.to);
            this.animatePrice('#price_standard',price_standard.from,price_standard.to);
            this.animatePrice('#price_plus',price_plus.from,price_plus.to);
            
            
            $(button_highlight).removeClass().addClass('color-blue');
            $(button_unhighlight).removeClass().addClass('color-black underline');
        }
    };

