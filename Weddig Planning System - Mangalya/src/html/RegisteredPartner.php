<?php
	require 'config.php';	
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Mangalya </title>
 <link rel = "stylesheet" href = "../styles/styles.css">
 <link rel = "stylesheet" href = "../styles/header.css">
 <script src="../js/galllery.js"></script> 
 </head>
 <body> 

 <table class="tableTop" bgcolor="#ccddff">
    <tr>
        <th> <img src = "../images/logonew.png" class ="logo"> </th>
       <th class="tytle" style="font-size: 40px; padding: 1px;"> Make Your Wedding Perfect..! </th>
    </tr>
 </table>

 <hr>

<ul class="ul-menu">
    <li class="li-menu"> <a href = "home.html" > Home </a></li>
    <li class="li-menu"> <a href = "plan-weddding.html" > Plan Wedding </a></li>
    <li class="li-menu"> <a href = "Gallery.html"> Gallery </a></li>
    <li class="li-menu"> <a  href = "Testimonials.html"> Testimonials </a></li>
    <li class="li-menu"> <a  href = "ideas.html" > Ideas </a></li>
    <li class="li-menu"> <a href = "Be a Partner 1.html" > Be a Partner </a></li>
    <li class="li-menu"> <a href = "rate.php" > Rate </a></li>
    <li class="li-menu"> <a href = "Contact us.html"> Contact Us </a></li>
</ul>

 <div class="search-box">
    <input class="search-txt" type="text" name="" placeholder="Search"></div>

	<div class = "i">

	<hr>
	<br>
	<br>
	<br>
	
<?php

	$sql = "SELECT Name, ContactNumber, Email, Address,Cost FROM registeredpartner";
	$result = mysqli_query($conn, $sql);
			
   if ($result-> num_rows > 0) {
    // output data of each row
    while($row = $result -> fetch_assoc()) {
		
		echo "<b>Name: </b>". $row["Name"]."<br>";
		echo "<b>Contact Number: </b>". $row["ContactNumber"]."<br>";
		echo "<b>Email: </b>". $row["Email"]."<br>";
		echo "<b>Address: </b>". $row["Address"]."<br>";
		echo "<b>Cost: </b>".$row["Cost"]."<br>";
		echo "<br>";
       }
 }else {
    echo "0 results";
}
echo '</table>';
?>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<hr>
	
	<form method = "post" action = "RegisteredPartnerDelete.php">
    <center>
    <h4>Enter Email to Delete: <input type = "NIC" style= "background-color:#ffddcc;" name = "delete" value = "">
   <input type = "submit" value = "Delete" name = "subd" style= "background-color:#b2ff66;"></h4>
   </center>
   </form>
   
	<br>
	<br>
	
	<h4 align="right">Leave Page?<button type = "button" id= "1" onclick = "login('1')" style="background: linear-gradient(to right,  #ffff99 0%, #ffcc00 100%);"><a href = "Be a Partner 1.html"><b> Logout </b> </a></button> </h4>
	<br>

<!--footer start-->
 <!--footer start-->
 <hr>
 </div>
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
<p class = "p2">copyright � mangalya.com. All rights reserved.</p>
<img src="">
</div>
</center>
</div>

  </body>
 </html>





















