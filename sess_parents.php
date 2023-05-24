<?php
	require 'admin/dbcon.php';
	 
	
	if(!isset($_SESSION['voters_id'])){
		header("location:login_parents.php");
	}else{
		$session_id=$_SESSION['voters_id'];
		$user_query = $conn->query("SELECT * FROM p_voters WHERE voters_id = '$session_id'") or die(mysqli_errno());
		$user_row = $user_query->fetch_array();
		$user_username = $user_row['firstname']." ".$user_row['lastname'];
	}
?>