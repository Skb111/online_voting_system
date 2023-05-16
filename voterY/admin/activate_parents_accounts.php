<?php 
include ('session.php');					
	$conn->query("UPDATE p_voters SET account = 'Active', activated_to_vote = '1' ")or die($conn->error);
	echo "<script> window.location='parents_voters.php' </script>";
?>			