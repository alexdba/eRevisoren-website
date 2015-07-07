/* =================================
 Set AJAX Form actions for form with class 'ajax_form'
 =================================== */
$(document).ready(function () {
	
    //ajax submit
	$('.ajax_form').each(function(){
		init_form_ajax_submit( $( this ) );
	});
	

	//show lightboxed window (watch video)
	$('#watch-button').on('click', function(e){
        //disable a link
        if(typeof e !== 'undefined')
            e.preventDefault();
            
	    videoLightbox.initVideoIFrame('First advertising video');
	});
	

    //open requested inline popup/window/modal
    //#video
    if(querystring('open')=='video'){
        videoLightbox.initVideoIFrame('First advertising video from link');
    }
    //#signup
    if(querystring('open')=='signup')
       signup.openSignUp('link');
       
       
    //init video for testimonials
    $('.play-video').on('click', function(){
        videoLightbox.initVideoIFrameTestimonials('Testimonials Video');
    });
    
    //tooltips
    $('.qtip1').qtip({
        position: {
            my: 'bottom center',  // Position my top left...
            at: 'top center', // at the bottom right of...
        },
        style: { classes: 'qtip-1' }
    });
    $('.qtip2').qtip({
        position: {
            my: 'bottom center',  // Position my top left...
            at: 'top center', // at the bottom right of...
        },
        style: { classes: 'qtip-2' }
    });
    $('.qtip3').qtip({
        position: {
            my: 'bottom center',  // Position my top left...
            at: 'top center', // at the bottom right of...
        },
        style: { classes: 'qtip-3' }
    });
    
});

	function init_form_ajax_submit($form) {

	    // set the event handlers
	    $form.on('beforeSubmit', function(e) {
	        var form = $(this);
	        
	        setNotice(form.find('span#notice'), 'info', 'Sending email...');
	        
	        $.post(
	            form.attr("action"),
	            form.serialize()
	        )
	        .done(function(result) {
	            success = ((typeof result.status != 'undefined')&&(result.status=='success'));
	            message = 'Error';
	            if(typeof result.message != 'undefined')
	            	message = result.message;
	            	
	            setNotice(form.find('span#notice'), (success?'success':'danger'), message);
	            
	            //log submit form to google analytics
                ga('send', 'event' , 'Forms' , 'Submit' , form.attr('id') );
                //log facebook conversion
                facebookConversionPixel('0.01');
	        })
	        .fail(function() {
	            console.log("server error");
	            setNotice(form.find('span#notice'), 'danger', "Server error");

	        });
	        return false;
	    //no submit
	    }).on('submit', function(e){
	        e.preventDefault();
	    });
	}


    var videoLightbox = {
        'initVideoIFrameTestimonials' : function (openVideoEvent){
    	    var videoiFrame = '<div class="wistia" style="width:700px;height:400px;position: absolute;  clip: rect(0px, 700px, 372px, 0px);"><iframe class="wistia_embed" name="wistia_embed" src="http://fast.wistia.net/embed/iframe/vq3mgwoyub?canonicalUrl=http%3A%2F%2Fpreview.simplifilm.com%2Fmedias%2Fvq3mgwoyub&canonicalTitle=CLICKBOOKS-FULL-PREVIEW-V08%20-%20Simplifilm" allowtransparency="true" frameborder="0" scrolling="no" width="700" height="400"></iframe></div>';
    		videoLightbox.lightbox(videoiFrame,700,400,openVideoEvent);
        },
        'initVideoIFrame' : function (openVideoEvent){
    	    videoLightbox.initVideoIFrameTestimonials(openVideoEvent);
        },
        //lightbox
        // display the lightbox
        'lightbox' : function (content, width, height, openVideoEvent){
            setTimeout(function(){
    
            	// add lightbox/shadow <div/>'s if not previously added
            	if($('#lightbox').size() == 0){
                    videoLightbox.initLightBox(width, height);
            	}
            	
                $('#lightbox-loading').show();
            	// insert HTML content
            	$('#lightbox').append(content);
            
            	// display the lightbox
            	$('#lightbox').show();
            	$('#lightbox-shadow').css('height',$('body').outerHeight()+'px').show();
            	
                //log "open video" to google analytics
                ga('send', 'event' , 'Video' , 'Open' , openVideoEvent );
                
                //facebook tracking
                facebookTrackingPixel('6027607836307');
            
                //disable scrolling
                scrolling.disable();

            	// move the lightbox to the center
            	videoLightbox.centerLightBox(width, height);
            	videoLightbox.centerLoadingMsg();
            
            },10);
        },
        'initLightBox': function(width, height){
    		var theLightbox = $('<div id="lightbox"/>');
    		var theLightboxLoading = $('<div id="lightbox-loading"/>').html('Loading video...');
    		var theShadow = $('<div id="lightbox-shadow"/>');
    		$(theShadow).click(function(e){
    			videoLightbox.closeLightbox();
    		});
    		
    		
    		//insert html elements
    		$('body').append(theShadow);
    		$('body').append(theLightboxLoading);
    		$('body').append(theLightbox);

    		//center on resize
        	$(window).on('resize',function(){
        	    videoLightbox.centerLightBox(width, height);
        	    videoLightbox.centerLoadingMsg();
        	});
    
    		$(window).click(function(e){
    			videoLightbox.closeLightbox();
    		});
        },
        'centerLightBox' : function (width, height){
            var counted_dimension = videoLightbox.countDimension(width, height);
            width  = counted_dimension.width;
            height = counted_dimension.height;
            
            videoLightbox.resizeLightBoxObjects(width, height);
            
            var left_ = ($(window).outerWidth() - width)/2,
                top_  = $(window).scrollTop() + ($(window).outerHeight() - height)/2;
        
        	// move the lightbox to the center
        	$('#lightbox').css({
        	                   'top': top_ + 'px',
        	                   'left' : left_
        	                   });
        },
        'countDimension' : function(width, height){
            var y_space = 10,
                new_width  = ($(window).outerWidth()-y_space<width?$(window).outerWidth()-y_space:width),
                new_height = height*new_width/width;
            return{'width':new_width, 'height':new_height};
        },
        'resizeLightBoxObjects' : function(width, height){
            $('#lightbox').children('div').css({'width':width+'px','height':height+'px'});
            $('#lightbox').children('div').children('iframe').css({'width':width+'px','height':height+'px'});
            
            //set clip if necessary
            if($('#lightbox').children('div').hasClass('wistia'))
                $('#lightbox').children('div').css('clip','rect(0px, '+width+'px, '+(height-28)+'px, 0px)');
        },
        'centerLoadingMsg' : function (){
            var height = 40,
                top_   = $(window).scrollTop() + ($(window).outerHeight() - height)/2;
        
        	// move the lightbox to the center
        	$('#lightbox-loading').css({
        	                   'top': top_ + 'px',
        	                   });
        },
        // close the lightbox
        'closeLightbox' : function (){
        
        	// hide lightbox and shadow <div/>'s
        	$('#lightbox').hide();
        	$('#lightbox-shadow').hide();
            $('#lightbox-loading').hide();
            
            $('#lightbox').empty();
    
        	//enable scrolling
        	scrolling.enable();
        }
        
    };





    
