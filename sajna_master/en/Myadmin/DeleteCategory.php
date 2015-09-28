<?php
	require_once("../lib/dbconnect.php");
	 if(!isset($_SESSION[aid])){
 	header("location: Login.php");
	exit;
 }
	$catid = $_GET['catid'];
	$del = "DELETE FROM category WHERE Id=$catid";
	mysql_query($del)or die(mysql_error());
	header("location: Categories.php?ack=Category has been deleted successfully");
?>