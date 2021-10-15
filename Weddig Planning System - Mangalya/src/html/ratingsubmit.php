<?php
require 'config.php';
?>
<?php
$rating = $_POST["rat"];
$sug = $_POST["adress"];
$sql = "INSERT INTO rating(Rating,Suggestion)
VALUES ('$rating','$sug')";
if ($conn->query($sql) === TRUE) {
echo '<script>alert("Succesfully Recorded!");</script>';
echo'<script> window.location="rate.php"; </script> ';
} else {
  echo "Error: ". $conn->error;
}
$conn->close();



?>