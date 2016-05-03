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
	 		 PRIMARY KEY (gid)); ";
	$status = $dbh->exec($sql);
		if($status === FALSE){
		print_r($dbh->errorInfo());		
	}else{
		//echo "Done.";
	}
	echo "HERE";
	//Populating the galaxies table 
	$sql = "INSERT INTO galaxies VALUES
			(0, 'Milky Way', 'spiral', 'husky', '6-12-06', 0, 'the');
			INSERT INTO galaxies VALUES			 
			(1, 'Canis Major Dwarf', 'irregular', 'Brown Lab', '6-13-07', '');
			INSERT INTO galaxies VALUES	
			(2, 'Sagittarius Dwarf', 'Elliptical', 'Black Lab', '6-12-07','2.jpg', .081);
			INSERT INTO galaxies VALUES	
			(3, 'Bootes I', 'spiral', 'Chow chow', 'bootesI.jpg', '6-12-08');
			INSERT INTO galaxies VALUES	
			(4, 'Ursa Minor Dwarf', 'spiral', 'Xoloitzcuintli', 'ursaminordwarf.jpg');
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