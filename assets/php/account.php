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
			<div>
				<h3>Account</h3>
				<?php include 'info.php' ?>
				<h4>Name</h4><?php echo "<h2>$name</h2>" ?>
				<h4>Email</h4><?php echo "<h2>$email</h2>" ?>
				<h4>Address</h4><?php echo "<h2>$addrs $city $state $zip</h2>" ?>
			</div>
		</main>
		<footer>
			<?php include 'end.php' ?>
		</footer>
	</body>
</html>


