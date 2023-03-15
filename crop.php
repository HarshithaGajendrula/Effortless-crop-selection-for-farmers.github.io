<?php

$conn = new mysqli('localhost', 'root', '', 'agriculture');

if(isset($_GET['done'])){

 $phval = $_GET['ph'];
 $soil = $_GET['soiltype'];
 $water = $_GET['waterlevel'];
 $seasontype = $_GET['season'];
// `ph` = 7 AND `soiltype` LIKE \'red soil\' AND `waterlevel` LIKE \'high\' AND `season` LIKE \'karif\'
 $sql = "SELECT * FROM `crops` WHERE ph = $phval AND soiltype LIKE '%$soil%' AND waterlevel LIKE '%$water%' AND season LIKE '%$seasontype%' ";

 $result = $conn->query($sql);
}
else{
        $sql = "SELECT * FROM `crops`";
        $phval = "";
        $soil = "";
        $water = "";
        $seasontype = "";
   }
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
 <title>SELECT CROP</title>

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
	      <li class="active"><a href="crop.php">Select Crop/పంటను ఎంచుకోండి/फसल चुनें</a></li>
          <li><a href="details.php">Crop Details/పంట వివరాలు/फसल विवरण</a></li>
          <li><a href="review.php">Review/సమీక్ష/समीक्षा</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout/లాగ్అవుట్/लॉग आउट</a></li>
	    </ul>
	  </div>
	</nav>

<div class="container-fluid">
    	<br>
    	<h1 class="text-white bg-dark text-center" style="background-color: black; color: white">ENTER DETAILS AND PREDICT THE CROP</h1>
    	<div class="col-lg-12 m-auto d-block">
    	<form method="GET">
    		
    		<div class="form-group">
    			<label for="user">pH /  నేల యొక్క pH /  मिट्टी का ph : </label>
    			<input type="text" name="ph" id="user" class="form-control">
    		</div>

    		<div class="form-group">
    			<label for="user">SOIL TYPE /  నేల రకం /  मिट्टी के प्रकार : </label>
                <select name="soiltype" class="form-control">
                            <option>Select / ఎంచుకోండి / चुनते हैं</option>
                            <option value="red/ఎర్ర నేల/लाल मिट्टी">red/ఎర్ర నేల/लाल मिट्टी</option>
                            <option value="black/నల్ల నేల/काली मिट्टी">black/నల్ల నేల/काली मिट्टी</option>
                            <option value="loamy/లోమీ నేల/बलुई मिट्टी">loamy/లోమీ నేల/बलुई मिट्टी</option>
                            <option value="sandy loam/ఇసుక మట్టి/बलुई दोमट मिट्टी">sandy loam/ఇసుక మట్టి/बलुई दोमट मिट्टी</option>
                            <option value="alluvial/ఒండ్రు నేల/जलोढ़ मिट्टी">alluvial/ఒండ్రు నేల/जलोढ़ मिट्टी</option>
                            <option value="clayey/బంకమట్టి నేల/चिकनी मिट्टी">clayey/బంకమట్టి నేల/चिकनी मिट्टी</option>
                            <option value="sandy/ఇసుక నేల/रेत भरी मिट्टी">sandy/ఇసుక నేల/रेत भरी मिट्टी</option>
                </select>
    		</div>

    		<div class="form-group">
    			<label for="user">WATER LEVEL /  నీటి పరిమాణం /  पानी की मात्रा  : </label>
                <select name="waterlevel" class="form-control">
                            <option>Select / ఎంచుకోండి / चुनते हैं</option>
                            <option value="high/అధిక/उच्च">high/అధిక/उच्च</option>
                            <option value="medium/మధ్యస్థ/मध्यम">medium/మధ్యస్థ/मध्यम</option>
                            <option value="low/తక్కువ/कम">low/తక్కువ/कम</option>
                </select>
    		</div>

    		<div class="form-group">
    			<label for="user">SEASON /  బుతువు /  मौसम : </label>
                <select name="season" class="form-control">
                            <option>Select / ఎంచుకోండి / चुनते हैं</option>
                            <option value="kharif/ఖరీఫ్/खरीफ">kharif/ఖరీఫ్/खरीफ</option>
                            <option value="rabi/రబీ/रबी">rabi/రబీ/रबी</option>
                            <option value="zaid/జైద్/ज़ैद">zaid/జైద్/ज़ैद</option>
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