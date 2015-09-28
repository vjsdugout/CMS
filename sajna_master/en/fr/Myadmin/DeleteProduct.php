<?php
	require_once("../lib/dbconnect.php");
	$pid = $_GET['pid'];
	$cid = $_GET['cid'];
	$del = "DELETE FROM products WHERE Id=$pid";
	mysql_query($del)or die(mysql_error());
	header("location: Products.php?cid=$cid&ack=Product has been deleted successfully");
?>