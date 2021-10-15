<?php
require 'config.php';

?>
<?php
setcookie("Rate", "rate", time() + (86400 * 30), '/');
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Mangalya </title>
 <link rel = "stylesheet" href = "../styles/styled.css">
 <link rel = "stylesheet" href = "../styles/header.css">
 <script src="../js/script4.js"></script>
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
    <li class="li-menu"> <a  href ="Testimonials.html"> Testimonials </a></li>
    <li class="li-menu"> <a  href = "ideas.html"> Ideas </a></li>
    <li class="li-menu"> <a href = "Be a Partner 1.html"  > Be a Partner </a></li>
    <li class="li-menu"> <a href = "rate.php" > Rate </a></li>
    <li class="li-menu"> <a href = "Contact us.html"> Contact Us </a></li>
</ul>

 <div class="search-box">
    <input class="search-txt" type="text" name="" placeholder="Search"></div>

  
  <div class = "i"><hr>
  <br>
  <br>

 <?php
if(!isset($_COOKIE["Rate"])) {
  echo '<script>alert("Cookie is not set!");</script>';
} else {
  echo '<script>alert("Cookie is set!");</script>';
}
?>


  <br>
<div class="bg">
  <br>
  <br>
<center>
<span class="heading"><b>User Rating</b></span><img src="../images/img36.png" class = "rat">

<br>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<?php

  $sql = "SELECT COUNT(Rating) as 'Countt' FROM rating";
 $result = mysqli_query($conn, $sql);
 while($row = $result->fetch_assoc()){
 	echo '<p class = "pa3">Average 4.1 Stars based on '.($row["Countt"]+254).' reviews</p>';} ?>
<hr style="border:2px solid #6666ff">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>

  <div class="side right">
    <div>  <?php

  $sql = "SELECT COUNT(Rating) as 'Count' FROM rating WHERE Rating = 5";
 $result = mysqli_query($conn, $sql);
 while($row = $result->fetch_assoc()){
 	echo $row["Count"] +150;} ?></div>
  </div>
  
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php

  $sql = "SELECT COUNT(Rating) as 'Count' FROM rating WHERE Rating = 4";
 $result = mysqli_query($conn, $sql);
 while($row = $result->fetch_assoc()){
 	echo $row["Count"] +63;} ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php

  $sql = "SELECT COUNT(Rating) as 'Count' FROM rating WHERE Rating = 3";
 $result = mysqli_query($conn, $sql);
 while($row = $result->fetch_assoc()){
 	echo $row["Count"] +15;} ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php

  $sql = "SELECT COUNT(Rating) as 'Count' FROM rating WHERE Rating = 2";
 $result = mysqli_query($conn, $sql);
 while($row = $result->fetch_assoc()){
 	echo $row["Count"] +6;} ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php

  $sql = "SELECT COUNT(Rating) as 'Count' FROM rating WHERE Rating = 1";
 $result = mysqli_query($conn, $sql);
 while($row = $result->fetch_assoc()){
 	echo $row["Count"] +20;} ?></div>
  </div>
</div>
</center>
<br>
<br>
<br>
</div>
<br>
<br>
<br>
<br>
  <fieldset style = "border-radius:8px;">
  <h3>Why your rating is important to us......</h3>
  <p class= "pa2"><b>Your rating will help us to maintain and upgrade our system to serve peoiple in a more efficient way. To add more package requiremnets and to make the system more efficient with more planners with a faster way can be done with getting an idea with your ratings. You have the opportunity towrite suggestions  as well if you find something lacking in us.</b></p>
  </fieldset>
  <br>
  <br>
  <br>
  <br>
  <div class="bg">
  <br>
  <h1 style="margin-left:260px;">Rate Us:</h1>
  <center>
  <form class="rating">
  <label>
    <input type="radio" name="stars" onclick = "onrate(1)" value="1" />
    <span class="icon" style="font-size:80px">*</span>
  </label>
  <label>
    <input type="radio" name="stars" onclick = "onrate(2)" value="2" />
    <span class="icon" style="font-size:80px">*</span>
    <span class="icon" style="font-size:80px">*</span>
  </label>
  <label>
    <input type="radio" name="stars" onclick = "onrate(3)" value="3" />
    <span class="icon" style="font-size:80px">*</span>
    <span class="icon" style="font-size:80px">*</span>
    <span class="icon" style="font-size:80px">*</span>
  </label>
  <label>
    <input type="radio" name="stars" onclick = "onrate(4)" value="4" />
    <span class="icon" style="font-size:80px">*</span>
    <span class="icon" style="font-size:80px">*</span>
    <span class="icon" style="font-size:80px">*</span>
    <span class="icon" style="font-size:80px">*</span>
  </label>
  <label>
    <input type="radio" name="stars" onclick = "onrate(5)" value="5" />
    <span class="icon" style="font-size:80px">*</span>
    <span class="icon" style="font-size:80px">*</span>
    <span class="icon" style="font-size:80px">*</span>
    <span class="icon" style="font-size:80px">*</span>
    <span class="icon" style="font-size:80px">*</span>
  </label>
</form>

<br>
<br>
<form method = "post" action = "ratingsubmit.php">
 <label><h2>Give Suggestions for us to Improve: </h2></label><br>
 <label for="crowd">Your Rating</label>
<select name="rat" id="rat">
  <option value="1">1 Star</option>
  <option value="2">2 Stars</option>
  <option value="3">3 Stars</option>
  <option value="4">4 Stars</option>
  <option value="5">5 Stars</option>
</select><br><br>
<textarea id="adress" name="adress" rows="8" cols="85">
  </textarea> <br><br>
  <input type = "submit" value = "Submit" class= "submit" onclick = "alert('Suggestion Recorded! Thank You!')";>
  </form>
<br>
<br>
</div>
</center>
 </center>
 <br>
 <br>
 <br>
 <br>
 <br>

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
