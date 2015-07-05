/* =================================
 Handle Signup modal
 =================================== */
$(document).ready(function () {


    calmeback.initCallMeBackAjaxSubmit();	


    //button events

    //top menu page CallMeBack
	$('.callmeback-menu-item').on('click', function(e){
        calmeback.showCallMeBackForm();
	});
	
    //home page CallMeBack
	$('#callme-button').on('click', function(e){
        calmeback.showCallMeBackForm();
	});
	


});
    //handle CallMeBack
    var calmeback = {
        'showCallMeBackForm' : function(){
            //clean notice
            $('#modalCallMeBack div#notice').removeClass()
                .html('');
            $('#modalCallMeBack').modal('show');
        },
        'initCallMeBackAjaxSubmit' : function () {
    
    	    // set the event handlers
    	    $('#callmeback-form').on('beforeSubmit', function(e) {
    	        setNotice($(this).find('div#notice'), 'info', 'Sending email...');
    	        
    	        calmeback.sendCallMeBack($(this));

    	        return false;
    	    //no submit
    	    }).on('submit', function(e){
    	        e.preventDefault();
    	    });

    	},
    	'sendCallMeBack' : function(form){
	        $.post(
	            form.attr("action"),
	            form.serialize()
	        )
	        .done(function(result) { calmeback.successCallMeBack(form, result);  })
	        .fail(function() {
	            console.log("server error");
	            setNotice(form.find('div#notice'), 'danger', "Server error");
	        });
    	},
    	'successCallMeBack' : function(form,result){
            success = ((typeof result.status != 'undefined')&&(result.status=='success'));
            message = 'Error';
            if(typeof result.message != 'undefined')
            	message = result.message;
            	
            setNotice(form.find('div#notice'), (success?'success':'danger'), message);
            

            if(success){
                
                //log submit form to google analytics
                ga('send', 'event' , 'Forms' , 'Submit' , 'call-me-back-form' );                
                
                //change button to close
                $('.btn-modal-callmeback').removeClass('btn-modal-callmeback')
                    .addClass('btn-modal-close')
                    .attr('type','button')
                    .html('Close')
                    .on('click', function(){$('#modalCallMeBack').modal('hide');});
                    
            }
    	}
    };
	


