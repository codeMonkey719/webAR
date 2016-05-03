<?php
header("Access-Control-Allow-Origin: *");
//$id = $pe
//$sql = "SELECT * FROM galaxies WHERE gid = $petId"
$id = htmlspecialchars($_GET["petId"]);
$name = "http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/$id.php";
//echo "$petId";
//echo "$name";

$str = file_get_contents($name, FILE_USE_INCLUDE_PATH);
//echo base64_encode($str);
echo $str;
exit;
?>