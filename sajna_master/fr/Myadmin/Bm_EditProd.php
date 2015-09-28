<?php
require_once("../lib/dbconnect.php");
	include_once("Includes/Top.php");
	 if(!isset($_SESSION[aid])){
 	header("location: Login.php");
	exit;
 }
	$cid = $_GET['cid'];
	$pid = $_GET['pid'];
	$sel = "SELECT * FROM bm_products WHERE Id=$pid";
	$res = mysql_query($sel);
	$rec = mysql_fetch_assoc($res);

	if(isset($_POST['Submit'])){
		$name = $_POST['Name'];
		$desc = $_POST['Description'];
		$price = $_POST['Price'];
			$in = "UPDATE bm_products SET Name='$name', Price=$price, Description='$desc' WHERE Id=$pid";
		mysql_query($in) or die(mysql_error());
		header("location: Bm_Prod.php?cid=$cid&ack=Product has been updated successfully");
		
	}
	 
?>

<table width="368" border="0" cellspacing="0" cellpadding="2" style="border:#FF3399 0.02em solid" align="center">
<form name="EditProductForm" method="post" action="" enctype="multipart/form-data">
  <tr>
    <th scope="col" class="head" colspan="2">Edit Product</th>
  </tr>
  <tr>
    <td width="103">Name</td>
    <td width="257"><input type="text" name="Name" value="<?php echo $rec['Name'];?>"></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="Price" value="<?php echo $rec['Price'];?>"></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><textarea name="Description" rows="3" cols="23"><?php echo $rec['Description'];?></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="Submit" value="Edit" style="width: 90px;"> </td>
  </tr>
  </form>
</table>

<?php
	include_once("Includes/Bottom.php");
?>