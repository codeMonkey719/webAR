<?php
session_start();
unset($_SESSION["user"]);
unset($_SESSION["time"]);
session_unset();
session_destroy();
header("Location: ../../index.php");
exit();
?>
