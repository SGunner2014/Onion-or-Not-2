$(document).ready(function() {

	$('.playButton-btn').click(function() {
		$('.playButton').slideUp();
		getArticle();
		$('.options').fadeIn();
	});

	$('.yes').click(function() {
		$('.options').hide();
		$('.playAgain').fadeIn();
	});

	$('.no').click(function() {
		$('.options').hide();
		$('.playAgain').fadeIn();
	});

	$('.playAgain').click(function() {
		$('.playAgain').fadeOut();
		getArticle();
		$('.options').fadeIn();
	});

});