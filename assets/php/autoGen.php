<?php

	try {
		$dbh = new PDO("sqlite:./galactic.db");
		$sql = "SELECT COUNT(*) FROM users;";

		echo $dbh->exec($sql);

							//echo "STATUS: $status<br>";
	} catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
		die;
		}




?>