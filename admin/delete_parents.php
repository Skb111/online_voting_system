<?php
	include ('session.php');
	$parents_id=$_GET['parents_id'];
	$conn->query("DELETE FROM parents WHERE parents_id='$parents_id'") or die($conn->error);
	header('location:parents.php');
?>