<?php 
	include ('session.php');						
	$conn->query("UPDATE voters SET account = 'Inactive'")or die($conn->error);
	echo "<script> window.location='voters.php' </script>";
?>			