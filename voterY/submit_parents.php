<?php
	include("admin/dbcon.php");
	
	session_destroy();
		$conn->query("INSERT INTO `parents_votes` VALUES('', '$_SESSION[chm_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `parents_votes` VALUES('', '$_SESSION[vch_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `parents_votes` VALUES('', '$_SESSION[trs_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `parents_votes` VALUES('', '$_SESSION[sec_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `parents_votes` VALUES('', '$_SESSION[pro_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `parents_votes` VALUES('', '$_SESSION[evc_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `parents_votes` VALUES('', '$_SESSION[mmc_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `parents_votes` VALUES('', '$_SESSION[fnc_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `parents_votes` VALUES('', '$_SESSION[adc_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `parents_votes` VALUES('', '$_SESSION[tac_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("UPDATE `p_voters` SET `status` = 'Voted' WHERE `voters_id` = '$_SESSION[voters_id]'") or die($conn->error);
		header("location:index.php");
		
?> 