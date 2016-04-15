<!DOCTYPE html> 
<html>
	<?php include 'assets/php/auth.php'?>
	<?php include 'assets/web/header.web' ?>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>
	<body>
		<header>
		<?php include 'assets/php/nav.php' ?>
		</header>
		
		<main>
			<div id="login">
				<h3>Login</h3>                
				<form action="#" method="post" autocomplete="off">
				<b>Username: </b><input type="text" name="user"><br>
				<b>Password: </b><input type="password" name="pswd"><br>
				<div class="g-recaptcha" data-theme="dark" 
					data-sitekey="6LcazxkTAAAAAGPj9jZ5t4d71ogBbub_Yl4FQ_Bb">
				</div>
				<br><input type="submit" value="Submit"><br><br>
				</form>
			</div>
			<div>
			<?php if($status != "") echo $status ?>
			</div>
			<div>
			<a href="newAccount.php">Setup an account</a>
			</div>
		</main>
		<footer>
		<?php include 'assets/php/end.php' ?>
		</footer>
	</body>
</html>


