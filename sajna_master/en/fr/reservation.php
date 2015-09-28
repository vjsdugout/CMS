<?php
require_once('lib/dbconnect.php');
if(isset($_POST['submit']))
{
$dob=$_POST['dat']."-".$_POST['mon']."-".$_POST['yer'];
$name=$_POST['uname'];
$mob=$_POST['phno'];
$adds=$_POST['address'];
$zpc=$_POST['zip'];
$mail=$_POST['email'];
$events=$_POST['event'];
$visit=$_POST['r1'];
$np=$_POST['np'];
$in="INSERT INTO resevationlist(Name,ContactNo,Address,Zipcode,EmailId,Events,Visit,Date,Nofp)VALUES('$name','$mob','$adds','$zpc','$mail','$events','$visit','$dob','$np')";
mysql_query($in) or die(mysql_error());
}
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
<style type="text/css">
.f
{
color:#FFFFFF;
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
			<li><a href="Index.php">Sajna</a></li>
			<li><a href="information.php">Information</a></li>
			<li><a href="menulist.php">Menu list</a></li>
			<li><a href="barmenu.php">Bar Menu</a></li>
			<li><a href="reservation.php">Reservation</a></li>
			<li><a href="photogallery.php">photo Gallery</a></li>
			<li><a href="ourbranch.php">Our Branch</a></li>
			<li><a href="reviews.php">Reviews</a></li>
			<li><a href="faq.php">FAQ</a></li>
			<li><a href="Contactus.php">ContactUs</a></li>
			</ul>
		</div>
	</div>
	<div id="content_wrap">
	<div id="lft_nav">
		<h3>RÉSERVATION</h3>
		
		<table width="100%" cellpadding="5" cellspacing="3" border="0">
		<form name="Reservation" method="post" action="" />
		<tr class="f">
		<td width="30%">NOM:</td>
		<td width="70%"><input type="text" name="uname" value=""/></td>
		</tr>
		<tr class="f">
		<td>Numéro de telephone:</td>
		<td><input type="text" name="phno" value="" /></td>
		</tr>
		<tr class="f">
		<td>Adresse:</td>
		<td><textarea name="address" id="address" cols="30" rows="4" value=""></textarea></td>
		</tr>
		<tr class="f">
		<td>Code postal:</td>
		<td><input type="text" name="zip" value="" /></td>
		</tr>
		<tr class="f">
		<td>L'adresse de courrier électronique :</td>
		<td><input type="text" name="email"  value=""/></td>
		</tr>
		<tr class="f">
		<td>Événement :</td>
		<td> <select name="event" id="event">
		  <option>Select</option>
              <option  value="Lunch">Lunch</option>
              <option  value="Dinner">Dinner</option>
              <option  value="Anniversary">Anniversary</option>
              <option  value="Birthday">Birthday</option>
              <option  value="Other">Other Special Occasion</option>
            </select></td>
		</tr>
		<tr class="f">
		<td>Est cette votre visite pour la première fois :</td>
		<td><input type="radio" name="r1" value="Yes"/>OUI
		<input type="radio" name="r1" value="No"/> NON</td>
		</tr>
		<tr class="f">
    <td>Date :</td>
    <td>  <select name="dat" >
    <option value="">DATE</option>
    <?php
	for($i=1;$i<=31;$i++)
	{
		?>
    <option value="<?php echo $i;?>"><?php echo $i;?></option>
       <?php
	}?>
    </select>
    <select name="mon">
    <option value="">MONTH</option>
    <?php
	for($i=1;$i<=12;$i++)
	{
		?>
    <option value="<?php echo $i;?>"><?php echo $i;?></option>
    <?php
	}?>
   </select>
   <select name="yer" >
   <option value="">YEAR</option>
   <?php
   for($i=1980;$i<=2020;$i++)
   {
	   ?>
   <option value="<?php echo $i;?>"><?php echo $i;?></option>
   <?php
   }?>
   </select>
   </select>
  </td>
   </tr>
   <tr class="f">
   <td>Nombre des gens:</td>
   <td><input type="text" name="np"/></td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td colspan="6" align="center"><input type="submit" name="submit" value="Soumettre"/><input type="reset" name="reset" value="Reset"/></td>
   </tr>
		</form>
		</table></div>
	  <div id="rgt_nav" border="1"><br/>
	 
	  
	  </div>
	</div>
	<div id="footer_wrap">
		<div id="foot_main">
			<div id="lft_ftr">&copy; Right Reserved to <b>Sajna Restuarent</b></div>
			<div id="rgt_ftr"><a href="index.php">Home</a> | <a href="information.php">Information</a> | <a href="ourmenu.php">Our Menu</a> | <a href="barmenu.php">Bar Menu</a> | <a href="reservation.php">Reservation</a> | <a href="photogallery.php">Photo Gallery</a> | <a href="ourbranch.php">Our Branch</a> | <a href="review.php">Reviews</a> | <a href="faq.php">FAQ</a> | <a href="contactus.php">ContactUs</a></div>
		</div>
	</div>
	
	
</body>
</html>