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
color:#FFFFFF;
text-align:center;
}
</style>
<div align="right">
	 <table width="75%" cellpadding="3" cellspacing="2" align="center">
	<tr class="h">
	<th>S.NO</th>
	<th>Name</th>
	<th>Price</th>
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
	<td><?php echo $record['Id'];?></td>
	<td><b><?php echo $record['Name'];?></br>
	<?php echo $record['Description'];?></b>
	</td>
	
	<td><?php echo $record['Price'];?></td>
	<?php
	}
	}
	?>
	</tr>
	</table>
	</div>
<?php
include_once("inc/Bottom.php");
?>