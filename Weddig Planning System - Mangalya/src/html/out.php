<?php
session_start();
if(isset($_POST["out"])) {
	session_destroy();
	echo'<script> alert("'.$_SESSION["userName"].' Logging Out..."); </script> ';
	echo'<script> window.location="plannerlogin.html"; </script> ';
}
else {
	echo'<script> window.location="planner1.php"; </script> ';
}
?>