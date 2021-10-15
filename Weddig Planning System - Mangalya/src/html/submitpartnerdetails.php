<?php
	require 'config.php';
?>
<?php

$name = $_POST["firstname"].' '.$_POST["lastname"];
$number= $_POST["cnumber"];
$nic = $_POST["psw1"];
$email = $_POST["email1"];
$partneringcategory = $_POST["p1"];
$gender = $_POST["gender"];
$address = $_POST["address1"].' '.$_POST["address2"];
$details = $_POST["adress"];
$sql = "INSERT INTO PartnerDetails(Name,Gender,ContactNumber,Email,Address,NIC,PartneringCategory,MoreDetails)
VALUES('$name','$gender','$number','$email', '$address', '$nic','$partneringcategory','$details')";

if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("Succesfully Recorded!")';
echo '</script>';
  echo'<script> window.location="Be a Partner Payment.html"; </script> ';
} else {
  echo "Error: ". $conn->error;
}
$conn->close();
?>