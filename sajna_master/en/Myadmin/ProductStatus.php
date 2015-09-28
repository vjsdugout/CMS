<?php
	require_once("../lib/dbconnect.php");
	 if(!isset($_SESSION[aid])){
 	header("location: Login.php");
	exit;
 }
	$cid = $_GET['cid'];
	$pid = $_GET['pid'];
	$status = $_GET['status'];
	$up = "UPDATE products SET pStatus=$status WHERE Id=$pid";
	mysql_query($up)or die(mysql_error());
	header("location: Products.php?cid=$cid&ack=Product status has been changed successfully");
?>