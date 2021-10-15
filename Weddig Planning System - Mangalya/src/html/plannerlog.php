<?php
session_start();

if(isset($_POST["log"])){
if($_POST["un"]=="planner" && $_POST["pw"]=="plannerlogin")
{
	$_SESSION["userName"] = $_POST["un"];
}else{
	echo'<script> alert("Incorrect Login!"); </script> ';
	echo'<script> window.location="plannerlogin.html"; </script> ';
}
}
if(isset($_SESSION["userName"])) {
	echo'<script> window.location="planner1.php"; </script> '; 
}

?>