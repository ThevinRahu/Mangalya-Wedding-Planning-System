<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title> Mangalya </title>
 <link rel = "stylesheet" href = "../styles/styled.css">
 <link rel = "stylesheet" href = "../styles/header.css">
 <script src="../js/script.js"></script>
 </head>
 <style>
 body{
 background-color:#fff2e6;
 }
 </style>
 <body>
 <table class="tableTop" bgcolor="#ccddff">
    <tr>
        <th> <img src = "../images/logonew.png" class ="logo"> </th>
        <th class="tytle" style="font-size: 40px; padding: 1px;"> Welcome Planner..! </th>
    </tr>
 </table>

 <hr>
 <br>
 <center>
 <button style="padding: 15px 32px; background-color:#ffb366; border-radius: 4px; color:inherit;text-decoration:none;"><a href = "planner1.php"><b>Package Selected Users</b></a></button>
  <button style="padding: 15px 32px;  background-color:#ffb366; border-radius: 4px;  text-decoration:none;"><a href = "planner2.html"><b>Planning Partners</b></a></button>
  <button style="padding: 15px 32px; background-color:#ffb366; border-radius: 4px;  text-decoration:none;"><a href = "planner3.php"><b>Suggestions</b></a></button>
  <button style="padding: 15px 32px;  background-color:#ffb366; border-radius: 4px;  text-decoration:none;"><a href = "planner4.html"><b>Contacted Users</b></a></button>
  <br>
    </center>
  <button style = "margin-left:1200px; padding:8px 20px; background-color:grey; border-radius: 7px;  text-decoration:none;"><a href = "plannerlogin.html"><b>Log Out</b></a></button>
  <br>
  <h2 align = "center" style= "color:#000066; font-family:Verdana;">Contacted Users</h2>
	<br>
  <br>
  
  <?php

  $sql = "SELECT Name,Email,ContactNumber,InterestedIn FROM contactedusers";
 $result = mysqli_query($conn, $sql);
 echo '<table align = "center" border = "3" width = "70%" style = "color:black; text-align:center; background-color:#ffff66;">';
  echo '<tr style = "background-color:#ffe366;">
  <th align = "center"> <b> User Name</b> </th>
  <th align = "center"> <b> Email</b> </th>
  <th align = "center"> <b> Contact Number</b> </th>
  <th align = "center"> <b> Inerested In</b> </th>
   </tr>';
   if ($result-> num_rows > 0) {
    // output data of each row
    while($row = $result -> fetch_assoc()) {
        echo "<tr><td>" . $row["Name"]. "</td><td>".$row["Email"]. "</td><td>". $row["ContactNumber"]. "</td><td>". $row["InterestedIn"]. "</td></tr>" ;
    }
 }else {
    echo "0 results";
}
echo '</table>';

    ?><br><br>
    <form method = "post" action = "deletecontactedusers.php">
    <center>
    <h4>Enter Number to Delete: <input type = "number" style= "background-color:#ffddcc;" name = "delete" value = "Enter Number">
   <input type = "submit" value = "Delete" name = "subd1" style= "background-color:#b2ff66;"></h4>
   </center>
   </form>
   </div>
   <br>
   <br>
   <br>
 
  <!--footer start-->
 <hr>
<link rel="stylesheet" href="../styles/foota.css">
<div class ="foota">
<center>
<br>
<div class="div-transbox">
<br>
<h3 a href="contact.html"> Contact Us </h3>
<p> +94 813 3454 <br>
mangalyaSL@gmail.com <br>
<h3 a href=""> About Us </h3><br>

<a href = "https://www.facebook.com" >
    <img class = "social" src="../images/fb.jpg"></a>
<a href = "https://www.twitter.com" >
    <img class = "social" src="../images/twitter.jpg"></a>
<a href = "https://www.youtube.com" > 
<img class = "social" src="../images/youtube.jpg"></a><br>

<h3 a href=""> Privacy Policy </h3>
<p class = "p2">copyright ? mangalya.com. All rights reserved.</p>
<img src="">
</div>
</center>
</div>

  </body>
 </html>
