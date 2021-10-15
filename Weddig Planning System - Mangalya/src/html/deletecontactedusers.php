<?php
require 'config.php';
?>
<?php
$delete = $_POST["delete"];

$sql = "DELETE FROM contactedusers WHERE ContactNumber = $delete";
if ($conn->query($sql) === TRUE) {
 echo'<script> window.location="planner4.php"; </script> ';
}
$conn->close();

?>