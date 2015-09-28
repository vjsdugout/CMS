<?php
require_once("../lib/dbconnect.php");
include_once("Includes/Top.php");
if(isset($_POST['submit']))
{
$name=$_POST['Iname'];
$desc=$_POST['desc'];
$price=$_POST['price'];
$in="INSERT INTO menulist (Name,Description,Price)VALUES('$name','$desc','$price')";
mysql_query($in) or die(mysql_error()); 
}
?>
<h3>Add Menu List</h3>
<table width="50%" align="center">
<form name="Addmenu" method="post" action="" />
<tr>
<td>Item Name:</td>
<td><input type="text" name="Iname" value="" /></td>
</tr>
<tr>
<td>Description:</td>
<td><textarea cols="20" rows="5" name="desc"></textarea></td>
</tr>
<tr>
<td>Price:</td>
<td><input type="text" name="price" value=""/></td> 
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="submit" value="Add" /></td>
</tr>
</form>
</table>
<?php
include_once("Includes/Bottom.php");
?>