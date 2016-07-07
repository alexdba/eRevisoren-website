/* =================================
 Handle Signup modal
 =================================== */
$(document).ready(function () {


    signup.initSignupAjaxSubmit();	


    //button events

    //top menu page signup
	$('.signup-menu-item').on('click', function(e){
		signup.openSignUp('top-menu',e);
	});
	//front page signup
	$('.btn-front-page').on('click', function(e){
		signup.openSignUp('front-page',e);
		facebookTrackingPixel('6027607905707');
	});
	//pricing page signup
	$('.btn-pricing-page').on('click', function(e){
		signup.openSignUp('pricing-page',e);
		facebookTrackingPixel('6027607895907');
	});


    //show phone contact
    $('#signupform-contact_me').on('change click', function(){
        if($(this).prop('checked'))
            $('#signup-call_detail').fadeIn('slow');
        else
            $('#signup-call_detail').fadeOut('slow');
    });
	

});
    //handle signup
    var signup = {
        'way' : '',
        'signupSent' : false,
        'signupCloseEventSent' : false,
        'openSignUp' : function(way,e){
            //disable a link
            if(typeof e !== 'undefined')
                e.preventDefault();
            
            //clean notice
            $('#modalSignup div#notice').removeClass()
                .html('');
            
            signup.signupSent = false;
            
            signup.way = way;
            $('#modalSignup').modal('show');
            
            //send open signup event
            ga('send', 'event' , 'Forms' , 'Signup' , 'Open ' + signup.way );
            
            signup.signupCloseEventSent = false;
            
            //scrolling
            scrolling.disable(false);
            //close signup
            $('#modalSignup').on('hidden.bs.modal', function () {
                scrolling.enable();
                
                //log close without signup
                if(!signup.signupSent){
                    
                    //log close form to google analytics
                    if(!signup.signupCloseEventSent){
                        ga('send', 'event' , 'Forms' , 'Signup' , 'Close ' + signup.way );
                        signup.signupCloseEventSent = true;
                    }
                }
            })
        },
        'initSignupAjaxSubmit' : function () {
    
    	    // set the event handlers
    	    $('#signup-form').on('beforeSubmit', function(e) {
    	        setNotice($(this).find('div#notice'), 'info', 'Sending email...');
    	        
    	        signup.sendSignup($(this));

    	        return false;
    	    //no submit
    	    }).on('submit', function(e){
    	        e.preventDefault();
    	    });

    	},
    	'sendSignup' : function(form){
	        $.post(
	            form.attr("action"),
	            form.serialize()
	        )
	        .done(function(result) { signup.successSignup(form, result);  })
	        .fail(function() {
	            console.log("server error");
	            setNotice(form.find('div#notice'), 'danger', "Server error");
	        });
    	},
    	'successSignup' : function(form,result){
            success = ((typeof result.status != 'undefined')&&(result.status=='success'));
            message = 'Error';
            if(typeof result.message != 'undefined')
            	message = result.message;
            	
            setNotice(form.find('div#notice'), (success?'success':'danger'), message);
            
            //log submit form to google analytics
            ga('send', 'event' , 'Forms' , 'Signup' , signup.way );
            //log facebook conversion
            facebookConversionPixel('0.01');
            
            signup.signupSent = true;
            
            if(success){
                //change button to close
                $('.btn-modal-signup').removeClass('btn-modal-signup')
                    .addClass('btn-modal-close')
                    .attr('type','button')
                    .html('Close')
                    .on('click', function(){$('#modalSignup').modal('hide');});
                    
                // show receipt popup
                $('#modalSignup').modal('hide');
                $('#modalReceipt').modal('show');
            }
    	}
    };
	


