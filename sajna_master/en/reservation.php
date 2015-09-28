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
$events=$_POST['events'];
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
<script type="text/javascript">
function validateForm(f)
	{
	n = f.uname.value;
	m = f.phno.value;
	a = f.address.value;
	z = f.zip.value;
	e = f.email.value;
	ev = f.events.selectedIndex;
	vis = f.vis.selectedIndex;
	np = f.np.value;
	//ev = f.events.value;
	//vis = f.r1.value;
	//np = f.np.value;
	
	error = '';
	n_pat = /^[a-zA-Z\s]{3,}$/i;
	
  if(!n_pat.test(n)){
		error += "Invalid Name \n";
	}
	m_pat = /^[6-9][0-9]{9}$/;
	if(!m_pat.test(m)){
		error += "Invalid Contact no \n";
	}
	
	if(a ==''){
		error += "Enter Address \n";
	}
	if(z ==''){
		error += "Enter Zipcode \n";
	}
	e_pat=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	
	if(!e_pat.test(e)){
		error += "Invalid EmailId \n";
	}
	if(ev == 0 )
	{
	error += "please select event \n";
	}
	if(vis == 0)
	{
	error += "please select visit \n";
	}
	
	if(np == ''){
		error += "Enter no of people \n";
	}
	if(error == '')
	{
	return true;
	}
	else
	{
	alert(error);
	return false;
	}
	}
	</script>
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
		<h3>Reservation</h3>
		
		<table width="100%" cellpadding="5" cellspacing="3" border="0">
		<form name="Reservation" method="post" action="" onsubmit='javascript: return validateForm(this)'/>
		<tr class="f">
		<td width="30%">Name:</td>
		<td width="70%"><input type="text" name="uname" value=""/></td>
		</tr>
		<tr class="f">
		<td>Phone number:</td>
		<td><input type="text" name="phno" value="" /></td>
		</tr>
		<tr class="f">
		<td>Address:</td>
		<td><textarea name="address" id="address" cols="30" rows="4" value=""></textarea></td>
		</tr>
		<tr class="f">
		<td>Zip code :</td>
		<td><input type="text" name="zip" value="" /></td>
		</tr>
		<tr class="f">
		<td>Email address :</td>
		<td><input type="text" name="email"  value=""/></td>
		</tr>
		<tr class="f">
		<td>Events:</td>
		<td> <select name="events" id="events">
		  <option>Select</option>
              <option  value="Lunch">Lunch</option>
              <option  value="Dinner">Dinner</option>
              <option  value="Anniversary">Anniversary</option>
              <option  value="Birthday">Birthday</option>
              <option  value="Other">Other Special Occasion</option>
            </select></td>
		</tr>
		<tr class="f">
		<td>Is this your visit for the first time :</td>
		<td><select name='vis'>
		<option value="">Select</option>
		<option value="Yes">Yes</option>
		<option value="No">No</option>
		</select></td>
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
   for($i=2012;$i<=2050;$i++)
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
   <td>Number of people:</td>
   <td><input type="text" name="np"/></td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td colspan="6" align="center"><input type="submit" name="submit" value="Reservation"/><input type="reset" name="reset" value="reset" onClick="javascript: return confirm('are you sure')" >
</td>
   </tr>
		</form>
		</table></div>
	  <div id="rgt_nav" border="1"><br/>
	 
	  
	  </div>
	</div>
	<div id="footer_wrap">
		<div id="foot_main">
			<div id="lft_ftr">&copy; Right Reserved to <b>Sajna Restuarent</b></div>
			<div id="rgt_ftr"><a href="index.php">Home</a> | <a href="information.php">Information</a> | <a href="menulist.php">Our Menu</a> | <a href="barmenu.php">Bar Menu</a> | <a href="reservation.php">Reservation</a> | <a href="photogallery.php">Photo Gallery</a> | <a href="ourbranch.php">Our Branch</a> | <a href="reviews.php">Reviews</a> | <a href="faq.php">FAQ</a> | <a href="contactus.php">ContactUs</a></div>
		</div>
	</div>
	
	
</body>
</html>