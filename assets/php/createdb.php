<?php
try {
	$dbh = new PDO("sqlite:../../galactic.db");
	//echo 'Connection successful.';
	
	//Creates a users table
	$sql = "DROP TABLE IF EXISTS users;";
	$status = $dbh->exec($sql);
	$sql = "CREATE TABLE IF NOT EXISTS users (
	 		 uid int(50000) NOT NULL,
	 		 fname varchar(255), mname varchar(255),
	 		 lname varchar(255), pnumber varchar(15), 
	 		 email varchar(255),
	 		 uname varchar(255),
	 		 PRIMARY KEY (uid)); ";
	$status = $dbh->exec($sql);
	
	//Populating the users table 
	$sql = "INSERT INTO users VALUES
			(0, 'Richie', 'Luise', 'Smythe', '1236668989', 'olRichie@gmail.com', 'rBev'); 
			INSERT INTO users VALUES
			(1, 'Ross', 'Smith', 'Beverage', '9702223333', 'ross@gmail.com', 'ct310');
			INSERT INTO users VALUES
			(2, 'Richie', 'Luise', 'Smythe', '1236668989', 'olRichie@gmail.com', 'rBev'); 
			INSERT INTO users VALUES
			(3, 'Bob', 'BIG-TONY', 'Baluseky', '9702229999', 'danBT@gmail.com', 'dBT'); 
			 ";
			//(2, 'Roger', 'Lawrence', 'Rabbit', '9703334444', 'roger@gmail.com', 'rRab')
			  
			// (3, 'A', 'B', 'C', '9701234444',
			//  'ABC@gmail.com', 'ABC');";
	$status = $dbh->exec($sql);

	//Creates a galaxies table
	 $sql = "DROP TABLE IF EXISTS galaxies;";
	 $status = $dbh->exec($sql);
	 echo "HERE";
	 $sql = "CREATE TABLE IF NOT EXISTS galaxies (
	 		 gid int(50000) NOT NULL,
	 		 galName varchar(255),
	 		 galType varchar(255,)
	 		 postDate date, 
	 		 description text,
	 		 dist_from_earth real(255),	 		 
	 		 PRIMARY KEY (gid)); ";
	$status = $dbh->exec($sql);

	//Populating the galaxies table 
	$sql = "INSERT INTO galaxies VALUES
			(0, 'Milky Way', 'spiral', '6-12-06', 0, 'the');
			INSERT INTO galaxies VALUES			 
			(1, 'Canis Major Dwarf', 'irregular', '6-13-07', .025);
			INSERT INTO galaxies VALUES	
			(2, 'Sagittarius Dwarf', 'Elliptical', 'sagittariusdwarf.jpg', .081);
			INSERT INTO galaxies VALUES	
			(3, 'Bootes I', 'bootesI.jpg', .197);
			--INSERT INTO galaxies VALUES	
			--(4, 'Ursa Minor Dwarf', 'ursaminordwarf.jpg', .206, 'Ursa Major 
			--	II Dwarf (UMa II dSph) is a dwarf spheroidal galaxy situated 
			--	in the Ursa Major constellation and discovered in 2006 in the 
			--	data obtained by the Sloan Digital Sky Survey. The galaxy is 
			--	located approximately 30 kpc from the Sun and moves towards 
			--	the Sun with the velocity of about 116 km/s.');
";

	$status = $dbh->exec($sql);

	$sql = "SELECT * FROM galaxies;";
	$status = $dbh->exec($sql);

	if($status === FALSE){
		print_r($dbh->errorInfo());		
	}else{
		//echo "Done.";
	}
} catch (PDOException $e) {
	/* If you get here it is mostly a permissions issue
	 * or that your path to the database is wrong
	 */
	echo 'Connection failed: ' . $e->getMessage();
	die;
}