<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Status Page</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
        $.ajax({
            url:"https://www.cs.colostate.edu/~ct310/yr2016sp/more_assignments/project03masterlist.php",
            mimeType: "text/plain; charset=x-user-defined",
	        success: function(result){
		    var	sites = JSON.parse(result);
		    var thisSiteName;
		    var thisSiteURL;
		    for (j = 0; j < sites.length; j++) {
		        thisSiteName = sites[j].siteName;
		        thisSiteURL = sites[j].awakeURL;
		        callSites(thisSiteName,thisSiteURL);
		    }
	        },
                error: function(result){
	            console.log("ERROR");
	        }
            });
    function callSites(siteName,siteURL){
        $.ajax({
       	    url:  siteURL,
      	    mimeType: "text/json; charset=x-user-defined",
	        success: function(result){
		    var siteStatus = result;
		    if (siteStatus.status == "up" ){
		        $('#sitesTable').append('<tr><td>' + siteName + '</td><td><image src="" /></tr>');
		    } else if (siteStatus.status == "down"){
		        $('#sitesTable').append('<tr><td>' + siteName + '</td><td><image src="" /></tr>');
		    }else {
		        $('#sitesTable').append('<tr><td>' + siteName + '</td><td><image src="" /></tr>');
		    }
                },
                error: function(){
	    	    $('#sitesTable').append('<tr><td>' + siteName + '</td><td><image src="error.png"');
	        }  
         });
    }
});
</script>
</head>
<body>
    <h3 style="text-align: center">AJAX with JSON.</h3>
    <table id='sitesTable'>
        <tr>
	    <th>Site Name</th>
	    <th>Status</th>
	</tr>
    </table>
</body>
</html>

