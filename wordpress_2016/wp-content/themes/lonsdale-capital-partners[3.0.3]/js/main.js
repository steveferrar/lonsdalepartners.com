
/* $(document).ready
---------------------------------------- */

$(document).ready(function(){
	
	// "use strict";


	// console.log('Template URL: ' + templateUrl);
	// console.log('Google Map Latitude: ' + googleLat);
	// console.log('Google Map Longitude: ' + googleLng);


	// ----- Window Resize
	// ---------------------------------------------

	$(window).height();
	$(window).width();

	$(window).resize(function() {
		$(window).height();
		$(window).width();
	});


	// ----- No JS
	// ---------------------------------------------

	$('html').removeClass('no-js');


	// ----- Lazyload
	// ---------------------------------------------

	$("img.lazyload").lazyload({
		effect : "fadeIn"
	});


	// ----- Mobile Menu
	// ---------------------------------------------

	// Main Mobile Navigation
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
		$('body').toggleClass('js-stopScrolling');
		$('.js-mobile-menu').stop().slideToggle('fast');
	});

	// Portfolio Filters
	$('.js-portfolio-button').click(function(){
		$(this).toggleClass('active');
		$(this).next('.js-portfolio-menu').stop().slideToggle('fast');
	});


	// ----- Google Maps
	// ---------------------------------------------

	if($('html').hasClass('touch')){
		// Mobile
		//console.log('Mobile');
		$('a.js-home-block').click(function(e){
			if($(this).hasClass('active')) {
			} else {
				e.preventDefault();
				$('a.js-home-block').removeClass('active');
				$(this).toggleClass('active');
			}
		});
	} else {
		// Non Mobile
		//console.log('Not Mobile');
		$('a.js-home-block').hover(
			function() {
				// console.log('in');
				$(this).addClass('active');
			},
			function() {
				// console.log('out');
				$(this).removeClass('active');
			}
		);
	}


	// ----- Portfolio Filter
	// ---------------------------------------------

	// Show / hide filter on <span> click
	$('.uwpqsf_class span').click(function(){
		if($(this).parent().hasClass('active')){
			$('.uwpqsf_class').removeClass('active');
		} else {
			$('.uwpqsf_class').removeClass('active');
			$(this).parent().addClass('active');
		}
	});

	// Hide filter on <label> click
	$('.uwpqsf_class label').click(function(){
		if($(this).parent().hasClass('active')){
			$('.uwpqsf_class').removeClass('active');
		}
	});

	// Hide filter on click anywhere else
	$(document).click(function(event) { 
		if(!$(event.target).closest('.uwpqsf_class').length &&
		!$(event.target).is('.uwpqsf_class')) {
			if($('.uwpqsf_class').hasClass('active')) {
				$('.uwpqsf_class').removeClass('active');
			}
		}
	})


});