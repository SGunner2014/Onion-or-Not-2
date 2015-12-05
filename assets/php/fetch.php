<?php

  //A PHP script to fetch, return and possibly store the latest headlines from the /r/onion and /r/notonion subreddits.


ob_start();

$conn = new mysqli("localhost", "root", "password", "onionornot");
if ($conn->connect_error) {
	echo "Connection failed. Please reload page.";
}

function getTitles() {
	$endArray = array();

	$feed = file_get_contents('http://reddit.com/r/nottheonion.json?limit=100');
	$array = json_decode($feed, true)['data']['children'];
	foreach ($array as $post) {
		if (!($post['data']['domain'] === "self.nottheonion")) {
			$post['data']['preview'] = null;
			$post['data']['resolutions'] = null;
			array_push($endArray, $post);
		}
	}

	$feed = file_get_contents('http://reddit.com/r/TheOnion.json?limit=100');
	$array = json_decode($feed, true)['data']['children'];
	foreach ($array as $post) {
		if (!($post['data']['domain'] === "self.theonion")) {
			$post['data']['preview'] = null;
			$post['data']['resolutions'] = null;
			array_push($endArray, $post);
		}
	}

	return $endArray;
}

function addArticle($art, $conn) {
	$endArr = array();
	$art = $art['data'];
	$endArr['URL'] = $art['url'];
	$endArr['Title'] = $art['title'];
	if ($art['subreddit'] === "nottheonion") {
		$endArr['Onion'] = 0;
	}
	else {
		$endArr['Onion'] = 1;
	}
	$query = "INSERT INTO `articles_enabled` (URL, Title, Onion, NSFW) VALUES ('".$endArr['URL']."', '".$endArr['Title']."', ".$endArr['Onion'].", 0)";
	$conn->query($query);
}

function articleExists($art, $conn) { //Returns boolean, true if it exists, false if not.
	$query = "SELECT * FROM `articles_enabled` WHERE `URL` = '".$art['data']['url']."'";
	$results1 = $conn->query($query);
	$query = "SELECT * FROM `articles_enabled` WHERE `Title` = '".$art['data']['title']."'";
	$results2 = $conn->query($query);
	if (mysqli_num_rows($results1) >= 1 and mysqli_num_rows($results2) >= 1) {
		return true;
	}else{
		return false;
	}
}

function getArticle($conn) { //Fetch article, display to user.

	$query = "SELECT * FROM `articles_enabled` WHERE ID >= (SELECT FLOOR( MAX(ID) * RAND()) FROM `articles_enabled` ) ORDER BY ID LIMIT 1";

	$result = $conn->query($query); 
	foreach ($result as $rec) {
		return $rec;
	}
}





echo json_encode(getArticle($conn));
header("Content-Length: ".ob_get_length());
header("Connection: close");
ob_end_flush();

$array = getTitles();
foreach ($array as $rec) {
	if (!articleExists($rec, $conn)) {
		addArticle($rec, $conn);
	}
}



?>
