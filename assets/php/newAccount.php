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
				<h3>Sign up!</h3>  

					<form action="#" method="post" autocomplete="off">
						<b>First Name*  </b><br><input  type="text" name="fname" 
							value="<?php if (isset($_POST["fname"])){echo $fname;} ?>"><br>
						<b>Middle Name  </b><br><input type="text" name="mname"
							value="<?php if (isset($_POST["fname"])){echo $mname;} ?>"><br>
						<b>Last Name* </b><br><input type="text" name="lname"
							value="<?php if (isset($_POST["fname"])){echo $lname;} ?>"><br>
						<b>Phone Number* </b><br><input type="text" name="pnumber"
							value="<?php if (isset($_POST["fname"])){echo $pnumber;} ?>"><br>
						<b>Email* </b><br><input type="text" name="email"
							value="<?php if (isset($_POST["fname"])){echo $email;} ?>"><br>
						<b>User Name* </b><br><input type="text" name="user"
							value="<?php if (isset($_POST["fname"])){echo $user;} ?>"><br>
						<b>Password* </b><br><input type="password" name="pswd"
							value="<?php if (isset($_POST["fname"])){echo $pswd;} ?>"><br>
						<b>Password Again* </b><br><input type="password" name="pswd2"
							value="<?php if (isset($_POST["fname"])){echo $pswd2;} ?>"><br>
						<br><b><u>Prior Pets</u></b>
						<blockquote><tab to="INDENT">
						<input type="checkbox" name="dogs" > Dogs<br>
						<input type="checkbox" name="cats"  > Cats<br>						
						<input type="checkbox" name="quasars" > Quasars<br>
						<input type="checkbox" name="stars" > Stars<br>
						</blockquote>
						<b>Are you interested in fostering a Galaxy? </b><br>
						<input type="radio" name="choice1" value="inter"> Yes
						<input type="radio" name="choice1" value="inter"> No<br><br>
						<b>Do you have a Galaxy needing rescued?</b><br>
						<input type="radio" name="choice2" value="need"> Yes
						<input type="radio" name="choice2" value="need"> No<br><br>
						<b>If yes to above, please explain</b><br>
						<textarea rows="10" cols="55" name="explain"></textarea><br><br>
						All fields marked with a * are needed to sign up!
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
							echo "$date<br>";
							//$sql = "SELECT * FROM users;";
							//touch 
							//$dbh->exec($sql) > ;
							// echo $results;
							$sql = "INSERT INTO users VALUES($date, '$fname', '$mname', '$lname',
								'$pnumber', '$email', '$user');";
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
						echo "\n";
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