jQuery(document).ready(function($) {

  // $( '#content' ).fadeIn(600);	
  
  	$('.carousel').carousel({
  		interval: 10000
	})

	new WOW().init();
});