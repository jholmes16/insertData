<?php
	include_once('db.php');
	
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	
	$sql = "INSERT INTO user (first_name,last_name) VALUES ('$fname','$lname')";
	
	mysql_query($sql);
	
?>