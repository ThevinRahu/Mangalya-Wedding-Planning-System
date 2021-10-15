<?php
require 'config.php';
?>
<?php
$delete = $_POST["delete"];
if($delete === "" ){
	echo '<script language="javascript">';
echo 'alert("No ID Entered")';
echo '</script>';
echo'<script> window.location="planner3.php"; </script> ';
}else{

$sql = "DELETE FROM rating WHERE No=$delete";
if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("Succesfully Deleted!")';
echo '</script>';
  echo'<script> window.location="planner3.php"; </script> ';
}
}
$conn->close();

?>