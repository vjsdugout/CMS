<?php
	require_once("../lib/dbconnect.php");
	$catid = $_GET['catid'];
	$del = "DELETE FROM category WHERE Id=$catid";
	mysql_query($del)or die(mysql_error());
	header("location: Categories.php?ack=Category has been deleted successfully");
?>