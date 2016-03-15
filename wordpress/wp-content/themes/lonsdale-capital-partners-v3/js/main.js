/* $(document).ready
---------------------------------------- */
$(document).ready(function(){
	
	
	$('body').removeClass('no-js');


    // ----- Menu
    // ---------------------------------------------
	$('a.js-menu-button').click(function(e){
		e.preventDefault();
		$(this).toggleClass('active');
		$('.js-menu ul').stop().slideToggle('fast');
	 });


/* -------------------------------------------- */
});


/* $(window).load
---------------------------------------- */
$(window).load(function() {

/* -------------------------------------------- */
});