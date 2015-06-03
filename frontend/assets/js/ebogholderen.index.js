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
	
	
	//customer cases
	customerCases.init();


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

    //cases
    var customerCases = {
        'current_index': 0,
        'typeBubbleTextTimer' : undefined,
        'cases_height' : 0,
        'init' : function(){


            //navigation
            $('.right_navigate_button.navi').on('click', function(){
                customerCases.nextCaseText();
            });
            $('.left_navigate_button.navi').on('click', function(){
                customerCases.prevCaseText();
            });
        
            //and reset cases text heights on resize
            $(window).resize(function () { customerCases.setCasesHeight();  });
        
            //set cases text heights
            customerCases.setCasesHeight();
            
            //start auto typing
            customerCases.startAutoTypeBubbleText();
        },
        
        'nextCaseText' : function (){
            //do nothing without cases
            if(typeof cases == 'undefined')
                return;
                
            customerCases.current_index++;
            if(customerCases.current_index>cases.length-1){
                customerCases.current_index = 0;
            }
            //set height
            customerCases.setCasesHeight();
            
            customerCases.setBubbleText(customerCases.current_index);
        },
        'prevCaseText' : function (){
            customerCases.current_index--;
            if(customerCases.current_index<0){
                customerCases.current_index = cases.length-1;
            }
            //set height
            customerCases.setCasesHeight();
            
            customerCases.setBubbleText(customerCases.current_index);
        },
        'typeBubbleText' : function (remainingText){
            $('.speech_heading_text').html($('.speech_heading_text').html()+remainingText[0]);
            remainingText = remainingText.substr(1);
            if(remainingText.length==0){
                customerCases.typeBubbleTextTimer = undefined;
                return;
            }
    
            customerCases.typeBubbleTextTimer = setTimeout(function(){
                customerCases.typeBubbleText(remainingText);
            }, 30);
        },
        'setBubbleText' : function (index){
            if(typeof customerCases.typeBubbleTextTimer !== 'undefined'){
                clearTimeout(customerCases.typeBubbleTextTimer);
            }
            //heading text
            $('.speech_heading_text').html('');
            //heading position
            $('.speech_heading_text').css('padding-top',(+customerCases.cases_height-cases[index].height)+'px');
            //typer
            $('.typer_name').hide().html(cases[index].name+', '+cases[index].position).fadeIn(1500);
            //typing text
            customerCases.typeBubbleText('"' + cases[index].heading + '"');
        },
        'startAutoTypeBubbleText' : function (){
            setTimeout(function(){
                if(typeof customerCases.typeBubbleTextTimer === 'undefined'){
                    customerCases.nextCaseText();
                }
                customerCases.startAutoTypeBubbleText();
            },5000);
        },
        'setCasesHeight' : function (){
            if(typeof cases === 'undefined')
                return;
            
            if(typeof customerCases.typeBubbleTextTimer !== 'undefined'){
                clearTimeout(customerCases.typeBubbleTextTimer);
            }
            
            customerCases.cases_height = 0;
            $('.speech_heading_text').css('height','inherit');
            $('.speech_heading_text').parent().css('height','inherit');
            for(i=0;i<cases.length;i++){
                $('.speech_heading_text').html('"'+cases[i].heading+'"');
                case_height = $('.speech_heading_text').height();
                customerCases.cases_height = Math.max(customerCases.cases_height, case_height);
                cases[i].height = case_height;
            }
            $('.speech_heading_text').html('');
            $('.speech_heading_text').css('height',customerCases.cases_height+'px');
            $('.speech_heading_text').parent().css('height',customerCases.cases_height+60+'px');
            customerCases.setBubbleText(customerCases.current_index);
        }
    };

    


    var videoLightbox = {
        'initVideoIFrameTestimonials' : function (openVideoEvent){
    	    var videoiFrame = '<div style="width:960px;height:500px;position: absolute;"><iframe width="960" height="500" frameborder="0" allowfullscreen="true" src="https://www.youtube.com/embed/rF0mtKsvQM4?rel=0&autoplay=1&loop=0&wmode=opaque" marginwidth="0" marginheight="0"></iframe></div>';
    		videoLightbox.lightbox(videoiFrame,960,500,openVideoEvent);
        },
        'initVideoIFrame' : function (openVideoEvent){
    	    var videoiFrame = '<div class="wistia" style="width:700px;height:400px;position: absolute;  clip: rect(0px, 700px, 372px, 0px);"><iframe class="wistia_embed" name="wistia_embed" src="http://fast.wistia.net/embed/iframe/rtv6u5kyh1?canonicalUrl=http%3A%2F%2Fpreview.simplifilm.com%2Fmedias%2Frtv6u5kyh1" allowtransparency="true" frameborder="0" scrolling="no" width="700" height="400"></iframe></div>';
    		videoLightbox.lightbox(videoiFrame,700,400,openVideoEvent);
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





    
