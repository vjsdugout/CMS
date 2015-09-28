<?php
require_once("../lib/dbconnect.php");
if(isset($_POST['Submit'])){
	$name = $_POST['adminname'];
	$pass = md5($_POST['Password']);
	$qry = "SELECT * FROM admin WHERE AdminName='$name'";
	$res = mysql_query($qry) or die(mysql_error());
	if(mysql_num_rows($res) == 0){
		$ack = "User name doesnt exists";
	}else{
		$rec = mysql_fetch_assoc($res);
		if($rec['Password'] == $pass){
			echo $_SESSION['aid'];
			$_SESSION['aid'] = $rec['AdminId'];
			header("location: index.php");
			exit;
		}else{
			echo "Password incorrect.";
		}
	}
}
?>
<style type="text/css">
<!--
#apDiv1 
{
	position:absolute;
	width:338px;
	height:115px;
	z-index:1;
	left: 369px;
	top: 213px;
}

.head 
{
	color: #FFFFFF;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.label 
{
	color: #D10000; 
	font-weight: bold; 
	font-family: Verdana, Arial, Helvetica, sans-serif; 
	font-size: 12px; 
}
-->
</style>
<div id="apDiv1">
<div style="color:#FF0000; font-size:12px; font-weight: bold; font-family:verdana; text-align:center; width: 300px;padding-bottom: 5px;"><?php echo $ack;?></div>
  <table width="300" border="0" cellspacing="0" cellpadding="3" style="border:#D10000 0.2em solid">
    <form name="LoginForm" action="" method="post">
      <tr>
        <td height="24" colspan="2" bgcolor="#D10000" class="head">Login Panel</td>
      </tr>
      <tr>
        <td width="120" height="38" class="label">Admin Name</td>
        <td width="162"><input type="text" name="adminname"></td>
      </tr>
      <tr>
        <td height="25" class="label">Password</td>
        <td><input type="password" name="Password"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="Submit" value="LogIn" style="width:80px"></td>
      </tr>
    </form>
  </table>
</div>
