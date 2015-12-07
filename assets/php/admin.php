<?php
	/*`SELECT * FROM table limit 100` -- get 1st 100 records
	`SELECT * FROM table limit 100, 200` -- get 200 records after row 101
	*/
	//A PHP file to handle the admin page and all interactions therefrom with the main database.
	if (isset($_GET['mode'])) { //Checks to see if mode has been specified.
		$mode = $_GET['mode'];
		$conn = new mysqli("localhost", "root", "password", "onionornot");

		if ($mode === "denied") {
			$amt = $_GET['number'];
			$from = $_GET['from'];

			if ($amt > 0 and $from > 0) {
				$query = "SELECT * FROM articles_enabled WHERE `display` = `0` LIMIT ".($from-1).", ".$number;
				$result = $conn->query($query);
				$returnTbl = array();
				foreach ($result as $rec) {
					$currentTbl = array("ID" => $rec['ID'], "Onion" => $rec['Onion'], "Title" => $rec['Title'], "URL" => $rec['URL'], "NSFW" => $rec['NSFW']);
					array_push($returnTbl, $currentTbl);
				}
				echo json_encode($returnTbl);
			}
		} elseif ($mode === "allowed") {
			$amt = $_GET['number'];
			$from = $_GET['from'];

			if ($amt > 0 and $from > 0) {
				$query = "SELECT * FROM articles_enabled WHERE `display` = `1` LIMIT ".($from-1).", ".$number;
				$result = $conn->query($query);
				$returnTbl = array();
				foreach ($result as $rec) {
					$currentTbl = array("ID" => $rec['ID'], "Onion" => $rec['Onion'], "Title" => $rec['Title'], "URL" => $rec['URL'], "NSFW" => $rec['NSFW']);
					array_push($returnTbl, $currentTbl);
				}
				echo json_encode($returnTbl);
			}
		}
	}

?>