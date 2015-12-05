$(document).ready(function() {

	$('.playButton').click(function() {
		$('.playButton').slideUp();
		getArticle();
		$('.options').fadeIn();
	});

	$('.yes').click(function() {
		$('.options').fadeOut();
		$('.playAgain').fadeIn();
	});

	$('.no').click(function() {
		$('.options').fadeOut();
		$('.playAgain').fadeIn();
	});

	$('.playAgain').click(function() {
		$('.playAgain').fadeOut();
		getArticle();
		$('.options').fadeIn();
	});

});