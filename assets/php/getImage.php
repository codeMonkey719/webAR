<?php
header("Access-Control-Allow-Origin: *");
include 'createdb.php';
//$id = $pe
//$sql = "SELECT * FROM galaxies WHERE gid = $petId"
//$id = $_GET["petId"];

$db = new Database();
$sql = "SELECT gid FROM galaxies WHERE gid = '$id'";
$result = $db->query($sql);
// if($result === FALSE) {
// 	print_r(errorInfo());
// }
$finId = $db->fetchColumn();

$name = "../img/$finId.jpg";
echo $name;

echo base64_encode($name);


exit;
?>