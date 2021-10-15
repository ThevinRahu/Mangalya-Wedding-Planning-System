<?php
require 'config.php';
?>
<?php
$update = $_POST["update"];
$status = $_POST["stat"];
if($update === "" ){
	echo '<script language="javascript">';
echo 'alert("No ID Entered")';
echo '</script>';
echo'<script> window.location="planner1.php"; </script> ';
}
$sql = "UPDATE packageusers SET Status='$status' WHERE NIC='$update'";
if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("Succesfully Updated!")';
echo '</script>';
  echo'<script> window.location="planner1.php"; </script> ';
}
$conn->close();
?>