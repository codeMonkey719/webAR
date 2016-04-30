<?php
// define variables and set to empty values
$info = "P3";
$valid = false;

$name = $email = $addrs = $city = $state = $zip = "";

$myfile = fopen("../info/account.csv", "r") or die("Unable to open file!");

while (($data = fgetcsv($myfile, 100, ",")) !== FALSE) {
    if ($data[0] == $login) {
        $valid = true;
        $name = $data[1];
        $email = $data[2];
        $addrs = $data[3];
        $city = $data[4];
        $state = $data[5];
        $zip = $data[6];
    }
}

fclose($myfile);

if ($valid == false) {
    header("Location: assests/php/logout.php");
}

?>
