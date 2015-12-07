<?php
	/*`SELECT * FROM table limit 100` -- get 1st 100 records
	`SELECT * FROM table limit 100, 200` -- get 200 records after row 101
	*/
	//A PHP file to handle the admin page and all interactions therefrom with the main database.

	function loginIsValid($user, $pass, $conn) {
		$query = "SELECT * FROM `admin_logins` WHERE username = '" . $user."'";
		$results = $conn->query($query);
		if (mysqli_num_rows($results) === 1) {
			foreach($results as $rec) {
				if ($rec['password'] === $pass) {
					return true;
				} else {
					return false;
				}
			}
		} else {
			return false;
		}
	}

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
		} elseif ($mode === "renameArticle") {
			if (isset($_POST['newTitle']) and isset($_POST['user']) and isset($_POST['pass'])) {
				$pass = hash("sha256", $_POST['pass']);
				$ID = $_POST['ID'];
				$newTitle = $_POST['newTitle'];
				$user = $_POST['user'];

				if (loginIsValid($user, $pass, $conn)) {
					$query = "UPDATE articles_enabled SET Title='".$newTitle."' WHERE ID = '".$ID."'";
					$conn->query($query);
					echo json_encode(array("state" => "1", "error" => "null"));
				}
			} else {
				echo json_encode(array("state" => "0", "error" => "One or more variables were not set."));
			}
		}
	}

?>