/*
	A JavaScript file to fetch and display articles for use on the admin panel
*/
var from = 1;
var number = 10;
var strData;
var xhttp;
var results;

//jQuery Section

$(".PageChange").click(function() {
    page++;
});

$('.error-close').click(function() {
    $('.error').slideUp();
});



//Standard functions

var changeArticle = function(mode, ID, newValue) {
switch(mode) {
    case "makeNSFW":
        changeNSFWState(ID, 1, user, pass);
        break;
    case "makeSFW":
        changeNSFWState(ID, 0, user, pass);
        break;
    case "disableArticle":
        disableArticle(ID, user, pass);
        break;
    case "enableArticle":
        enableArticle(ID, user, pass);
        break;
}

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
    displayAdminTable(JSON.parse(xhttp.responseText));
}

var displayAdminTable = function(table) {
    
}

var displayError = function(error) {
    //Displays error specified, using .error object
    $('.error-text').text(error);
    $('.error').slideDown();
}

var renameArticle = function(ID, newTitle, user, pass) {
    if (ID !== null) {
        strData = "ID=" + ID + "&newTitle=" + newTitle + "&user=" + user + "&pass=" + pass;
        xhttp = new XMLHttpRequest();
        xhttp.open("POST", "/assets/php/admin.php?mode=renameArticle");
        xhttp.send(strData);
        results = JSON.parse(xhttp.responseText);
        if (results.state === true) {
            displayArticles("allowed", from, number);
        } else {
            displayError(results.error);
        }
    }
}

var changeNSFWState = function(ID, newState, user, pass) {
    if (ID !== null) {
        strData = "ID=" + ID + "&newState=" + newState + "&user=" + user + "&pass=" + pass;
        xhttp = new XMLHttpRequest();
        xhttp.open("POST", "/assets/php/admin.php?mode=changeNSFWState");
        xhttp.send(strData);
        results = JSON.parse(xhttp.responseText);
        if (results.state === true) {
            displayArticles("allowed", from, number);
        } else {
            displayError(results.error);
        }
    }
}

var disableArticle = function(ID, user, pass) {
    if (ID !== null) {
        strData = "ID=" + ID + "&user=" + user + "&pass=" + pass; //Will be passed using POST, not GET
        xhttp = new XMLHttpRequest();
        xhttp.open("POST", "/assets/php/admin.php?mode=disableArticle");
        xhttp.send(strData);
        results = JSON.parse(xhttp.responseText);
        if (results.state === true) {
            displayArticles("allowed", from, number);
        } else {
            displayError(results.error);
        }
    }
}