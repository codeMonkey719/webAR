<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="assets/css/mystyle.css"/>
	<script src="https://ajax.googleapis.com/ajax/
	libs/jquery/1.12.0/jquery.min.js"></script>
	<script>

	$(document).ready(function(){
	    $("button").click(function(){
	        $.ajax({url: "http://www.cs.colostate.edu/~alsryan/ct310/galactic/assets/php/getImage.php?petId=1", success: function(result){
	            $("#dogImage").attr("src", "data:image/png;base64," + result);
		        }, error: function(){
		        	alert("unsuccessful");
		        }
	   		 });
	    });
	});
	</script>
	</head>
	<body>
		<h2>CT310 - Assignment 7: AJAX & jQuery</h2>
		<img id="dogImage"src="" alt="">
		<p></p>
		<button>Load Image</button>
	</body>
</html>