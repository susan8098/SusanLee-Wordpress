$(function(){

	console.log("It's working");

	$('#threeLines').on('click', function(){
		$('nav').animate({width: 'toggle'});
		$(this).toggleClass("active");
		$('header').toggleClass("darken")
	});

	$('ul.menu a').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 300);
	    return false;
	    $('nav').animate({
	    	width: '0px'
	    })
	});


	jQuery("h2").fitText(0.7, { minFontSize: '20px', maxFontSize: '110px'});
	jQuery("h3").fitText(0.7, { minFontSize: '24px', maxFontSize: '45px'});
	jQuery("p").fitText(0.6, { minFontSize: '13px', maxFontSize: '14px'});

});