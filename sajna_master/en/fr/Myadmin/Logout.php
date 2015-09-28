<?php
require_once("../lib/dbconnect.php");
 if(!isset($_SESSION['aid'])){
 	header("location: Login.php");
	exit;
 }
 
 session_destroy();
 header("location: Login.php");
 exit;
?>