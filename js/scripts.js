$(function(){

	console.log("It's working");

	$('#threeLines').on('click', function(){
		$('nav').animate({width: 'toggle'});
		$(this).toggleClass("active");
		$('header').toggleClass("darken")
	});

	$('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 300);
	    return false;
	});

});