<?php

	require 'config.php';	
?>
<?php
$search = $_POST["uname"];

$sql = "SELECT * FROM registeredpartner WHERE Email LIKE '%$search%'";

$result = mysqli_query($conn, $sql);
if ($result-> num_rows > 0) {
     echo'<script> window.location="RegisteredPartner.php"; </script> ';
 }else {
     echo'<script> window.location="Login.php"; </script> ';
}

?>