<?php
try {
	$dbh = new PDO("sqlite:./galactic.db");
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
	 
	 $sql = "CREATE TABLE IF NOT EXISTS galaxies (
	 		 gid int(50000) NOT NULL,
	 		 galName varchar(255),
	 		 galType varchar(255),
	 		 galBreed varchar(255),
	 		 postDate date, 
	 		 imageUrl varchar(255),
	 		 descUrl varchar(255),
	 		 description text,	 		 
	 		 PRIMARY KEY (gid)); ";
	$status = $dbh->exec($sql);
		if($status === FALSE){
		print_r($dbh->errorInfo());		
	}else{
		//echo "Done.";
	}
	//echo "HERE";
	//Populating the galaxies table 
	$sql = "INSERT INTO galaxies VALUES
			(0, 'Milky Way', 'spiral', 'husky', '6-12-06','../img/0.jpg', '../php/0.php', 'The Milky Way 
				is the galaxy that contains our Solar System. Its name milky is derived from its appearance 
				as a dim glowing band arching across the night sky whose individual stars cannot be distinguished 
				by the naked eye.');
			INSERT INTO galaxies VALUES			 
			(1, 'Canis Major Dwarf', 'irregular', 'Brown Lab', '6-13-07', '../img/0.jpg', '../php/1.php', 'The Canis 
				Major Dwarf Galaxy or Canis Major Overdensity is a disputed dwarf irregular galaxy in the Local Group, 
				located in the same part of the sky as the constellation Canis Major.');
			INSERT INTO galaxies VALUES	
			(2, 'Sagittarius Dwarf', 'Elliptical', 'Black Lab', '6-12-08','../img/0.jpg', '../php/2.php','The Sagittarius 
				Dwarf Spheroidal Galaxy (Sgr dSph), also known as the Sagittarius Dwarf Elliptical Galaxy (Sgr dE or Sag DEG), 
				is an elliptical loop-shaped satellite galaxy of the Milky Way. It consists of four globular clusters, the 
				main cluster having been discovered in 1994. Sgr dSph is roughly 10,000 light-years in diameter, and is 
				currently about 70,000 light-years from Earth, travelling in a polar orbit (i.e. an orbit passing over the 
					Milky Way’s galactic poles) at a distance of about 50,000 light-years from the core of the Milky Way.');
			INSERT INTO galaxies VALUES	
			(3, 'Bootes I', 'spiral', 'Chow chow',  '6-12-09', '../img/0.jpg', '../php/3.php', 'The Boötes Dwarf Galaxy is 
				a galaxy, which appears faint, with a luminosity of 100,000 L☉ and an absolute magnitude of –5.8. It lies 
				about 197 thousand light-years away in the constellation Boötes.');
			INSERT INTO galaxies VALUES	
			(4, 'Ursa Minor Dwarf', 'spiral', 'Xoloitzcuintli', '6-12-10', '../img/0.jpg', '../php/4.php', 'The Ursa Minor 
				Dwarf dwarf spheroidal galaxy was discovered by A.G. Wilson of the Lowell Observatory in the Palomar Sky 
				Survey in 1955. It is part of the Ursa Minor constellation, and a satellite galaxy to the Milky Way.');
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