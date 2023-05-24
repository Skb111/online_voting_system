<?php
	include ('session.php');
	$teachers_id=$_GET['teachers_id'];
	$conn->query("DELETE FROM teachers WHERE teachers_id='$teachers_id'") or die($conn->error);
	header('location:teachers.php');
?>