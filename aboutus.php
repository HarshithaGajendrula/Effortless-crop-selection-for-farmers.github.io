<?php
  include('language.php');
  $en_select='';
  $hi_select='';
  if((isset($_GET['language']) && $_GET['language']=='en') || !isset($_GET['language']))
  {
    $en_select='selected';
    $language='en';
  }else{
    $hi_select='selected';
    $language='hi';
  }
?>

<!DOCTYPE html>
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ABOUT US</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}


html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 20.0%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.col {
  float: left;
  width: 25.0%;
  margin-bottom: 16px;
  padding: 0 8px;
}
  }

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">CROP PREDICT</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="uploaderhome.php"><?php echo $top_nav[$language]['0'] ?></a></li>
        <li class="active"><a href="aboutus.php"><?php echo $top_nav[$language]['1'] ?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <li style="color:white;">Language  </li>
          <select onchange="set_Language()" name="language" id="language">
            
            <option value="en" <?php echo $en_select ?>>English</option>
            <option value="hi" <?php echo $hi_select ?>>Hindi</option>
          </select>
        </li>
      </ul>
    </div>
  </nav>
<div class="about-section">
  <h1>ABOUT US</h1>
  <h3 class="text text-center " style="color:#F7F718;">CROP PREDICT - Effortless Crop Selection for Farmers</h3>

<p style="font-size: 18px;"><?php echo $website_content[$language]['0'] ?></p><p> So, our ultimate goal is we at CROP PREDICT website wants to make farmers to select a suitable for his land before starting cultivation.</p>

<p>The way by which we want to reach our goal is, if farmers enter their soil type, pH, water level availability and season then the crop which is suitable to grow in his land will be displayed.</p>


<div>
  <br>
 <h2 class="text text-center " style="color:#F7F718;"> HOW IT WORKS</h2>

<p  >Here is how we ensure that your contribution reaches the farmers.</p>

<p>Step 1: The admin i.e. database manager should store the pH, soil type, water quantity and season required to grow a particular crop into database.</p>

<p>Step 2.1: Farmer can know which crop will be suitable to grow in his land by entering his soil pH, soil type, water quantity available in his area and season.</p>

<p>Step 2.2: Even farmer can know the pH, soil type, water quantity and season required to grow a particular crop by entering crop name.</p>
</div>


</div>


</div>
<script>
  src="https://code.jquery.com/jquery-3.5.0.min.js"
</script>
<script>
  function set_Language(){
    var language=jQuery('#language').val();
    window.location.href='http://localhost/miniproject1/aboutus.php/?language='+language;
  }
</script>

 </body>
</html>