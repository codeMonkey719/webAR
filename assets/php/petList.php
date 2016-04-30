<?php
header('Content-Type: text/json'); 

	//$List = "[{\"petName\":\"nameOfThePet\",\"petKind\":\"kindOfThePet\",\"breed\":\"breedOfThePet\", \"datePosted\":\"mm/dd/yyyy\",
//imageURL:\"https://www.cs.colostate.edu/~dasriniv/getImage.php?petId=uniqueIdOfThePet\",
//petId:\"uniqueIdOfThePet\",
//descURL:\"https://www.cs.colostate.edu/~dasriniv/getDesc.php?petId=uniqueIdOfThePet\"}]"; 
	
	$galName = "Milky Way";
	$galKind = "Spiral";
	$breed = "Husky";
	$datePosted = "6-12-06";
	echo "[{\"petName\":\"$galName\",\"petKind\":\"$galKind\",\"breed\":\"$breed\",\"datePosted\":\"$datePosted\"},";
	
	$galName = "Canis Major Dwarf";
	$galKind = "Irregular";
	$breed = "Bull Terrier";
	$datePosted = "6-13-07";
	echo "{\"petName\":\"$galName\",\"petKind\":\"$galKind\",\"breed\":\"$breed\",\"datePosted\":\"$datePosted\"},";

	$galName = "Sagittarius Dwarf Sphere";
	$galKind = "Elliptical";
	$breed = "Chinook";
	$datePosted = "6-14-08";
	echo "{\"petName\":\"$galName\",\"petKind\":\"$galKind\",\"breed\":\"$breed\",\"datePosted\":\"$datePosted\"},";

	$galName = "Bootes I";
	$galKind = "Elliptical";
	$breed = "Chow Chow";
	$datePosted = "6-15-09";
	echo "{\"petName\":\"$galName\",\"petKind\":\"$galKind\",\"breed\":\"$breed\",\"datePosted\":\"$datePosted\"},";

	$galName = "Ursa Minor Dwarf";
	$galKind = "Spheroidal";
	$breed = "Xoloitzcuintli";
	$datePosted = "6-16-10";
	echo "{\"petName\":\"$galName\",\"petKind\":\"$galKind\",\"breed\":\"$breed\",\"datePosted\":\"$datePosted\"}]";


	// try {
	// 	$dbh = new PDO("sqlite:./galactic.db");
	// 	$sql = "SELECT * FROM galaxies;";
	// 	$results = $dbh->query($sql);

	// 	//$finalList =  json_encode($List);
 // 		echo "$results";
 // 		echo "nothing";
	// }catch (PDOException $e) {
	// 	/* If you get here it is mostly a permissions issue
	// 	* or that your path to the database is wrong
	// 	*/
	// 	echo 'Connection failed: ' . $e->getMessage();
	// 	die;
	// }	


?>