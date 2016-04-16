<?php
// define variables and set to empty values
session_start();

require_once "lib/passwordLib.php";

$info = "P2";
$user = $pswd = $status = "";


if (isset($_SESSION["user"])) {
    $login = $_SESSION["user"];
}else{
    $login = "Guest";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fname = test_input( $_POST["fname"] );
    $mname = test_input( $_POST["mname"] );
    $lname = test_input( $_POST["lname"] );
    $pnumber = test_input( $_POST["pnumber"] );
    $email = test_input( $_POST["email"] );
    $user = test_input( $_POST["user"] );
    $pswd = test_input( $_POST["pswd"]);
    $pswd2 = test_input( $_POST["pswd2"]);
    //Add other fields from sign up form
}

$myfile = fopen("assets/info/users.csv", "r") or die("Unable to open file!");

while (($data = fgetcsv($myfile, 100, ",")) !== FALSE) {
    if (($data[0] == $user) && password_verify($pswd, $data[1])) { 
        $_SESSION["user"] = $user;
        $_SESSION["time"] = date("h:i:s a");
        header("Location: account.php");
        exit();
    }
}
if (($login == "Guest") && ($user != $pswd)) { 
    $status = "Failed";
} 

fclose($myfile);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
