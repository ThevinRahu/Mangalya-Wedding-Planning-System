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
 <style>
 body{
 background-color:#fff2e6;
 }
 </style>
 </head>
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
 <button style="padding: 15px 32px; background-color:#ffb366; border-radius: 4px; text-decoration:none;"><a href = "planner1.php"><b>Package Selected Users</b></a></button>
  <button style="padding: 15px 32px;  background-color:#ffb366; border-radius: 4px;  text-decoration:none;"><a href = "planner2.php"><b>Planning Partners</b></a></button>
  <button style="padding: 15px 32px; background-color:#ffb366; border-radius: 4px;  text-decoration:none;"><a href = "planner3.php"><b>Suggestions</b></a></button>
  <button style="padding: 15px 32px;  background-color:#ffb366; border-radius: 4px;  text-decoration:none;"><a href = "planner4.php"><b>Contacted Users</b></a></button>
   <br>
    </center>
  <button style = "margin-left:1200px; padding:8px 20px; background-color:grey; border-radius: 7px;  text-decoration:none;"><a href = "plannerlogin.html"><b>Log Out</b></a></button>
  <br>
  <h2 align = "center" style= "color:#000066; font-family:Verdana;">Planning Partners</h2>
	<br>
  <br>
  <div>
   <table align = "center" border = "3" width = "70%" style = "color:black; background-color:#ffff66;">
   <tr><th align = "center"> <b> Name</b> </th>
   <th align = "center"> <b> National ID/Register ID</b> </th>
  <th align = "center"> <b> Selected Partner Type</b> </th>
  <th align = "center"> <b> Email</b> </th>
  <th align = "center"> <b> Additional Details</b> </th>
  <th align = "center"> <b> Status</b> </th>
   </tr>
   <tr> <td align = "center" style = "font-size:20px"><i> Quinton De Kock</i> </td>
   <td align = "center" style = "font-size:18px"><i> 12</i> </td>
   <td align = "center" style = "font-size:18px"><i> Vehicle</i> </td>
   <td align = "center" style = "font-size:18px"><i> qdk@gmail.com</i> </td>
   <td align = "left"  style = "font-size:18px"> <ol><li> Degree</li> <li> Experience</li> <li> Quality</li></ol></td>
   <td align = "center" style = "font-size:18px"><center>Pending<br><button>Update</button></center> </td>
   </tr>
   <tr> <td align = "center" style = "font-size:20px"><i> Suryakumar Yadav</i> </td>
   <td align = "center" style = "font-size:18px"><i> 77</i> </td>
   <td align = "center" style = "font-size:18px"><i> Costumes</i> </td>
   <td align = "center" style = "font-size:18px"><i>surya@gmail.com</i> </td>
   <td align = "left"  style = "font-size:18px"> <ol><li> Variation </li> <li> Good Quality </li> <li> Efficient</li></ol></td>
   <td align = "center" style = "font-size:18px"><center>Pending<br><button>Update</button></td>
   </tr>
   <tr> <td align = "center" style = "font-size:20px"><i> Trent Boult</i> </td>
   <td align = "center" style = "font-size:18px"><i> 18</i> </td>
   <td align = "center" style = "font-size:18px"><i> Hotels</i> </td>
   <td align = "center" style = "font-size:18px"><i> tb@gmail.com</i> </td>
   <td align = "left"  style = "font-size:18px"> <ol><li> Decoration </li> <li> Good Buffet </li> <li> Quality</li></ol></td>
   <td align = "center" style = "font-size:18px"><center>Pending<br><button>Update</button> </td>
   </tr>
  
   </table>
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
