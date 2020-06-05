jQuery(document).ready(function(){


	/* Animation Navbar */
	jQuery('#nav-icon1').on('click',function(){
		jQuery(this).toggleClass('open');
		jQuery('.box_nav').toggleClass('show-nav');
		if(jQuery('.box_nav').hasClass('show-nav')) {
			jQuery('body').addClass('ovh');
			setTimeout(function(){
				jQuery('.hdr-logo-link img').attr('src','https://www.bebit.it/content/logo_bebit_white.png');
			}, 200);
			setTimeout(function(){
				jQuery('.menu-navbar').addClass('opacity');
			}, 500);

			if(localStorage.getItem('over') == 'true'){
				jQuery('.hdr-logo-link').fadeIn();
			}
		} else {
			if(localStorage.getItem('over') == 'true'){
				jQuery('.hdr-logo-link').fadeOut();
			}
			jQuery('body').removeClass('ovh');
			setTimeout(function(){
				var pathname = window.location.pathname;
				if(pathname == '/') {
					changeLogo();
				} else {
					jQuery('.hdr-logo-link img').attr('src','https://www.bebit.it/content/logo_bebit_blue.png');
				}
			}, 100);

			jQuery('.menu-navbar').removeClass('opacity');
		}
	});


	/* Navbar on scroll */
	jQuery(window).on('scroll',function() {
		if(jQuery(window).scrollTop() > 160) {
			localStorage.setItem("over", true);
			jQuery('.nav_content').addClass('nav_scroll');
			jQuery('.hdr-logo-link').fadeOut();
		} else {
			localStorage.setItem("over", false);
			jQuery('.nav_content').removeClass('nav_scroll');
			jQuery('.hdr-logo-link').fadeIn();
		}
	});


	/* Slider mobile */
	jQuery('.carousel').carousel({
	  interval: false
	});

	jQuery('.slide-video').carousel({
	  interval: false
	});


	/* Accordion show form mobile home  */
	jQuery('#btn_form_mobile').on('click',function(){
		jQuery('html, body').animate({ scrollTop: jQuery('.form-contact_footer').offset().top + 150}, 1000);
		jQuery('.form-contact_footer').toggleClass('form-visible');
		jQuery('.form-contact_footer').slideToggle();
		if(jQuery('.form-contact_footer').hasClass('form-visible')) {
			jQuery('.accordion_form button img').addClass('rotate');
		} else {
			jQuery('.accordion_form button img').removeClass('rotate');
		}
	});


	/* Init wow animation  */
	var wow = new WOW({
	    boxClass:     'wow',      // animated element css class (default is wow)
	    animateClass: 'animated', // animation css class (default is animated)
	    offset:       0,          // distance to the element when triggering the animation (default is 0)
	    mobile:       true,       // trigger animations on mobile devices (default is true)
	    live:         true,       // act on asynchronously loaded content (default is true)
	    callback:     function(box) {
	      // the callback is fired every time an animation is started
	      // the argument that is passed in is the DOM node being animated
	    },
	    scrollContainer: null,    // optional scroll container selector, otherwise use window,
	    resetAnimation: true,     // reset animation on end (default is true)
  	});

	wow.init();



	anime({
	  targets: '.cls-1',
	  fill: '#07acb2',
	  easing: 'easeInOutSine',
	  duration: 1000,
	});


	/* Scroll box */
	jQuery('.list_service li span').on('click',function(){
		var label = jQuery(this).attr('data-label');
		jQuery('html, body').animate({ scrollTop: jQuery('#' + label).offset().top -150}, 1000);
	});

	/* Scroll up */
	jQuery('.scroll-up span').on('click',function(){
		jQuery('html, body').animate({ scrollTop: jQuery('#titleCosaFacciamo').offset().top -150}, 1000);
	});


	/* Isotope init */
	jQuery(window).load(function() {
			jQuery('.grid').isotope(function(){
			    itemSelector:'.item'
					layoutMode:'vertical'
			});

			/* Isotope card social */
			jQuery('.isotope-social').isotope({
					itemSelector: '.isotope-social-item',
					percentPosition: true,
					masonry: {
						columnWidth: 100,
						gutter: 15
					}
			});
	});


	/* Isotope Navbar */
	jQuery('.btn_filter').click(function(){
		if(jQuery(window).width() < 991) {
			jQuery('.mobile-list-case').slideUp();
			jQuery('.btn_cat_case img').removeClass('rotate');
			jQuery('.btn_cat_case span').text(jQuery(this).text());
		}
		jQuery('.btn_filter').removeClass('active');
		jQuery(this).addClass('active');

	    var selector = jQuery(this).attr('data-filter');

	  	jQuery('.grid').isotope({
	  	  filter: selector
	  	});

	  	return false;
	});


	/* Scroll header home */
	jQuery('.anchorCase span').click(function(){
		jQuery('html, body').animate({ scrollTop: jQuery('#gridFlexMasonry').offset().top -95}, 1000);
	});


	/* Fade switch language */
	jQuery('.icl_selector_languages .active-mode a').click(function(){
		jQuery('.icl_dropdown').toggleClass('appear');
	});


	/* Custom select form jobs */
	jQuery('form input').focusin(function(){
		var form = jQuery(this).closest('form');
		var selectCity = jQuery(form).find('.select-city');
		var selectCandidatura = jQuery(form).find('.select-candidatura');
		if(jQuery(this).attr('name') === 'citta') {
			jQuery(this).blur();
			jQuery(selectCity).show();
			jQuery(selectCandidatura).hide();
		} else if(jQuery(this).attr('name') === 'candidatura') {
			jQuery(this).blur();
			jQuery(selectCandidatura).show();
			jQuery(selectCity).hide();
		} else {
			jQuery(selectCandidatura).hide();
			jQuery(selectCity).hide();
		}
	});


	jQuery('form .select-city p img').on('click',function(){
		var form = jQuery(this).closest('form');
		var selectCity = jQuery(form).find('.select-city');
		jQuery(selectCity).hide();
	});

	jQuery('form .select-candidatura p img').on('click',function(){
		var form = jQuery(this).closest('form');
		var selectCandidatura = jQuery(form).find('.select-candidatura');
		jQuery(selectCandidatura).hide();
	});

	jQuery('.file-upload button').on('click',function(e){
		e.preventDefault();
		var form = jQuery(this).closest('form');
		var file = jQuery(form).find('input[type="file"]');
		jQuery(file).click();
	});


	jQuery('#jobsPosition .btn-link').on('click',function(){
		var card = jQuery(this).closest('.card');
		var position = jQuery(this).find('.position').text();
		if(!jQuery(card).hasClass('freelance')) {
			var list = jQuery(card).find('.select-candidatura').children('ul');
			jQuery(list).html('<li>'+position +'</li>');
			jQuery('form .select-candidatura ul li').on('click',function(){
				var form = jQuery(this).closest('form');
				var inputCandidatura = jQuery(form).find('input[name="candidatura"]');
				var selectCandidatura = jQuery(form).find('.select-candidatura');
				jQuery(inputCandidatura).val(jQuery(this).text());
				jQuery(selectCandidatura).hide();

			});
		}
	});

	jQuery('form .select-city ul li').on('click',function(){
		var form = jQuery(this).closest('form');
		var selectCity = jQuery(form).find('.select-city');
		var inputCity = jQuery(form).find('input[name="citta"]');
		jQuery(inputCity).val(jQuery(this).text());
		jQuery(selectCity).hide();
	});

	jQuery('form .select-candidatura ul li').on('click',function(){
		var form = jQuery(this).closest('form');
		var inputCandidatura = jQuery(form).find('input[name="candidatura"]');
		var selectCandidatura = jQuery(form).find('.select-candidatura');
		jQuery(inputCandidatura).val(jQuery(this).text());
		jQuery(selectCandidatura).hide();

	});



	jQuery('.btn_cat_case').on('click',function(){
		jQuery('.mobile-list-case').slideToggle();
		jQuery('.btn_cat_case img').toggleClass('rotate');
	});



	/* Youtube video slider */
	jQuery('.slide-video .carousel-indicators li').click(function(){
		jQuery('iframe').each(function(){
				this.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
		});
	});


	jQuery('.custom-player').click(function(){
			var iframe = jQuery(this).parent().find('iframe');
			console.log(iframe);
	});

	/* Loader */
	setTimeout(function(){
		jQuery('.loader').fadeOut();
	},600);


	/* Load more Case */
	var page = 0;
	var initalCase = jQuery('.item').length;
	var totalCase = jQuery('.grid').data('count');
	jQuery('.load_more').on('click',function(){
		jQuery.ajax({
			type: 'POST',
			url: my_vars.ajaxurl,
			data: {action: 'load_case',page:page },
			success: function(result) {
				var caseAjax = jQuery('.item').length;
				page++;
				if(initalCase+caseAjax >= totalCase ) {
					jQuery('.load_more').remove();
				}

				jQuery('#response').append(result);
				jQuery('html, body').animate({ scrollTop: jQuery('.grid.list_ajax').last().offset().top}, 1000);

			},
			error: function(err) {
					console.log(err);
			}
		});
	});


	/* Change color logo slider home */
	var pathname = window.location.pathname;
	if(pathname == '/') {
		changeLogo();
	}

	jQuery('#myCarousel').on('slid.bs.carousel', function () {
			changeLogo();
	});

	function changeLogo() {
		var slideFrom = jQuery('.carousel-item.active').find('#color').val();
		if(slideFrom == 'white') {
			jQuery('.hdr-logo-link img').attr('src','/content/logo_bebit_white.png');
		} else {
			if(jQuery('.box_nav').hasClass('show-nav')) {
				jQuery('.hdr-logo-link img').attr('src','/content/logo_bebit_white.png');
			} else {
				jQuery('.hdr-logo-link img').attr('src','/content/logo_bebit_blue.png');
			}
		}
	}

	/* Play audio */
	jQuery('.play-audio').on('click',function(){
			var audio = document.getElementById('audio-bebit');
			audio.play();
	})




var url = window.location.pathname;
var text = '';
var link = '';
var btn = '';

if(url.indexOf('en') > 0) {
	text = 'This website uses cookies in order to improve your web experience. ';
	link = '/en/privacy-policy';
	btn = 'More info';
} else {
	text = 'Questo sito Web utilizza i cookie per migliorare la tua esperienza web. ';
	link = '/privacy-policy'
	btn = 'Più info';
}
	// instantiate Divas Cookies
jQuery.DivasCookies({
	bannerText				: text,		// text for the Divas Cookies banner
	cookiePolicyLink		: link,		// link to the extended cookie policy
	cookiePolicyLinkText	: btn,				// text for the link to the extended cookie policy
	thirdPartyPolicyWidget	: "",						// if set to "iubenda" tries to use the Iubenda widget
	acceptButtonText		: "OK",						// text for the close button
	acceptButtonSrc			: "",						// source for the close button image
	openEffect				: "slideDown",				// opening effect for Divas Cookies banner ["fade", "slideUp", "slideDown", "slideLeft", "slideRight"]
	openEffectDuration		: 600,						// duration of the opening effect (msec)
	openEffectEasing		: "swing",					// easing for the opening effect
	closeEffect				: "slideUp",				// closing effect for Divas Cookies banner ["fade", "slideUp", "slideDown", "slideLeft", "slideRight"]
	closeEffectDuration		: 600,						// duration of the closing effect (msec)
	closeEffectEasing		: "swing",					// easing for the closing effect
	debugMode				: false,					// if true, the options are checked and warnings are shown
	saveUserPreferences		: true,						// if true, sets a cookie after the Divas Cookies is closed the first time and never shows it again
	cookieDuration			: 30,						// number of days after which the Divas Cookie technical cookie will expire (default 365 days)
	blockScripts			: true,						// set this to true if you blocked scripts by wrapping them with if($.DivasCookies.optedIn()){**script to be blocked**} or with the add class + change type in <script> tag (default false)
	pageReload				: false,						// if true reloads the actual page after opt-in to show the previuosly inline blocked scripts (default false)
	acceptOnScroll			: true,						// if true sets the Divas Cookie technical cookie on page scroll for cookies agreement (default false)
	acceptOnClick			: false,					// if true sets the Divas Cookie technical cookie on click on any  in the page except that on Divas Cookies banner for cookies agreement (default false)
	excludePolicyPage		: false						// if true excludes the cookie policy page from acceptOnScroll and acceptOnClick (default false)
}); // end of Divas Cookies instantiation



});
