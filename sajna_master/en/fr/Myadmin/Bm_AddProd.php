<?php
require_once('../lib/dbconnect.php');
	include_once("Includes/Top.php");
	$cid = $_GET['cid'];
	if(isset($_POST['Submit'])){
		$name = $_POST['Name'];
		$desc = $_POST['Description'];
		$price = $_POST['Price'];
		$in = "INSERT INTO bm_products(Name,Description,Price,bmCatId)VALUES('$name','$desc','$price',$cid)";
		mysql_query($in) or die(mysql_error());
		header("location: Bm_Prod.php?cid=$cid&ack=Product has been added successfully");	
	}
?>

<table width="368" border="0" cellspacing="0" cellpadding="2" style="border:#FF3399 0.02em solid" align="center">
<form name="AddProductForm" method="post" action="" enctype="multipart/form-data">
  <tr>
    <th scope="col" class="head" colspan="2">Add Product</th>
  </tr>
  <tr>
    <td width="103">Name</td>
    <td width="257"><input type="text" name="Name"></td>
  </tr> <tr>
    <td>Description</td>
    <td><textarea name="Description" rows="3" cols="23"></textarea></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="Price"></td>
  </tr>
 
  <tr>
    <td colspan="2" align="center"><input type="submit" name="Submit" value="Add" style="width: 90px;"> </td>
  </tr>
  </form>
</table>

<?php
	include_once("Includes/Bottom.php");
?>