<?php
	//include_once("Includes/Top.php");
	$pid = $_GET['pid'];
	$sel = "SELECT * FROM products WHERE Id=$pid";
	$res = mysql_query($sel);
	$product = mysql_fetch_assoc($res);
	
?>
<table width="96%" border="0" cellspacing="1" cellpadding="2" align="center">
  <tr>
    <td width="22%">Name</td>
    <td width="45%"><?php echo $product['Name']?></td>
  </tr>
  <tr>
    <td>Price</td>
    <td>Rs. <?php echo $product['Price'];?></td>
  </tr>
  <tr>
    <td height="115">Description:</td>
    <td rowspan="3" align="justify"><?php echo nl2br($product['Description']);?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="bottom" align="Left"></td>
  </tr>
  <tr>
  	<td align="left" colspan="2"><a href="AddToCart.php?pid=<?php echo $pid;?>"><img src="Images/buy.png" border="0" /></a></td>
  </tr>
</table>

<?php
	//include_once("Includes/Bottom.php");
?>