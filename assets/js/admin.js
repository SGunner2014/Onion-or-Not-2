/*
	A JavaScript file to fetch and display articles for use on the admin panel
*/


$(".PageChange").click(function() {
	var page= 1;

    function addCount(){
     page+1;
    }

});

var getArticle = function() {

    var xhttp;
    xhttp = new XMLHttpRequest();
    var number= 10
    var from= page+10-9
    xhttp.open("GET", "/assets/php/fetch.php", false);
    xhttp.send("number=" + number + "&from=" + from);
    $('.mainResponse').text(xhttp.responseText);

}

