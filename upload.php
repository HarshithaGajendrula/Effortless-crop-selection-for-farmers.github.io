<?php

include 'conn.php';

if(isset($_POST['done'])){
 $cropname = $_POST['cropname'];
 $ph = $_POST['ph'];
 $soiltype = $_POST['soiltype'];
 $waterlevel = $_POST['waterlevel'];
 $season = $_POST['season'];

 $q = " INSERT INTO `crops`(`cropname`, `ph`, `soiltype`, `waterlevel`, `season`) VALUES ('$cropname','$ph','$soiltype','$waterlevel','$season')";

 $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Enter Crop Details</title>

<meta charset="UTF-8">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
<!--<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
</head>
<body>

<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Home Page/హోమ్ పేజీ/होम पेज</a>
	    </div>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout/లాగ్అవుట్/लॉग आउट</a></li>
	    </ul>
	  </div>
	</nav>

<div class="container">
    	<br>
    	<h1 class="text-white bg-dark text-center" style="background-color: black; color: white">ENTER CROP DETAILS</h1>
    	<div class="col-lg-12 m-auto d-block">
    	<form method="post">
    		
    		<div class="form-group">
    			<label for="user">CROPNAME : </label>
    			<input type="text" name="cropname" id="user" class="form-control">
    		</div>

    		<div class="form-group">
    			<label for="user">pH : </label>
    			<input type="text" name="ph" id="user" class="form-control">
    		</div>

    		<div class="form-group">
    			<label for="user">SOIL TYPE  : </label>
    			<input type="text" name="soiltype" id="user" class="form-control">
    		</div>

    		<div class="form-group">
    			<label for="user">WATER LEVEL : </label>
    			<input type="text" name="waterlevel" id="user" class="form-control">
    		</div>

    		<div class="form-group">
    			<label for="user">SEASON : </label>
    			<input type="text" name="season" id="user" class="form-control">
    		</div>

    		


    		<button class="btn btn-success" type="submit" name="done" onclick="myFunction()"> Submit </button><br>
			
			<script>
function myFunction() {
  alert("Your crop details have been uploaded successfully!");
}
</script>

    	</form>
</div>

    </div>

 
</body>
</html>