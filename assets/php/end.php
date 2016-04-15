<?php 

if (isset($_SESSION["user"])) {
    $login = $_SESSION["user"];
}else{
    $login = "Guest";
}
?>
<ul id="nav">
<li><a href="#top">Top</a></li>
<li><a href="fleshy.php">Galaxies</a></li>
<li><a href="about.php">About</a></li>
<?php if ($login != "Guest"): ?>
<li><a href="assets/php/logout.php">Logout</a></li>
<?php else: ?>
<li><a href="login.php">Login</a></li>
<?php endif; ?>
</ul>
<p>This site is part of a CSU 
	<a href="//www.cs.colostate.edu/~ct310">CT 310</a> 
	Course Project.</p>
