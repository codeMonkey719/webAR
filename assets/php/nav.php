<?php
if (isset($_SESSION["user"])) {
    $login = $_SESSION["user"];
}else{
    $login = "Guest";
}

?>
<a name="top"></a>
<div id="nav">
	<img class="logo" src="assets/img/G-Logo.png" alt="Galactic New Accountability Resource"/>
<!-- <div id="nav"> -->
	<img class="logo2" src="assets/img/gnarLogo.png" alt="Galactic New Accountability Resource"/>
<!-- </div> -->
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="fleshy.php">Galaxies</a></li>
	<li><a href="about.php">About</a></li>
	<?php if ($login != "Guest"): ?>
	<li>Account: <a href="account.php"> <?php echo "$login" ?></a></li>
	<li><a href="assets/php/postGal.php">Post a Galaxy</a></li>
	<li><a href="assets/php/logout.php">Logout</a></li>
	<?php else: ?>
	<li><a href="login.php">Login</a></li>
	<?php endif; ?>
</ul>
</div>

