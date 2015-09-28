<?php
require_once('lib/dbconnect.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$cont=$_POST['contact'];
$addr=$_POST['address'];
$city=$_POST['city'];
$des=$_POST['desc'];
$in="INSERT INTO contlist(Name,EmailId,ContactNo,Address,City,Description)values('$name','$email','$cont','$addr','$city','$des')";
mysql_query($in) or die(mysql_error());
header('location:contactus.php?ack=Add sucessfully');
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
	<script type="text/javascript">
	function validateForm(f)
	{
	n = f.name.value;
	e = f.email.value;
	m = f.Mobile.value;
	a = f.address.value;
	c = f.city.value;
	error = '';
	n_pat = /^[a-zA-Z\s]{3,}$/i;
	
  if(!n_pat.test(n)){
		error += "Invalid Name \n";
	}
	e_pat=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	if(!e_pat.test(e)){
		error += "Invalid EmailId \n";
	}
	m_pat = /^[6-9][0-9]{9}$/;
	if(!m_pat.test(m)){
		error += "Invalid Contact no \n";
	}
	
	if(a ==''){
		error += "Invalid Address \n";
	}
	c_pat = /^[a-zA-Z\s]{3,}$/i;
	if(!c_pat.test(c)){
		error += "Invalid City \n";
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
<style type="text/css">
.f
{
color:#FFFFFF;
}
</style>
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
	
	

	
	<div id="con_content_wrap">
	<div id="lft_nav">
		  <h3>Contact Us</h3>
	</div>
		
		<div id="con_rgt_nav">
		
		<iframe width="880" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowtransparency="true" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Sajna+Restaurant+Rue+de+Neuch%C3%A2tel+18,+1201+Geneva,+Switzerland&amp;aq=&amp;sll=21.125498,81.914063&amp;sspn=46.177157,86.572266&amp;ie=UTF8&amp;hq=Sajna+Restaurant&amp;hnear=Rue+de+Neuch%C3%A2tel+18,+P%C3%A2quis-Nations,+1201+Gen%C3%A8ve,+Switzerland&amp;ll=46.211101,6.146006&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe><br /><small><a href="http://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Sajna+Restaurant+Rue+de+Neuch%C3%A2tel+18,+1201+Geneva,+Switzerland&amp;aq=&amp;sll=21.125498,81.914063&amp;sspn=46.177157,86.572266&amp;ie=UTF8&amp;hq=Sajna+Restaurant&amp;hnear=Rue+de+Neuch%C3%A2tel+18,+P%C3%A2quis-Nations,+1201+Gen%C3%A8ve,+Switzerland&amp;ll=46.211101,6.146006&amp;spn=0.006295,0.006295&amp;t=m" style="color:#fFF;text-align:left">View Larger Map</a></small>
		
		</div>
		<div class="f" align="center">
		<?php
		if(isset($_GET['ack']))
		{
		echo $_GET['ack']."<br>";
		}
		?>
		</div>
		
		<div id="con_lft_nav"><br/>
	<form action="" method="post" name="Contactform" id="contactform" onsubmit='javascript: return validateForm(this)'>
    <table width="100%" height="288" border="0" align="center" cellpadding="0" cellspacing="3" id="feedbacktable">
      <tbody>
        <tr>
          <td colspan="2" align="center"><strong style="color: white;"><u>Feedbacks & Suggestions</u></strong></td>
          </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="30%" align="right"><span>Your Name :</span></td>
          <td width="70%"><input name="name" id="name" type="text"  class="feedbackinput"/></td>
        </tr>
        <tr>
          <td align="right"><span>Your Mail :</span></td>
          <td><input name="email" id="email" type="text" class="feedbackinput"/></td>
        </tr>
        <tr>
          <td align="right"><span>Your Contact no. :</span></td>
          <td><input name="Mobile" id="Mobile" type="text" class="feedbackinput" /></td>
        </tr>
        <tr>
          <td align="right"><span>Your Address :</span></td>
          <td><input name="address" id="address" type="text" class="feedbackinput" /></td>
        </tr>
        <tr>
          <td align="right"><span>Your City :</span></td>
          <td><input name="city" id="city" type="text" class="feedbackinput" />            </td>
        </tr>

        <tr>
          <td height="101" valign="top"><span style="margin-left:128px;"> Comments:</span></td>
          <td valign="top"><textarea name="desc" id="desc" rows="6" style="width:180px;"></textarea></td>
          </tr>
        <tr>
          <td height="24"></td>
          <td><input type="submit" name="submit" value="Submit" /><input type="reset" name="reset" value="reset" onClick="javascript: return confirm('are you sure')" >
</td>
        </tr>
        
    </table>
  </form>
		</div>
		
	<div id="con_lef_id">
	<strong>Sajna Restaurant</strong><br/><br/>
Rue de Neuchâtel 18,<br/><br/>
1201 Geneva, Switzerland<br/><br/>

<strong>Tel	:</strong>	(022) 731 26 96<br/><br/>
<strong>Fax	:</strong>	(022) 741 17 44<br/><br/>
 	 	 
<strong>Email :</strong>	contact@sajnarestaurant.ch<br/><br/>
 	 	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; contact@sajnarestaurant.co.uk<br/><br/>
<strong>Website	:</strong>	www.sajnarestaurant.ch<br/><br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; www.sajnarestaurant.co.uk
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