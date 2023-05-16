<?php
	include("admin/dbcon.php");
	
	session_destroy();
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[hdb_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[hdg_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[lb_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[lg_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[ab_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[ag_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[pb_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[pg_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[sb_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[sg_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[fb_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[fg_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[hb_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[hg_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[lib_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[lig_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[spb_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[spg_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[tk_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[jn_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[fm_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[fc_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[ht_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("UPDATE `voters` SET `status` = 'Voted' WHERE `voters_id` = '$_SESSION[voters_id]'") or die($conn->error);
		header("location:index.php");
		
?> 