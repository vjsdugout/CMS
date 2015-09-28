<?php
	require_once("../lib/dbconnect.php");
	$catid = $_GET['catid'];
	$status = $_GET['status'];
	$up = "UPDATE category SET cStatus=$status WHERE Id=$catid";
	mysql_query($up)or die(mysql_error());
	header("location: Categories.php?ack=Category status has been changed successfully");
?>