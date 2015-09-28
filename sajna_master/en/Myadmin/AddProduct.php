<?php
require_once('../lib/dbconnect.php');
 if(!isset($_SESSION[aid])){
 	header("location: Login.php");
	exit;
 }
	include_once("Includes/Top.php");
	$cid = $_GET['cid'];
	if(isset($_POST['Submit'])){
		$name = $_POST['Name'];
		$desc = $_POST['Description'];
		$desc1 = $_POST['Desc'];
		$price = $_POST['Price'];
		$in = "INSERT INTO products(Name,Description,Description1,Price,CatId)VALUES('$name','$desc','$desc1','$price',$cid)";
		mysql_query($in) or die(mysql_error());
		header("location: Products.php?cid=$cid&ack=Product has been added successfully");	
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
  </tr> 
  <tr>
    <td>Description</td>
    <td><textarea name="Description" rows="3" cols="23"></textarea></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><textarea name="Desc" rows="3" cols="23"></textarea></td>
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