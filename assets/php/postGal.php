<!DOCTYPE html> 
<html>
	
	<?php include '../web/header.web' ?>
	<?php include 'config.php' ?>

	</head>
	<body>
		<header>
		<?php include 'nav.php' ?>

		</header>

			<main>
				<?php include 'auth2.php' ?>
			<div id="signup">
				<h3>Post a galaxy (pet) for adoption!</h3>  

	<form action="#" method="post" autocomplete="off">
							<b>Galaxy Name* </b><br><input  type="text" name="fname" 
								value="<?php if (isset($_POST["fname"])){echo $gname;} ?>"><br>
							<b>Image Name*  </b><br><input type="text" name="mname"
								value="<?php if (isset($_POST["fname"])){echo $imgName;} ?>"><br>
							<b>Distance from Earth* </b><br><input type="text" name="lname"
								value="<?php if (isset($_POST["fname"])){echo $distance;} ?>"><br>
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
							$sql = "INSERT INTO galaxies VALUES($date, '$gname', '$imgName', '$distance');";
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
				</div>
			</main>
		<footer>
		<?php include 'end.php' ?>
		</footer>
	</body>
</html>