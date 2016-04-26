<?php
$CSAddr1 = "129.82.44..*";
$CSAddr2 = "129.82.45..*";
$userIP = $_SERVER['REMOTE_ADDR'];
$valid = 0;
if (ereg($CSAddr1, $userIP) || ereg($CSAddr2, $userIP)) {
    //remote address match, do something or don't do anything
    // echo "<h2>Valid IP address:</h2>";
    // echo $userIP;
    $valid = 0;
} else {
   //do whatever you want to address that doesn't match
   // echo "<h2>Invalid IP address:</h2>";
   // echo $userIP;
   $valid = 1;
}
?> 
