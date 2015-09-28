<?php
require_once("../lib/dbconnect.php");
 if(!isset($_SESSION[aid])){
 	header("location: Login.php");
	exit;
 }
$id=$_GET['id'];
$del="delete from contlist where Id=$id";
mysql_query($del);
header("location:Contact_list.php?ack=Delete sucessfully");
?>