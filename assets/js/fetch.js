/*
	A JavaScript file to fetch and display the new articles, upon loading the page or clicking of the 'play again' button.
*/

var correct_answer;

var getArticle = function() {
	var xhttp;
	xhttp = new XMLHttpRequest();

	xhttp.open("GET", "/assets/php/fetch.php", false);
	xhttp.send();
	var response = JSON.parse(xhttp.responseText);
	if (response.Onion === "1") {
		correct_answer = true;
	}else {
		correct_answer = false;
	}

	$('.mainResponse').hide();
	$('.mainResponse').text(response.Title);
	$('.mainResponse').slideDown();

}
