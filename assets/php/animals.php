<?php
include ("header.php");
include ("database.php");
?>
</head>
<body>
<?php
include ("title.php");
include ("navBar.php");
?>
<div id="animalContent">
    <br>
    <h2>Welcome to the Animals Page!</h2>
    <h3>Here is our current listing of available animals who need a home!</h3>
    <form action ="" method = "post"<br>
	    <input type="text" size=50>
            <input type="hidden" name="search">
            <input type="submit" value="Search"><br><br>
    </form>
    
    <?php
    $db= new Database();
    $sql="SELECT * FROM animal";
    $result=$db->query($sql);
    if($result === FALSE) {
	print_r(errorInfo());
    }
    $db->query($sql);
    foreach ($result as $i) {
	//echo "$_FILES[file][filename]";
	echo "<p style=\"margin-left:10px;\">Name: $i[1] <br>";
	echo "Height: $i[2] (inches) <br>";
	echo "Weight: $i[3] (pounds) <br>";
	echo "Type: $i[4] <br>";
	echo "Description: $i[5]</p> <br>";
	include "commentSection.php";
	echo "<br><br>";
    } ?>
</div>

<?php
include ("footer.php");
?>
