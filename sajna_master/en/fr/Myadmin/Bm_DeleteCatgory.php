<?php
	require_once("../lib/dbconnect.php");
	$catid = $_GET['catid'];
	$del = "DELETE FROM bm_category WHERE Id=$catid";
	mysql_query($del)or die(mysql_error());
	header("location: Bm_Category.php?ack=Category has been deleted successfully");
?>