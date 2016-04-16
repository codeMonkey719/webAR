<?php
try {
	$dbh = new PDO("sqlite:./galactic.db");
	echo 'Connection successful.';
	
	//Creates a users table
	$sql = "DROP TABLE IF EXISTS users;";
	$status = $dbh->exec($sql);
	$sql = "CREATE TABLE users (
	 		 uid int(5) NOT NULL,
	 		 fname varchar(255), mname varchar(255),
	 		 lname varchar(255), pnumber varchar(15), 
	 		 email varchar(255),
	 		 uname varchar(255),
	 		 PRIMARY KEY (uid)); ";
	$status = $dbh->exec($sql);
	
	//Populating the users table 
	$sql = "INSERT INTO users VALUES
			(1, 'Ross', 'Smith', 'Beverage', '9702223333', 'ross@gmail.com', 'rBev');
			INSERT INTO users VALUES
			(2, 'Richie', 'Luise', 'Smythe', '1236668989', 'olRichie@gmail.com', 'rBev'); 
			INSERT INTO users VALUES
			(3, 'Ross', 'Smith', 'Beverage', '9702223333', 'ross@gmail.com', 'rBev'); 
			 ";
			//(2, 'Roger', 'Lawrence', 'Rabbit', '9703334444', 'roger@gmail.com', 'rRab')
			  
			// (3, 'A', 'B', 'C', '9701234444',
			//  'ABC@gmail.com', 'ABC');";
	$status = $dbh->exec($sql);

	//Creates a galaxies table
	$sql = "DROP TABLE IF EXISTS galaxies;";
	$status = $dbh->exec($sql);
	$sql = "CREATE TABLE galaxies (
	 		 gid int(5) NOT NULL,
	 		 galName varchar(255),
	 		 galaxy_img varchar(255), 
	 		 dist_from_earth real(255),
	 		 PRIMARY KEY (gid)); ";
	$status = $dbh->exec($sql);

	//Populating the galaxies table 
	$sql = "INSERT INTO galaxies VALUES
			(1, 'Milky Way', 'milkyway.jpg', 0);
			INSERT INTO galaxies VALUES			 
			(2, 'Canis Major Dwarf', 'canismajordwarf.jpg', .025);
			INSERT INTO galaxies VALUES	
			(3, 'Sagittarius Dwarf', 'sagittariusdwarf.jpg', .081);
			INSERT INTO galaxies VALUES	
			(4, 'Ursa Major II Dwarf', 'ursamajorIIdwarf.jpg', .098);
			INSERT INTO galaxies VALUES	
			(5, 'Large Magellanic Cloud', 'largemagellaniccloud.jpg', .163);
			INSERT INTO galaxies VALUES	
			(6, 'Bootes I', 'bootesI.jpg', .197);
			INSERT INTO galaxies VALUES	
			(7, 'Small Magellanic Cloud', 'smallmagellaniccloud.jpg', .206);
			INSERT INTO galaxies VALUES	
			(8, 'Ursa Minor Dwarf', 'ursaminordwarf.jpg', .206);
			INSERT INTO galaxies VALUES	
			(9, 'Draco Dwarf', 'dracodwarf.jpg', .258);
			INSERT INTO galaxies VALUES	
			(10, 'NGC 2419', 'ngc2419.jpg', .275);";
	$status = $dbh->exec($sql);

	$sql = "SELECT * FROM galaxies;";
	$status = $dbh->exec($sql);


	if($status === FALSE){
		print_r($dbh->errorInfo());
		
	}else{
		echo "Done.";
	}
} catch (PDOException $e) {
	/* If you get here it is mostly a permissions issue
	 * or that your path to the database is wrong
	 */
	echo 'Connection failed: ' . $e->getMessage();
	die;
}