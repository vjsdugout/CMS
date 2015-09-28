<?php
	require_once("../lib/dbconnect.php");
	$catid = $_GET['catid'];
	$status = $_GET['status'];
	$up = "UPDATE bm_category SET cStatus=$status WHERE Id=$catid";
	mysql_query($up)or die(mysql_error());
	header("location: Bm_Category.php?ack=Category status has been changed successfully");
?>