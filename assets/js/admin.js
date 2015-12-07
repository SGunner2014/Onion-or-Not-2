/*
	A JavaScript file to fetch and display articles for use on the admin panel
*/
var page = 1;
var strData;
var xhttp;

$(".PageChange").click(function() {

    page++;

});

var displayArticles = function(mode, from, number) {
    //Mode = either "allowed" or "denied"
    //From = number of article to start from
    //Number = number of articles to fetch, INCLUDING from.
    xhttp = new XMLHttpRequest();
    if (mode === "allowed") {
        strData = "mode=allowed&from=" + from + "&number=" + number;
    } else {
        strData = "mode=denied&from=" + from + "&number=" + number;
    }
    xhttp.open("GET", "/assets/php/admin.php", false);
    xhttp.send(strData);
    displayTable(JSON.parse(xhttp.responseText));
}