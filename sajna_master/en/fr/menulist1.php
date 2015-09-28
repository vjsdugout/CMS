<?php
	include_once("inc/Top.php");
	require_once("lib/dbconnect.php");
	$cid = $_GET['cid'];
	$sel = "SELECT * FROM products WHERE CatId=$cid AND pStatus=1 ORDER BY Name";
	$result = mysql_query($sel);
	
?>
<style type="text/css">
.h
{
color:#000;
background: #e2e2e2;
text-align:center;
}
</style>
<tr class="h">
	<td width="80" id="se_no">S.NO</td>
    <td width="437" id="se_name">Name</td>
    <td width="139" id="se_price">Price</td>
  </tr>
  <?php
	if(mysql_num_rows($result)==0)
	{
	?>
  <tr class="h">
	<td colspan="4" align="center">No Products Avabile Hear</td>
	</tr>
  <?php
	}
	else
	{
	while($record=mysql_fetch_assoc($result))
	{
	?>
  <tr class="h">
    <td id="se_no"><?php echo $record['Id'];?></td>
    <td id="se_name"><b><?php echo $record['Name'];?></b><br/><?php echo $record['Description'];?></td>
    <td id="se_price"><?php echo $record['Price'];?></td>
  </tr>
  <?php
	}
	}
	?>
  
  
  

	</table>
	</div>
	
<?php
include_once("inc/Bottom.php");
?>