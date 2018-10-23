/*
 * Global Scripts
 * Version: 1.0.0
 *
 * Author: MGH
 * dev@mghus.com
 *
 * Changelog: 
 * Version: 1.0.0
 *  Init Build
 *
 */






$(document).ready(function() {
	
	// Home Hero Image Slider
	$('.hero .image-flex .flexslider').flexslider({
		controlNav: true,
		directionNav: false,
		prevText:"",
		nextText:"",
		slideshow:true,
		start: function(el){
			// Get Control Nav
			$(".hero .image-flex .caption .content").append(el.find(".flex-control-nav"));
			// Update Caption
			var activeCaption = el.find(".flex-active-slide p.hidden").text();
			$(".hero .image-flex .caption p").text(activeCaption);
		},
		before: function(el){
			$(".hero .image-flex .caption p").fadeTo("slow", 0.1);
		},
		after: function(el){
			var activeCaption = el.find(".flex-active-slide p.hidden").text();
			$(".hero .image-flex .caption p").text(activeCaption).fadeTo("fast", 1);
		}
	});
	
	// Home Hero Video Slider
	$('.hero .video-flex .flexslider').flexslider({
		controlNav: true,
		directionNav: false,
		prevText:"",
		nextText:"",
		slideshow:true,
		start: function(el){
			// Get Control Nav
			$(".hero .video-flex .caption .content").append(el.find(".flex-control-nav"));
			
			// Update Caption
			var activeCaption = el.find(".flex-active-slide p.hidden").text();
			$(".hero .video-flex .caption p").text(activeCaption);
		},
		before: function(el){
			$(".hero .video-flex .caption p").fadeTo("slow", 0.1);
		},
		after: function(el){
			var activeCaption = el.find(".flex-active-slide p.hidden").text();
			$(".hero .video-flex .caption p").text(activeCaption).fadeTo("fast", 1);
		}
		
	});
	
	// Home Simple Tabs
	$(".tab-nav li").click(function(){
		if( window.innerWidth < 980 ){
			
			var activeID = $(this).attr("data-tab");
			
			if( $(this).hasClass("active") ){
				// Reset UI
				$(".tab-nav li").removeClass("active");
				$(".tab-content .entry").fadeOut(500);

			} else {
				// Reset UI
				$(".tab-nav li").removeClass("active");
				$(this).addClass("active");

				$(".tab-content .entry").fadeOut(500);
				$(".tab-content .entry:eq("+activeID+")").delay(500).fadeIn();
			}
			
		} else {
			var activeID = $(this).attr("data-tab");
		
			$(".tab-nav li").removeClass("active");
			$(this).addClass("active");
		
			$(".tab-content .entry").fadeOut(500);
			$(".tab-content .entry:eq("+activeID+")").delay(500).fadeIn();
		}
	});
	
	// Home Tabs Mobile Support
	$(".tab-content .entry").each(function(i,e){
		// Dynamically set mobile content to keep proper stack semantics
		$(".tab-nav li[data-tab='"+i+"']").append("<div class='mobile-content tab-content'>"+ $(this).html() +"</div>");
	});
	
	// Home Treatments Mobile Slider
	$(".treatments-slider").flexslider({
	    animationLoop: true,
		controlNav: true,
		slideshow: false,
		maxItems: 1,
		prevText: "",
		nextText: ""
	});
	
	// Form Presets
	$('.formify-form input[type="text"]').focusout(function(){
		var _this    = $(this),
		    fieldVal = _this.val();

		if( _this.val() != '' ){
			_this.addClass('completed');
		}else{
			_this.removeClass('completed');
		}
	});
	
	// Form placeholder logic
    $('input[type="text"], input[type="email"], textarea, input.sem-text').each(function(){
        $(this).attr('data-initValue', $(this).val());
    }).focus(function(){
        if( $(this).val() == $(this).attr('data-initValue') ){
            $(this).val('');
        }
    }).blur(function(){
        if( $(this).val() == '' ){
            $(this).val($(this).attr('data-initValue'));
        }
    });

	// Form Place Holder Validation
	$('form input[type="submit"]').click(function(){
		$('input[type="text"], textarea, input.sem-text').each(function(){
			if( $(this).val() == $(this).attr('data-initValue') ){
				$(this).val('');
			}
		});
		
		// Delay, then return labels
		setTimeout(function(){
			$('input[type="text"], textarea, input.sem-text').each(function(){
				if( $(this).val() == '' ){
					$(this).val($(this).attr('data-initValue'));
				}
			});
		}, 1000);
	});
	
	// Waypoints
	$('.scroll-show').each(function(){
	    var _this  = $(this),
	        offset = _this.attr('data-offset') ? _this.attr('data-offset') + '%' : '70%',
	        delay  = _this.attr('data-delay') ? _this.attr('data-delay') : '0';

	    if( delay > 0 ){
	        _this.css(animationDelay(delay));
	    }

	    _this.waypoint(function(){
	        // Desired action at Waypoint
	        _this.addClass('animated');

	        // Include if requested functionality only needs to occur once
	        this.destroy();
	    },{
	        // Offset defined
	        offset: offset
	    });
	});
		
	// Scroll To Button
	$(".scrollTo").click(function(){
		var element = $("." + $(this).attr("data-element"));

		if( element.size() > 0 ){	
			$('html,body').animate({ scrollTop: (element).offset().top }, 700);
		}
		
		return false;
	});
	
	$(".back-to-top").click(function(){
		$('html,body').stop().animate({ scrollTop: $("body").offset().top }, 700);
	});
	
	// Basic Carousel
	$(".basic-carousel").flexslider({
	    animationLoop: true,
		directionNav: false,
		slideshow: true,
		slideshowSpeed: 4000,
		maxItems: 1
	});
	
	// Testimonials Slider Single
	$(".testimonials-single").flexslider({
	    animationLoop: true,
		directionNav: false,
		slideshow: true,
		slideshowSpeed: 4000,
		maxItems: 1
	});
	
	// Testimonial Slider Full
	$(".testimonials-full").flexslider({
	    animation: "slide",
        animationLoop: true,
		controlNav: false,
        itemWidth: 210,
        itemMargin: 15,
        minItems: getMaxItems(),
        maxItems: getMaxItems(),
		prevText: "",
		nextText: "",
		start:function(slider){				
			// Max Items By Screen Size
			$(window).resize(function() {
				setMaxItems(slider);	
			});
		}
	});
	
	// Before & After Slider
	$(".before-after-slider").flexslider({
	    animationLoop: true,
		controlNav: false,
		slideshow: false,
		maxItems: 1,
		prevText: "",
		nextText: ""
	});
	
	// Quick Facts Slider
	$(".quickfacts-slider").flexslider({
	    animationLoop: true,
		controlNav: true,
		slideshow: false,
		maxItems: 1,
		prevText: "",
		nextText: ""
	});
					
	// Generic Collapsable Content
	$(".main .collapse.open").find("h5").addClass("active");
	$(".main .collapse").not('.open').children("*").not("h5").hide();
	
	$(".main .collapse h5").click(function(){
		$(this).toggleClass("active");
		$(this).siblings().slideToggle();
	});
	
	// Blog Archive Collapsable
	$("ul.archives li span.year").eq(0).addClass("active");
	$("ul.archives li span.year").eq(0).parent().find("ul").first().show();
	
	$("ul.archives li span").click(function(){
		$(this).toggleClass("active");
		$(this).parent().find("ul").first().slideToggle();
	});
	
	// Popup Form Collapsable
	$(".popup-form .title").click(function(){
		$(this).toggleClass("active");
				
		if( $(".popup-form").height() == 48 ){ 
			var popupHeight = "252px"; 
		} else { 
			var popupHeight = "48px"; 
		}
		
		$(".popup-form").animate({
			height: popupHeight
		}, 200);
	});
	
	// Mobile Navigation Toggle
    $('.header .nav-toggle').click(function(){
    	var _this = $(this),
    	    nav = $('nav');

    	if( _this.hasClass('nav-open') ){
	    	_this.removeClass('nav-open');    		
	    	nav.removeClass('nav-open');
    	}else{
	    	_this.addClass('nav-open');
	    	nav.addClass('nav-open');
    	}
		
		$(".header, .header .nav, .header .subnav").toggleClass("active");
    });

	// Mobile Navigation Collapsable
	$(".header .subnav-toggle").click(function(){
		// Update Toggle Button
		$(this).toggleClass("active");
		
		// Close Previous Subnav
		var currentSubnav = $(this).parent().find("ul");
		$(".header .nav li ul").not(currentSubnav).slideUp();
		
		// Open Current Subnav
		$(this).parent().find("ul").slideToggle();
	});
	
	// Mobile Collapsable Rows
	// Used on the following sections - Blog, Blog Entry
	$(".mobile-collapse-toggle").click(function(){
		$(this).toggleClass("active");
		$(this).parent().find("div").first().slideToggle();
	});
	
	// Mobile Footer Collapse
	$(".footer a.top").click(function(){
		
		if( $(this).parent().hasClass('col3') ){
			$('.col4').children('a').fadeToggle().css('display','block');
		}
		
		$(this).parent().children('a').not('.top').fadeToggle().css('display','block');
		$(this).toggleClass('active');
		return false;
	});
	
});

$(window).load(function(){
	equalize();
});

$(window).resize(function() {
	equalize();
});

// Flexslider - Max Items (Get)
function getMaxItems(){
	// Mobile Switch
	if( window.innerWidth < 980 ){
		return 1;
	} else {
		return 3;
	}
}
  
// Flexslider - Max Items (Set)
function setMaxItems(slider){
	slider.vars.maxItems = getMaxItems();
}

// Equalize Divs Heights - Two Column Grid Template
function equalize(){
	if( $(".section.grid .entry").size() > 0 ){
		// Reset, start fresh...
		$(".section.grid .entry").removeAttr("style");
		
		var maxHeight = 0;

		$(".section.grid .entry").each(function(){
		   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
		});
		
		// Desktop Only
		if( $(window).width() > 980 ){
			$(".section.grid .entry").height(maxHeight);
		}
	}
}

// Waypoints Support
function animationDelay(delay){
    var delayObj = {
        '-webkit-transition-delay': delay + 'ms',
        '-moz-transition-delay': delay + 'ms',
        '-o-transition-delay': delay + 'ms',
        '-ms-transition-delay': delay + 'ms',
        'transition-delay': delay + 'ms'
    } 

    return delayObj;
}
