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
	$gid = 0;
	$imageUrl = "http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getImage.php?petId=0";
	$descUrl = "http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getDesc.php?petId=0";
	echo "[{\"petName\":\"$galName\",\"petKind\":\"$galKind\",\"breed\":\"$breed\",\"datePosted\":\"$datePosted\", \"imageURL\":\"$imageUrl\", \"petId\":\"$gid\", \"descURL\":\"$descUrl\"},";
	
	$galName = "Canis Major Dwarf";
	$galKind = "Irregular";
	$breed = "Bull Terrier";
	$datePosted = "6-13-07";
	$gid = 1;
	$imageUrl = "http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getImage.php?petId=1";
	$descUrl = "http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getDesc.php?petId=1";
	echo "{\"petName\":\"$galName\",\"petKind\":\"$galKind\",\"breed\":\"$breed\",\"datePosted\":\"$datePosted\", \"imageURL\":\"$imageUrl\", \"petId\":\"$gid\", \"descURL\":\"$descUrl\"},";

	$galName = "Sagittarius Dwarf Sphere";
	$galKind = "Elliptical";
	$breed = "Chinook";
	$datePosted = "6-14-08";
	$gid = 2;
	$imageUrl = "http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getImage.php?petId=2";
	$descUrl = "http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getDesc.php?petId=2";
	echo "{\"petName\":\"$galName\",\"petKind\":\"$galKind\",\"breed\":\"$breed\",\"datePosted\":\"$datePosted\", \"imageURL\":\"$imageUrl\", \"petId\":\"$gid\", \"descURL\":\"$descUrl\"},";

	$galName = "Bootes I";
	$galKind = "Elliptical";
	$breed = "Chow Chow";
	$datePosted = "6-15-09";
	$gid = 3;
	$imageURL = "http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getImage.php?petId=3";
	$descUrl = "http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getDesc.php?petId=3";
	echo "{\"petName\":\"$galName\",\"petKind\":\"$galKind\",\"breed\":\"$breed\",\"datePosted\":\"$datePosted\", \"imageURL\":\"$imageUrl\", \"petId\":\"$gid\", \"descURL\":\"$descUrl\"},";

	$galName = "Ursa Minor Dwarf";
	$galKind = "Spheroidal";
	$breed = "Xoloitzcuintli";
	$datePosted = "6-16-10";
	$gid = 0;
	$imageUrl = "http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getImage.php?petId=4";
	$descUrl = "http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getDesc.php?petId=4";
	echo "{\"petName\":\"$galName\",\"petKind\":\"$galKind\",\"breed\":\"$breed\",\"datePosted\":\"$datePosted\", \"imageURL\":\"$imageUrl\", \"petId\":\"$gid\", \"descURL\":\"$descUrl\"},";


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