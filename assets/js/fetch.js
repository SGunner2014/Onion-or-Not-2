/*
	A JavaScript file to fetch and display the new articles, upon loading the page or clicking of the 'play again' button.
*/



var getArticle = function() {
	var xhttp;
	xhttp = new XMLHttpRequest();

	xhttp.open("POST", "http://onionornot.net/assets/php/fetch.php", true);
	xhttp.send();
	mainResponse.text(xhttp.resposeText);
}
