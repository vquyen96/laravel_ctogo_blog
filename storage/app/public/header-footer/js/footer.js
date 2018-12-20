$(document).ready(function(){
	var owl_partner = $('.partner-carousel');

	owl_partner.owlCarousel({
		loop:true,
		autoplay:true,
		autoplayHoverPause:true,
		slideTransition: 'linear',
		autoplayTimeout: 5000,
		autoplaySpeed: 6000,
		responsiveClass:true,
		responsive:{
			0:{
				items: 2,
				nav: false,
				margin: 50,
			},
			600:{
				items: 4,
				nav: false,
				margin: 50,
			},
			1000:{
				items:7,
				nav:true,
				margin: 100,
			}
		}
	});

	owl_partner.trigger('play.owl.autoplay');

	$('.search-button').click(function(){
		$('#search-box').fadeIn();
	});

	$('.close-search').click(function(){
		$('#search-box').fadeOut();
	});

	$('.menu-button').click(function(){
		$('#menu-screen').fadeIn();
		$('#side-menu').animate({left: '0px'});
	});

	$('.close-button').click(function(){
		$('#menu-screen').fadeOut();
        $('#side-menu').animate({left: '-100%'});
	});
});document