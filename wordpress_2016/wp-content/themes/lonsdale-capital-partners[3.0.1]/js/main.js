
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


	// Mobile Menu
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
		$('body').toggleClass('js-stopScrolling');
		$('.js-mobile-menu').stop().slideToggle('fast');
	});

	 // Projects Menu
	$('.page-projects .js-projects-menu-button').click(function(e){
		e.preventDefault();
	});

	$('.post-type-archive .js-projects-menu-button').click(function(e){
		e.preventDefault();
		$(this).toggleClass('active');
		$('.js-projects-menu').stop().slideToggle('fast');
	});


	// ----- Google Maps
	// ---------------------------------------------
	/*
	if($('body').hasClass('page-contact')){

		function initialize() {
			
			// var myLatlng = new google.maps.LatLng(51.523001,-0.08069350000005215); // 23 Curtain Road
			var myLatlng = new google.maps.LatLng(googleLat,googleLng);
			
			var mapOptions = {
				zoom: 15,
				center: myLatlng,
				scrollwheel: false,
				draggable: false,
				zoomControl: true,
				disableDoubleClickZoom: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
					
			var map = new google.maps.Map(document.getElementById('google_map'), mapOptions);

			var stylez = [
				{
				  featureType: "all",
				  elementType: "all",
				  stylers: [
					{ saturation: -100 } // <-- THIS
				  ]
				}
			];
			
			var mapType = new google.maps.StyledMapType(stylez, { name:"Grayscale" });    
			map.mapTypes.set('tehgrayz', mapType);
			map.setMapTypeId('tehgrayz');
			
			var interval = setTimeout(function () {
				var marker = new google.maps.Marker({
					draggable: false,
					animation: google.maps.Animation.DROP,
					raiseOnDrag: false,
					position: myLatlng, 
					map: map,
					title: 'Tourist',
					icon: new google.maps.MarkerImage(
						templateUrl + '/img/map-pin@2x.png', // my 16x48 sprite with 3 circular icons
						null,
						null,
						null,
						new google.maps.Size(31, 40) // scaled size of the entire sprite
					)
				});
			}, 1500);

			var center;
			function calculateCenter() {
			  center = map.getCenter();
			}

			google.maps.event.addDomListener(map, 'idle', function() {
			  calculateCenter();
			});

			google.maps.event.addDomListener(window, 'resize', function() {
				map.setCenter(center);
			});
		}
			
		google.maps.event.addDomListener(window, 'load', initialize);
	
	}
	*/
	
});