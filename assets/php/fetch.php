<?php

  //A PHP script to fetch, return and possibly store the latest headlines from the /r/onion and /r/notonion subreddits.

function getTitles() {
	$feed = implode(file('http://reddit.com/r/nottheonion.rss?limit=100'));
	$xml = simplexml_load_string($feed);
	$json = json_encode($xml);
	$array = json_decode($json,TRUE);
	$feed = implode(file('http://reddit.com/r/theonion.rss?limit=100'));
	$xml = simplexml_load_string($feed);
	$json = json_encode($xml);
	$array2 = json_decode($json,TRUE);

	for ($i = 1; $i < count(array2['channel']['item']); $i++) {
		array_push($array['channel']['item'], $array2['channel']['item'][$i]);
	}

	return $array;
}

function getArticle() { //Fetch article, display to user.
	$conn = new mysqli("127.0.0.1", "database", "Password1234567890", "articles");
	$query = "SELECT column FROM `allowed`
	ORDER BY RAND()
	LIMIT 1";

	$result = $conn->query($query);
	print_r($result);
}

?>
