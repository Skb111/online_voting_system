<?php 
 include ('session.php');					
	$conn->query("UPDATE t_voters SET account = 'Active', activated_to_vote = '1' ")or die($conn->error);
	echo "<script> window.location='teachers_voters.php' </script>";
?>			