<!DOCTYPE html> 
<html>
	<?php //include 'assets/php/auth.php' ?>
	<?php include 'assets/web/header.web' ?>
	<?php include 'assets/php/config.php' ?>
	<?php include 'assets/php/ip.php' ?>
	</head>
	<body>
		<header>
		<?php include 'assets/php/nav.php' ?>
		</header>
			<main>
			
			<div id="signup">
				<h3>Sign up!</h3>                
					<form action="#" method="post" autocomplete="off">
						<b>First Name*  </b><br><input  type="text" name="fname"><br>
						<b>Middle Name  </b><br><input type="text" name="mname"><br>
						<b>Last Name* </b><br><input type="text" name="lname"><br>
						<b>Phone Number* </b><br><input type="text" name="pnumber"><br>
						<b>Email* </b><br><input type="text" name="email"><br>
						<b>User Name* </b><br><input type="text" name="user"><br>
						<b>Password* </b><br><input type="password" name="pswd"><br>
						<b>Password Again* </b><br><input type="password" name="pswd2"><br>
						<br><b><u>Prior Pets</u></b>
						<blockquote><tab to="INDENT"><input type="checkbox" name="dogs" > Dogs<br>
						<input type="checkbox" name="vehicle" value="Car" checked> Cats<br>						
						<input type="checkbox" name="vehicle" value="Bike"> Quasars<br>
						<input type="checkbox" name="vehicle" value="Bike"> Stars<br>
						</blockquote>
						<b>Are you interested in fostering a pet? </b><br>
						<input type="radio" name="vehicle" value="Bike"> Yes
						<input type="radio" name="vehicle" value="Bike"> No<br><br>
						<b>Do you have a pet needing a home?</b><br>
						<input type="radio" name="vehicle" value="Bike"> Yes
						<input type="radio" name="vehicle" value="Bike"> No<br><br>
						<b>If yes to above, please explain</b><br>
						<textarea rows="10" cols="55" name="explain"></textarea><br><br>
						All fields marked with a * are needed to sign up!
						<br><input type="submit" value="Submit"><br><br>
					</form>

				<?php 
					try {
						$dbh = new PDO("sqlite:./galactic.db");
						echo 'Connection successful.';
						$sql = "INSERT INTO user VALUES	
							(11, '$', 'ursaminordwarf.jpg', .506);";
						$status = $dbh->exec($sql);
					
					} catch (PDOException $e) {
						/* If you get here it is mostly a permissions issue
						 * or that your path to the database is wrong
						 */
						echo 'Connection failed: ' . $e->getMessage();
						die;
					}
					//echo $fname;
				?>
			</div>
			</main>
		<footer>
		<?php include 'assets/php/end.php' ?>
		</footer>
	</body>
</html>