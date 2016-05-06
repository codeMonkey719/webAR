<?php
header("Access-Control-Allow-Origin: *");
include 'createdb.php';
//$id = $pe
//$sql = "SELECT * FROM galaxies WHERE gid = $petId"

$id = $_GET['petId'];
//$dbh = new Database();
$sql = "SELECT gid FROM galaxies WHERE gid = '$id'";
$result = $dbh->query($sql);
//echo $result;
// if($result === FALSE) {
// 	//print_r(errorInfo());
// }
$finId = $result->fetchColumn();

$name = "../php/$finId.php";
echo $name;

echo base64_encode($name);
exit;
?>