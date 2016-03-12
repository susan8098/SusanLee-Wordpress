$(function(){

	console.log("It's working");

	$('#threeLines').on('click', function(){
		$('nav').animate({width: 'toggle'});
		$(this).toggleClass("active");
		$('header').toggleClass("darken")
	});

});