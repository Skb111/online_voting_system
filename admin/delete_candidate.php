<?php
    include ('session.php');
	// require_once 'dbcon.php';
	$candidate_id=$_GET['candidate_id'];
	$conn->query("delete FROM candidate WHERE candidate_id='$candidate_id'") or die($conn->error);
	header('location:candidate.php');
?>