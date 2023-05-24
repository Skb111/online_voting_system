<?php

	$conn = new mysqli('localhost', 'root', '', 'vote');
	session_start();
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	