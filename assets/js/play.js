$(document).ready(function() {

	$('.playButton-btn').click(function() {
		$('.playButton').slideUp();
		getArticle();
		$('.options').fadeIn();
	});

	$('.yes').click(function() {
		$('.options').hide();
		updateCorrect(true);
		$('.playAgain').fadeIn();
	});

	$('.no').click(function() {
		$('.options').hide();
		updateCorrect(false);
		$('.playAgain').fadeIn();
	});

	$('.playAgain').click(function() {
		$('.playAgain').fadeOut();
		getArticle();
		$('.options').fadeIn();
	});

});

var updateCorrect = function(answer) {
	if (correct_answer === answer) {
		$('.wrong').hide();
		$('.correct').show();
	} else {
		$('.correct').hide();
		$('.wrong').show();
	}
}