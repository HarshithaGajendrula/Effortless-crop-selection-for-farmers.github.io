<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="stylehome.css" />


        <title>CROP PREDICT</title>
       

        <style>
          body{
            background-image: url('images/bgimage2.png');
            background-size : cover;
            background-attachment: fixed;
            }
        </style>

    </head>
    <body>
        <div class="blackbox">
          <div class="container" >
              <div class="navbar">
                <img src="images/logo1.png" class="logo" style="width: 160px;height:70px ;">
                <nav style="margin-top: -30px;">
                  <ul id="menuList">
                      <li><a href="admin.php">Admin/అడ్మిన్/व्यवस्थापक</a></li>
                      <li><a href="farmer.php">Farmer/రైతు/किसान</a></li>
                      <li><a href="review.php">Review/సమీక్ష/समीक्षा</a></li>
                  </ul>
                </nav>
                <img src="images/menu-icon.png" class="menu_icon" onclick="togglemenu()">
              
              </div>
              

             <div class="row">
                 <div  class="col-1">
                    <h style="font-size: 38px;">CROP:</h><br><h style="font-size: 35px;">
                        The cultivated produce of the ground.</h>
                    <h3>Let's select good crop and detect the good yield.</h3>
                    <p>Hope this helps you😃!</p>
                    <h4>Contact us at:</h4>
                    <button type="button" class="button button1">Call/కాల్ చేయండి/बुलाना : 180 300 900</button>
                 </div>
                 <div class="col-2">
                     <img src="images/cplogo.png" class="crops-logo" style="width: 400px;height:400px ;">


                 </div>
             </div>

          </div>


          </div>
        </div>

        <script>
            var menuList = document.getElementById("menuList");

            menuList.style.maxHeight = "0px";
            function togglemenu(){
                if(menuList.style.maxHeight == "0px")
                {
                    menuList.style.maxHeight = "130px";
                }
            else
                {
                    menuList.style.maxHeight = "0px";
                }
            }
        </script>

    </body>
</html>