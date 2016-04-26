<?php
// define variables and set to empty values
//session_start();

require_once "lib/passwordLib.php";

$info = "P2";
//$user = $pswd = $status = "";


if (isset($_SESSION["user"])) {
    $login = $_SESSION["user"];
}else{
    $login = "Guest";
}

$gname = $imgName = $description = "";
$distance = 0;

// echo "FIRST)";
// echo $fname ;
// echo"(LAST";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $gname = test_input( $_POST["gname"] );
    $imgName = test_input( $_POST["imgName"] );
    $distance = test_input( $_POST["distance"] );
    // $pnumber = test_input( $_POST["pnumber"] );
    // $email = test_input( $_POST["email"] );
    // $user = test_input( $_POST["user"] );
    // $pswd = test_input( $_POST["pswd"]);
    // $pswd2 = test_input( $_POST["pswd2"]);
}

// if (!isset($_POST["fname"])){
//     $fname = "";
// }
$validForm = 1;
if($gname == "" || $imgName == "" || $distance == "" ){
    echo "<form>Please make sure you've filled out all the fields with an *!</form>\n";
    $validForm = 0;
}


// if($fname!=""){
//     echo $fname;
// }

//$myfile = fopen("assets/info/galaxy.csv", "r") or die("Unable to open file!");

// while (($data = fgetcsv($myfile, 100, ",")) !== FALSE) {
//     if (($data[0] == $user) && password_verify($pswd, $data[1])) { 
//         $_SESSION["user"] = $user;
//         $_SESSION["time"] = date("h:i:s a");
//         header("Location: account.php");
//         exit();
//     }
// }
if (($login == "Guest") && ($user != $pswd)) { 
    $status = "Failed";
} 

//fclose($myfile);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
