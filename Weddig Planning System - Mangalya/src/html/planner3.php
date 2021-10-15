<?php
require 'config.php';
?>
<?php
session_start();
if(isset($_SESSION["userName"])) { 
}
else {
	echo'<script> alert("Not Logged In!"); </script> ';
	echo'<script> window.location="plannerlogin.html"; </script> ';
}
?>
<!DOCTYPE html>
<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title> Mangalya </title>
 <link rel = "stylesheet" href = "../styles/styled.css">
 <link rel = "stylesheet" href = "../styles/header.css">
 <script src="js/script.js"></script>
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
    <form method = "post" action = "out.php">
    <b>
  <input type = "submit" value = "Log Out" name = "out" style = "margin-left:1200px; padding:8px 20px; background-color:grey; border-radius: 7px;  text-decoration:none;">
  </b>
  </form>
  <br>
  <h2 align = "center" style= "color:#000066; font-family:Verdana;">Suggestions</h2>
	<br>
  <br>
  <div>
   <?php

  $sql = "SELECT No,Rating,Suggestion FROM rating";
 $result = mysqli_query($conn, $sql);
 echo '<table align = "center" border = "3" width = "70%" style = "color:black; text-align:center; background-color:#ffff66;">';
  echo '<tr style = "background-color:#ffe366;"><th align = "center"> <b> Number </b> </th>
  <th align = "center"> <b> Rating </b> </th>
   <th align = "center"> <b> Suggestion</b> </th>
   </tr>';
   if ($result-> num_rows > 0) {
    // output data of each row
    while($row = $result -> fetch_assoc()) {
        echo "<tr><td>" . $row["No"]. "</td><td>".$row["Rating"]. "</td><td>". $row["Suggestion"]. "</td></tr>";
    }
 }else {
    echo "0 results";
}
echo '</table>';


   
  
   
    ?><br><br>
    <form method = "post" action = "planner3d.php">
    <center>
    <h4>Enter Number to Delete: <input type = "number" style= "background-color:#ffddcc;" name = "delete" placeholder = "Enter Number">
   <input type = "submit" value = "Delete" name = "subd" style= "background-color:#b2ff66;"></h4>
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
