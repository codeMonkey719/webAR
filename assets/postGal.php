<!DOCTYPE html> 
<html>
	
	<?php include 'assets/web/header.web' ?>
	<?php include 'assets/php/config.php' ?>

	</head>
	<body>
		<header>
		<?php include 'assets/php/nav.php' ?>

		</header>

			<main>
				<?php include 'assets/php/auth3.php' ?>
			<div id="signup">
				<h3>Post a galaxy (pet) for adoption!</h3>  

	<form action="#" method="post" autocomplete="off">
							<b>Galaxy Name* </b><br><input  type="text" name="gname" 
								value="<?php if (isset($_POST["gname"])){echo $gname;} ?>"><br>
							<b>Image Name*  </b><br><input type="text" name="imgName"
								value="<?php if (isset($_POST["imgName"])){echo $imgName;} ?>"><br>
							<b>Distance from Earth (in light-years)* </b><br><input type="text" name="distance"
								value="<?php if (isset($_POST["distance"])){echo $distance;} ?>"><br>
							<b>Description of galaxy*</b><br>
							<textarea rows="10" cols="55" name="description"></textarea><br><br>
							<br><input type="submit" value="Submit"><br><br>

	</form>

<?php 
					$date = `date +%s`%50500;
					//echo "$date<br>";
					//echo $validForm;
					if($validForm == 1){

						try {
							$dbh = new PDO("sqlite:./galactic.db");
							//echo "STATUS: $status";			
							//echo "$date<br>";
							$sql = "SELECT * FROM galaxies;";
							//touch 
							//$dbh->exec($sql) > ;
							// echo $results;
							//$sql = "INSERT INTO galaxies VALUES($date, '$gname', '$gbreed', '$imgName', '$distance');";
								//($date, '$fname', '$mname', '$lname', '$pnumber', '$email', '$user');";
								//(1    , 'Ross',   'Smith', 'Beverage', '9702223333', 'ross@gmail.com', 'rBev');
							$dbh->exec($sql);
							//echo "STATUS: $status<br>";
						} catch (PDOException $e) {
							/* If you get here it is mostly a permissions issue
							 * or that your path to the database is wrong
							 */
							echo 'Connection failed: ' . $e->getMessage();
							die;
						}
						//echo "\n";
						//echo "$fname";
					}
				?>

				<?php

	try {
		//$dbh = new PDO("sqlite:./galactic.db");
	$sql = "SELECT * FROM galaxies;";
	$results = $dbh->query($sql);
	foreach($results as $i){
		echo "The name is: $i[1]\n";
		echo "<br>";
	}
	//echo "$results";

	//$pets = ""
	}catch (PDOException $e) {
		/* If you get here it is mostly a permissions issue
		* or that your path to the database is wrong
		*/
		echo 'Connection failed: ' . $e->getMessage();
		die;
	}	

?>
				</div>
			</main>
		<footer>
		<?php include 'assets/php/end.php' ?>
		</footer>
	</body>
</html>