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
    </center><form method = "post" action = "out.php">
    <b>
  <input type = "submit" value = "Log Out" name = "out" style = "margin-left:1200px; padding:8px 20px; background-color:grey; border-radius: 7px;  text-decoration:none;">
  </b>
  </form><br>
  <h2 align = "center" style= "color:#000066; font-family:Verdana;">Package Selected Users</h2>
	<br>
  <br>
   <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <center>
    <h4>Enter National ID to Search: <input type = "text" style= "background-color:#ffddcc;" name = "search" placeholder = "Enter ID">
   <input type = "submit" value = "Search" name = "subs"  style= "background-color:#b2ff66;"></h4>
   </form>
   <br>
   <?php
   if(isset($_POST["subs"])){
   	
$search = $_POST["search"];

if($_POST["search"] != NULL){
	$sql = "SELECT * FROM packageusers WHERE NIC LIKE '%$search%'";
	$result = mysqli_query($conn, $sql);
	echo '<table align = "center" border = "3" width = "70%" style = "color:black; background-color:#ffa366;">';
  echo '<tr><th align = "center"> <b> Name</b> </th>
   <th align = "center"> <b> National ID</b> </th>
  <th align = "center"> <b> Selected Package</b> </th>
  <th align = "center"> <b> Email</b> </th>
  <th align = "center"> <b> Expected Crowd</b> </th>
  <th align = "center"> <b> Status</b> </th>
   </tr>';
   if ($result-> num_rows > 0) {
    // output data of each row
    while($row = $result -> fetch_assoc()) {
        echo "<tr><td>" . $row["Name"]. "</td><td>". $row["NIC"]. "</td><td>". $row["Package"]. "</td><td>". $row["Email"]."</td><td>". $row["ExpectedCrowd"]."</td><td>". $row["Status"]."</td></tr>";
    }
 }else {
    echo "<h4>0 Results</h4>";
}
echo '</table>';
}
}
?>
  <div>
<br>
<?php

  $sql = "SELECT Name,NIC,Email,Package,ExpectedCrowd,WeddingDate,Status FROM packageusers";
 $result = mysqli_query($conn, $sql);
 echo '<table align = "center" border = "3" width = "70%" style = "color:black;  text-align:center; background-color:#ffff66;">';
  echo '<tr style = "background-color:#ffe366;"><th align = "center"> <b> Name</b> </th>
   <th align = "center"> <b> National ID</b> </th>
  <th align = "center"> <b> Selected Package</b> </th>
  <th align = "center"> <b> Email</b> </th>
  <th align = "center"> <b> Expected Crowd</b> </th>
  <th align = "center"> <b> Status</b> </th>
   </tr>';
   if ($result-> num_rows > 0) {
    // output data of each row
    while($row = $result -> fetch_assoc()) {
        echo "<tr><td>" . $row["Name"]. "</td><td>". $row["NIC"]. "</td><td>". $row["Package"]. "</td><td>". $row["Email"]."</td><td>". $row["ExpectedCrowd"]."</td><td>". $row["Status"]."</td></tr>";
    }
 }else {
    echo "0 results";
}
echo '</table>';

$conn->close();
   
  
   
    ?>
   </div>
   
   <br>
    <form method = "post" action = "planner1su.php">
    <h4>Enter National ID to Update Status: <input type = "text" style= "background-color:#ffddcc;" name = "update" placeholder = "Enter ID">
    <select name="stat" style= "background-color:#ffddcc;">
  <option value="Pending">Pending</option>
  <option value="Completed">Completed</option>
  </select>
   <input type = "submit" value = "Update" name = "subu" style= "background-color:#b2ff66;"></h4>
	</center>  
   </form>
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
