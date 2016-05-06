<?php
header('Content-Type: text/json'); 

	//$List = "[{\"petName\":\"nameOfThePet\",\"petKind\":\"kindOfThePet\",\"breed\":\"breedOfThePet\", \"datePosted\":\"mm/dd/yyyy\",
//imageURL:\"https://www.cs.colostate.edu/~dasriniv/getImage.php?petId=uniqueIdOfThePet\",
//petId:\"uniqueIdOfThePet\",
//descURL:\"https://www.cs.colostate.edu/~dasriniv/getDesc.php?petId=uniqueIdOfThePet\"}]"; 
	$i = 0;
	$galArr = array();
	
	$galArr[$i++] = array(
		"petName"=>"Milky Way",
		"petKind"=>"Spiral",
		"breed"=>"Husky", 
		"petId"=>"0",
		"datePosted"=>"6-12-06", 
		"imageURL"=>"http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getImage.php?petId=0",	
		"descUrl"=>"http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getDesc.php?petId=0",
	);

	$galArr[$i++] = array(
		"petName"=>"Canis Major Dwarf",
		"petKind"=>"Irregular",
		"breed"=>"Bull Terrier",
		"petId"=>"1",
		"datePosted"=>"6-13-07",
		"imageURL"=>"http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getImage.php?petId=1",
		"descUrl"=>"http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getDesc.php?petId=1",
	);

	$galArr[$i++] = array(
		"petName"=>"Sagittarius Dwarf Sphere",
		"petKind"=>"Elliptical",
		"breed"=>"Chinook",
		"petId"=>"2",
		"datePosted"=>"6-14-08",
		"imageURL"=>"http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getImage.php?petId=2",
		"descUrl"=>"http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getDesc.php?petId=2",
	);
	
	$galArr[$i++] = array(
		"petName"=>"Bootes I",
		"petKind"=>"Elliptical",
		"breed"=>"Chow Chow",
		"petId"=>"3",
		"datePosted"=>"6-15-09",
		"imageURL"=>"http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getImage.php?petId=3",
		"descUrl"=>"http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getDesc.php?petId=3",
	);
	
	$galArr[$i++] = array(
		"petName"=>"Ursa Minor Dwarf",
		"petKind"=>"Spheroidal",
		"breed"=>"Xoloitzcuintli",
		"petId"=>"4",
		"datePosted"=>"6-16-10",
		"imageURL"=>"http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getImage.php?petId=4",
		"descUrl"=>"http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getDesc.php?petId=4"
	);
	echo json_encode($galArr);

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