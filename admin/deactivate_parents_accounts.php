<?php 
	include ('session.php');						
	$conn->query("UPDATE p_voters SET account = 'Inactive'")or die($conn->error);
	echo "<script> window.location='parents_voters.php' </script>";
?>			