<?php
	include("admin/dbcon.php");
	
	session_destroy();
		$conn->query("INSERT INTO `teachers_votes` VALUES('', '$_SESSION[hod_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `teachers_votes` VALUES('', '$_SESSION[exm_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `teachers_votes` VALUES('', '$_SESSION[cons_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `teachers_votes` VALUES('', '$_SESSION[msd_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `teachers_votes` VALUES('', '$_SESSION[dis_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `teachers_votes` VALUES('', '$_SESSION[dac_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `teachers_votes` VALUES('', '$_SESSION[spd_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `teachers_votes` VALUES('', '$_SESSION[hoc_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `teachers_votes` VALUES('', '$_SESSION[sg_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `teachers_votes` VALUES('', '$_SESSION[ht_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("UPDATE `t_voters` SET `status` = 'Voted' WHERE `voters_id` = '$_SESSION[voters_id]'") or die($conn->error);
		header("location:index.php");
		
?> 