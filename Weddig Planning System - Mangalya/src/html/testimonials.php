<?php

	require 'config.php';
?>

<?php
		
		$names = $_POST["names"];
		$content = $_POST["content"];
		
		$sql = "INSERT INTO testimonials(Names ,Content)
		VALUES ('$names', '$content')";
		
		if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
		echo 'alert("Succesfully Recorded!")';
		echo '</script>';
		echo'<script> window.location="Testimonials.html"; </script> ';
		} else {
	echo "Error: ". $conn->error;
}
$conn->close();
?>		