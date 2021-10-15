<?php
require 'config.php';
?>
<?php
$delete = $_POST["delete"];

$sql = "DELETE FROM registeredpartner WHERE Email LIKE '%$delete%'";
if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("Succesfully Deleted!")';
echo '</script>';
  echo'<script> window.location="RegisteredPartner.php"; </script> ';
}
$conn->close();

?>