<?php
// define variables and set to empty values
session_start();
if (isset($_SESSION["user"])) {
    $login = $_SESSION["user"];
}else{
    $login = "Guest";
}

?>
