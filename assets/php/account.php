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
<div>
<h3>Account</h3>
<?php include 'assets/php/info.php' ?>
<h4>Name</h4><?php echo "<h2>$name</h2>" ?>
<h4>Email</h4><?php echo "<h2>$email</h2>" ?>
<h4>Address</h4><?php echo "<h2>$addrs $city $state $zip</h2>" ?>
</div>
</main>
<footer>
<?php include 'assets/php/end.php' ?>
</footer>
</body>
</html>


