<!DOCTYPE html> 
<html>
<?php include '../web/header.web' ?>
<?php include '../php/config.php' ?>
<?php include '../lib/database.php' ?>
</head>

	<body>
		<header>
		<?php include '../php/nav.php' ?>
		</header>
		<main>
			<h3>Galaxies</h3>
			 <script type="text/javascript">
			// 	var http = new XMLHttpRequest();
			   
			// 	function validate(user) {
			// 		http.abort();
			// 		//http.open("GET", 'ct310lec25validate?name=' + user, true);
			// 		http.onreadystatechange = function() {
			// 			if (http.readyState == 4) {
			// 				document.getElementById('valbak').innerHTML = http.responseText;
			// 			}
			// 		}
			// 		http.send(null);
			// 	} //onkeyup="validate(this.value)"
			 </script>
			<form action="#" method="post" autocomplete="off">
					<b>Search: </b><input  type="text"><br>
					<div id="valbak"></div>
				</form>
			<div class="center">
				<p>Milky Way</p>
				<a href="milkyway.php"><img class="gallary" src="assets/img/milkyway.jpg" alt="Milkyway"/></a>
				<!-- pictures from https://www.wikipedia.org/ 
					Credit: NASA/JPL-Caltech/S. Stolovy (SSC/Caltech) - 
					http://www.spitzer.caltech.edu/images/
					1540-ssc2006-02a-A-Cauldron-of-Stars-at-the-Galaxy-s-Center-->
				<p>
					Great with kids!
				</p>
				<br><br>
			</div>
			<div class="center">
				<p>Canis Major Dwarf</p>
				<a href="canismajordwarf.php"><img class="gallary" src="assets/img/canismajordwarf.jpg" alt="Canis Major Dwarf"/></a>
				<!-- pictures from https://www.wikipedia.org/
				Image Credit: Anglo-Australian Observatory/Royal Observatory Edinburgh.
They were made from UK Schmidt plates by David Malin. -->
				<p>
					Hosebroken!
				</p>
				<br><br>
			</div>
			<div class="center">
				<p>Sagittarius Dwarf Sphere</p>
				<a href="sagittariusdwarfsphere.php"><img class="gallary" src="assets/img/sagittatiusdwarfsphere.jpg" alt="Sagittarius Dwarf Sphere"/></a>
				<!-- pictures from https://www.wikipedia.org/ 
					Credit: Atlas of the Universe
					http://www.atlasoftheuniverse.com/localgrp/s_sgrdw1.jpg-->
				<p>
					Great for starter family!
				</p>
				<br><br>
			</div>
			
			<div class="center">
				<p>Bootes I</p>
				<a href="bootes.php"><img class="gallary" src="assets/img/bootes.jpg" alt="Bootes"/></a>
				<!-- pictures from https://www.wikipedia.org/ 
					Credit: NGC 6334 in Scorpius, courtesy ESO/Robert Gendler
					https://www.google.com/search?q=bootes+galaxy+cluster&biw
					=960&bih=1065&tbm=isch&tbo=u&source=univ&sa=X&ved=0ahUKE
					wjjs6bCmIzMAhWovIMKHTTDDjsQsAQIOQ#imgdii=ZK3990HrDfvUSM%
					3A%3BZK3990HrDfvUSM%3A%3B1u-VYnUpME4H6M%3A&imgrc=ZK3990H
					rDfvUSM%3A-->
				<p>
					Not the brightest, Bootes I!
				</p>
				<br><br>
			</div>
			
			<div class="center">
				<p>Ursa Minor Dwarf</p>
				<a href="ursaminordwarf.php"><img class="gallery" src="assets/img/ursaminordwarf.jpg" alt="Ursa Minor Dwarf"/></a>
				<!-- pictures from https://www.imagejuicy.org/
					-->
				<p>
					Only mildly hosebroken!
				</p>
				<br><br>
			</div>
			
			    <?php
				    $db = new Database();
				    $sql = "SELECT * FROM galaxies";
				    $result = $db->query($sql);
				    if($result === FALSE) {
						//print_r(errorInfo());
				    }
				    $db->query($sql);
				    foreach ($result as $i) {
					//echo "$_FILES[file][filename]";
				    echo "ID: $i[0]";
					echo "<p style=\"margin-left:10px;\">Name: $i[1] <br>";
					echo "Kind: $i[2]  <br>";
					echo "Breed: $i[3]  <br>";
					echo "Description: $i[4]<br>";
					echo "Distance from Earth (light years): $i[5]</p> <br>";
					//include "commentSection.php";
					echo "<br><br>";
			    } 
				?>

		</main>
		
		<footer>
			<?php include '../php/end.php' ?>
		</footer>
	</body>
</html>
