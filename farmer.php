<!DOCTYPE html>
<html>
 <head>
 <title>Farmer Home Page</title>
 <style type="text/css">
 
 
          body{
            background-image: url('images/bgimage2.png');
            background-size : cover;
            background-attachment: fixed;
            margin-top: 20px;
            }
            .blankbox{
    
    background-color:rgb(255,280,255);
    
    width:90%;
    margin: auto;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.301), 0 6px 20px 0 rgba(0, 0, 0, 0.301);
}
.container{
    
    width: 100;
    min-height: 94vh;
    
    padding-left: 8%;
    padding-top: 70px;
    
    padding-right: 8%;
    box-sizing: border-box;
    overflow: hidden;
}

table, th, td {
 
  border-collapse: collapse;
}

table.center {
  position: absolute;
  margin-left: 38%; 
  margin-right: auto;
  margin-top:-15% ;
  margin-bottom: auto;
}

.button1{
    width: 300px;
    height: 60px;
    border-radius: 25px;
    font-size: 20px;
    
    
}
.button2{
    width: 300px;
    height: 60px;
    border-radius: 25px;
    font-size: 20px;
}


.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button2:hover {
  background-color: #4CAF50;
  color: white;
}



 </style>
 </head>
 <body>

    <div class="blankbox">
        <div class="container">

            <img src="images/farmerimage.png" style="width: 40%;height:55%;opacity: 7.1;">
            
                <div>
                   <table  class="center">
                     <tr>
                     <td style="" class="buttons"><a href="crop.php"><button class="button1">Select Crop/పంటను ఎంచుకోండి/फसल चुनें</button></a></td>
                     <td style="width: 20px;"></td>
                     <td style="" class="buttons"><a href="details.php"><button class="button1">Crop Details/పంట వివరాలు/फसल विवरण</button></a></td>
                     </tr>
                    </table>
                </div>
           

        </div>
    </div>

   
 
  
 </body>
</html>