<!DOCTYPE html>
<?php include '../web/header.web' ?>
<?php include '../php/config.php' ?>
<?php include '../lib/database.php' ?>
<html lang="en-US">
<head>
<meta http-equiv="refresh" content="3">
<?php include '../php/nav.php' ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Status Page</title>
<link href="../css/style.css" link type="text/stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
        $.ajax({
            url:"https://www.cs.colostate.edu/~ct310/yr2016sp/more_assignments/project03masterlist.php",
            mimeType: "text/plain; charset=x-user-defined",
	        success: function(result){
		    var	sites = JSON.parse(result);
		    var thisSiteName;
		    var thisSiteAwakeURL;
		    var thisSitePetsListURL;
		    for (j = 0; j < sites.length; j++) {
		        thisSiteName = sites[j].siteName;
		        thisSiteAwakeURL = sites[j].awakeURL;
		        thisSitePetsListURL = sites[j].petsListURL;
		        callSites(thisSiteName,thisSiteAwakeURL,thisSitePetsListURL);
		    }
	        },
                error: function(result){
	            console.log("ERROR");
	        }
            });
    function callSites(siteName,siteAwakeURL,sitePetsListURL){
        $.ajax({
       	    url:  siteAwakeURL,
      	    mimeType: "text/json; charset=x-user-defined",
	        success: function(result){
		    var siteStatus = result;
		    if (siteStatus.status == "up" ){
		        $('#sitesTable').append('<tr><td>' + siteName + '<td>' + siteAwakeURL + '<td>' + sitePetsListURL + '</td><td><image src="../img/greenFlag.png" / width=20px height=20px></tr>');
		    } else if (siteStatus.status == "down"){
		        $('#sitesTable').append('<tr><td>' + siteName + '<td>' + siteAwakeURL + '<td>' + sitePetsListURL + '</td><td><image src="../img/yellowFlag.png" / width=20px height=20px></tr>');
		    }else {
		        $('#sitesTable').append('<tr><td>' + siteName + '<td>' + siteAwakeURL + '<td>' + sitePetsListURL + '</td><td><image src="../img/redFlag.png" / width=20px height=20px></tr>');
		    }
                },
                error: function(){
		        $('#sitesTable').append('<tr><td>' + siteName + '<td>' + siteAwakeURL + '<td>' + sitePetsListURL + '</td><td><image src="../img/redFlag.png" / width=20px height=20px></tr>');
	        }  
         });
    }
});
</script>
</head>
<body>
    <h3 style="text-align: center">GNAR Status Page.</h3>
    <table id='sitesTable' style="margin-left:auto; margin-right:auto">
        <tr>
	    <th>Site Name</th>
	    <th>AwakeURL</th>
	    <th>PetListURL</th>
	    <th>Status</th>
	</tr>
    </table>
    <footer>
	<?php include '../php/end.php' ?>
    </footer>
</body>
</html>

