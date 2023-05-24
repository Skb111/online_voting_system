<?php 
	include ('session.php');						
	$conn->query("UPDATE t_voters SET account = 'Inactive'")or die($conn->error);
	echo "<script> window.location='teachers_voters.php' </script>";
?>			