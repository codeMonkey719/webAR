<?php
header('Content-Type: text/json'); 
$status = "down";

$finalStatus = json_encode($status);
echo "{\"status\":$finalStatus}";

// 	<!-- siteName : status-->
// 	<!-- siteName: petName : petKind : breed : datePosted -->	

// <!-- siteName : status : petName : petKind : breed : datePosted -->
// <!-- siteName : status : petName : petKind : breed : datePosted -->
// <!-- siteName : status : petName : petKind : breed : datePosted -->
// <!-- siteName : status : petName : petKind : breed : datePosted -->
// <!-- siteName : status : petName : petKind : breed : datePosted -->

?>


