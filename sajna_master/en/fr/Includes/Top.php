<?php
require_once('lib/dbconnect.php');
?>
<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>

<script type="text/javascript" charset="utf-8" src="mootools-core-1.3-full-nocompat.js"></script>
	<script type="text/javascript" charset="utf-8" src="mootools-more.js"></script>
	<script type="text/javascript" charset="utf-8" src="../Source/floom.js"></script>



<style type="text/css">
#content_wrap #lft_nav strong {
	color: #999;
}
</style>
</head>
<body>
	<div id="head_main">
		<div id="head_wrap" align="center">
			<div id="logo_main">
		<img src="../images/logo.png"/>
			</div>
			<div id="follows"><b>Follow On Us</b><br/><br/ >
			<a href="#"><img src="../images/fb_icon.jpg"></a>&nbsp;&nbsp;
			<a href="#"><img src="../images/tt	_icon.jpg"></a>
			</div>
		</div>
	</div>
	
	<div id="btn_wrp">
		<div id="btn_main">
			<ul>
			<li><a href="./index.php">Sajna</a></li>
			<li><a href="./information.php">Information</a></li>
			<li><a href="./menulist.php">Menu list</a></li>
			<li><a href="./barmenu.php">Bar Menu</a></li>
			<li><a href="./reservation.php">Reservation</a></li>
			<li><a href="./photogallery.php">photo Gallery</a></li>
			<li><a href="./ourbranch.php">Our Branch</a></li>
			<li><a href="./reviews.php">Reviews</a></li>
			<li><a href="./faq.php">FAQ</a></li>
			<li><a href="./Contactus.php">ContactUs</a></li>
			</ul>
		</div>
	</div>
	
	
	

	
	<div id="content_wrap">
		<table width="880" border="0" cellspacing="0">
    <td width="216" rowspan="3" class="men_btn">
		  <h3>Bar Menu List</h3>
		  <ul>
	<?php
		$sel_cat = "SELECT * FROM bm_category WHERE cStatus=1 ORDER BY Name";
		$res_cat = mysql_query($sel_cat);
		while($rec = mysql_fetch_assoc($res_cat)){
			echo "<li><a href='barmenulist1.php?cid=$rec[Id]'>$rec[Name]</a></li>";	
		}
	?>
	</ul>
				
	</td>			
						 
			
				