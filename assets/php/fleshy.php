<!DOCTYPE html> 
<html>
<?php include '../web/header.web' ?>
<?php include '../php/config.php' ?>
<?php include 'createdb.php' ?>
<?php //include 'status.php' ?>
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
			<!--<div class="center">
				<p>Milky Way</p>
				<a href="../php/milkyway.php"><img class="gallary" src="../img/milkyway.jpg" alt="Milkyway"/></a>
				<!-- pictures from https://www.wikipedia.org/ 
					Credit: NASA/JPL-Caltech/S. Stolovy (SSC/Caltech) - 
					http://www.spitzer.caltech.edu/images/
					1540-ssc2006-02a-A-Cauldron-of-Stars-at-the-Galaxy-s-Center-->
				<!--<p>
					Great with kids!
				</p>
				<br><br>
			</div>
			<div class="center">
				<p>Canis Major Dwarf</p>
				<a href="../php/canismajordwarf.php"><img class="gallary" src="../img/canismajordwarf.jpg" alt="Canis Major Dwarf"/></a>
				<!-- pictures from https://www.wikipedia.org/
				Image Credit: Anglo-Australian Observatory/Royal Observatory Edinburgh.
They were made from UK Schmidt plates by David Malin. -->
				<!--<p>
					Hosebroken!
				</p>
				<br><br>
			</div>
			<div class="center">
				<p>Sagittarius Dwarf Sphere</p>
				<a href="../img/sagittariusdwarfsphere.php"><img class="gallary" src="../img/sagittatiusdwarfsphere.jpg" alt="Sagittarius Dwarf Sphere"/></a>
				<!-- pictures from https://www.wikipedia.org/ 
					Credit: Atlas of the Universe
					http://www.atlasoftheuniverse.com/localgrp/s_sgrdw1.jpg-->
			<!--	<p>
					Great for starter family!
				</p>
				<br><br>
			</div>
			
			<div class="center">
				<p>Boötes I</p>
				<a href="../img/bootes.php"><img class="gallary" src="../img/bootes.jpg" alt="Bootes"/></a>
				<!-- pictures from https://www.wikipedia.org/ 
					Credit: NGC 6334 in Scorpius, courtesy ESO/Robert Gendler
					https://www.google.com/search?q=bootes+galaxy+cluster&biw
					=960&bih=1065&tbm=isch&tbo=u&source=univ&sa=X&ved=0ahUKE
					wjjs6bCmIzMAhWovIMKHTTDDjsQsAQIOQ#imgdii=ZK3990HrDfvUSM%
					3A%3BZK3990HrDfvUSM%3A%3B1u-VYnUpME4H6M%3A&imgrc=ZK3990H
					rDfvUSM%3A-->
				<!--<p>
					Not the brightest, Bootes I!
				</p>
				<br><br>
			</div>
			
			<div class="center">
				<p>Ursa Minor Dwarf</p>
				<a href="../img/ursaminordwarf.php"><img class="gallery" src="../img/ursaminordwarf.jpg" alt="Ursa Minor Dwarf"/></a>
				<!-- pictures from https://www.imagejuicy.org/
					-->
			<!--	<p>
					Only mildly hosebroken!
				</p>
				<br><br>
			</div> -->
			<br>
			    <?php
				    //$db = new Database();
				    $sql = "SELECT * FROM galaxies";
				    $result = $dbh->query($sql);
				  //   if($result === FALSE) {
						// //print_r(errorInfo());
				  //   }
				    $dbh->query($sql);
				    foreach ($result as $i) {
						//echo "$_FILES[file][filename]";
					    echo "ID: $i[0]";
						echo "<p style=\"margin-left:20px;\">Name: $i[1] <br>";
						echo "Kind: $i[2]  <br>";
						echo "Breed: $i[3]  <br>";
						echo "Post Date: $i[4] <br>";
						echo "Image: $i[5] <br>";
						echo "Description: $i[7]</p><br>";
						echo "<br><br>";
			    	}
				?>

<script>
	document.write("Hallo");
</script>

			    <script>
			    document.write("<p>IN HERE</p>");
			    	urlList = [
			    		"http://www.cs.colostate.edu/~bennywng/P3/Pets/petlist.php",
			    		"http://www.cs.colostate.edu/~dom021/Project/petslist.php",
			    		"http://www.cs.colostate.edu/~ibertola/ct310/P3/services/animal_service.p",
			    		"http://www.cs.colostate.edu/~bsholway/P2/petsList.php",
			    		"http://www.cs.colostate.edu/~mplaut/P3/petList.php",	
			    		"http://www.cs.colostate.edu/~jlzheng/PJ3/petslist.php",
			    		"http://www.cs.colostate.edu/~luiz/ct310/p3/api/list.php",
			    		"http://www.cs.colostate.edu/~jkniager/CT310Spring2016/TeamProject/P3/petslist.php",
			    		"http://www.cs.colostate.edu/~mateusr/project3/petlist.php",
			    		"http://www.cs.colostate.edu/~tmalmst/CT310-P3/petList.php",
			    		"http://www.cs.colostate.edu/~apaswate/P3/project3/petlist.php",
			    		"http://www.cs.colostate.edu/~torrybr/p3/petsListURL.php",
			    		"http://www.cs.colostate.edu/~joshf/pets/petslist.php",
			    		"http://www.cs.colostate.edu/~alhen/Project/petList.php",
			    		"http://www.cs.colostate.edu/~jrmuzzy1/project3/petsList.php",
			    		"http://www.cs.colostate.edu/~mtferg/project2/petslist.php",
			    		"http://www.cs.colostate.edu/~gstein/Project2/petslist.php",
			    		"http://www.cs.colostate.edu/~wadesher/P3/petsList.php",
			    		"http://www.cs.colostate.edu/~corunyon/p3/petslist.php",
			    		"http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/petList.php",
			    		"http://www.cs.colostate.edu/~ckuester/PROJ3/petlist.php",
			    		"http://www.cs.colostate.edu/~pmichaud/project3/getPets.php",
			    	];
			    	for(x = 0; x < urlList.length; x++){
				    	$(document).ready(function(){
					        $.ajax({
					            url:urlList[x],
					            mimeType: "text/plain; charset=x-user-defined",
						        success: function(result){
								    	siteObject = JSON.parse(result);
								    var thisPetName;
								    for (j = 0; j < sites.length; j++) {
								    	document.write("IN HERE");
								        thisSitePetsListURL = sites[j].petsListURL;
								        //callSites(thisSiteName,thisSiteAwakeURL,thisSitePetsListURL);
								        document.write(siteObject.petName);
								    }
						        },
					                error: function(result){
						            	console.log("ERROR");
						        	}
					        }););
					    }
					}


		    	</script>
}sdfgg				



		</main>
		
		<footer>
			<?php include '../php/end.php' ?>
		</footer>
	</body>
</html>
