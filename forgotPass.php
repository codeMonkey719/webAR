<!DOCTYPE html> 
<html>
	<?php include 'assets/web/header.web' ?>
	<?php include 'assets/php/ip.php' ?>
	</head>
	<body>
		<header>
		<?php include 'assets/php/nav.php' ?>
		</header>
		
		<main>
			<div id="login">
				<h3>Please enter your username and email</h3>                
				<form action="#" method="post" autocomplete="off">
				<b>Username: </b><input type="text" name="user"><br>
				<b>Email: </b><input type="text" name="email"><br>
				</div>
				<br><input type="submit" value="Submit"><br><br>
				</form>
			</div>
<!-- 			<div>
			<?php// if($status != "") echo $status ?>
			</div> -->
			<div>
				<?php if ($valid): ?>
					<a href="newAccount.php">Setup an account</a><br>
				<?php else: ?>
					<a href="noGo.php">Setup an account</a>
				<?php endif; ?>
			
			</div>
		</main>
		<footer>
		<?php include 'assets/php/end.php' ?>
		</footer>
	</body>
</html>


