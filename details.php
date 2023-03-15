<?php

$conn = new mysqli('localhost', 'root', '', 'agriculture');

if(isset($_GET['done'])){

 $cropname = $_GET['cropname'];
// `ph` = 7 AND `soiltype` LIKE \'red soil\' AND `waterlevel` LIKE \'high\' AND `season` LIKE \'karif\'
 $sql = "SELECT * FROM `crops` WHERE cropname LIKE '%$cropname%' ";

 $result = $conn->query($sql);
}
else{
        $sql = "SELECT * FROM `crops`";
        $cropname = "";
   }
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
 <title>CROP DETAILS</title>

<!--<meta charset="UTF-8">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Home Page/హోమ్ పేజీ/होम पेज</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="crop.php">Select Crop/పంటను ఎంచుకోండి/फसल चुनें</a></li>
          <li class="active"><a href="details.php">Crop Details/పంట వివరాలు/फसल विवरण</a></li>
          <li><a href="review.php">Review/సమీక్ష/समीक्षा</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout/లాగ్అవుట్/लॉग आउट</a></li>
	    </ul>
	  </div>
	</nav>

<div class="container-fluid">
    	<br>
    	<h1 class="text-white bg-dark text-center" style="background-color: black; color: white">ENTER CROP NAME</h1>
    	<div class="col-lg-12 m-auto d-block">
    	<form method="GET">

    		<div class="form-group">
    			<label for="user">CROP NAME /  పంట పేరు /  फसल का नाम : </label>
                <select name="cropname" class="form-control">
                            <option>Select / ఎంచుకోండి / चुनते हैं</option>
                            <option value="barley/బార్లీ/जौ">barley/బార్లీ/जौ</option>
                            <option value="corn/మొక్కజొన్న/मक्का">corn/మొక్కజొన్న/मक्का</option>
                            <option value="cucumber/దోసకాయ/">cucumber/దోసకాయ/खीरा</option>
                            <option value="cotton/పత్తి/कपास">cotton/పత్తి/कपास</option>
                            <option value="paddy/వరి/धान का खेत">paddy/వరి/धान का खेत</option>
                            <option value="sunflower/పొద్దుతిరుగుడు పువ్వు/सूरजमुखी">sunflower/పొద్దుతిరుగుడు పువ్వు/सूरजमुखी</option>
                            <option value="tomato/టమోటా/टमाटर">tomato/టమోటా/टमाटर</option>
                            <option value="wheat/గోధుమ/गेहूं">wheat/గోధుమ/गेहूं</option>
                </select>
    		</div>

        <!--<a role="button" class="btn btn-success"
                    data-placement="bottom" data-toggle="modal" data-target="#displaycrop">SUBMIT</a>-->

    		<button class="btn btn-success" type="submit" name="done"> Submit </button><br>
			

    	</form>
</div>

    </div>
<br><br>
<div class="container-fluid">
<table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center" style="background-color: black;color: white;">
 <th style="text-align: center;"> CROP NAME /  పంట పేరు /  फसल का नाम </th>
 <th style="text-align: center;"> PH VALUE </th>
 <th style="text-align: center;"> SOIL TYPE /  నేల రకం /  मिट्टी के प्रकार </th>
 <th style="text-align: center;"> WATER LEVEL /  నీటి పరిమాణం /  पानी की मात्रा </th>
 <th style="text-align: center;"> SEASON /  బుతువు /  मौसम </th>

 </tr >

 <?php
 while($res = mysqli_fetch_array($result)){
 ?>
 <tr class="text-center">
 	<td> <b><?php echo $res['cropname'];  ?></b> </td>
 <td> <b><?php echo $res['ph'];  ?></b> </td>
 <td> <b><?php echo $res['soiltype'];  ?></b> </td>
 <td> <b><?php echo $res['waterlevel'];  ?></b> </td>
 <td> <b><?php echo $res['season'];  ?></b> </td>
 
 </tr>

 <?php 
 }
  ?>
 
 </table> 
 </div>
</body>
</html>