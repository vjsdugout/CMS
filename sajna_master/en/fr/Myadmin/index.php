<?php
require_once("../lib/dbconnect.php");
 if(!isset($_SESSION['aid'])){
 	header("location: Login.php");
	exit;
 }
 include_once("Includes/Top.php");
?>
<h2 align='center'>Welcome to Adminpanel</h2>
<?php
  include_once("Includes/Bottom.php");
?>
