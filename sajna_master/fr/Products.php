<?php
	//include_once("Includes/Top.php");
	require_once("lib/dbconnect.php");
	$cid = $_GET['cid'];
	$sel = "SELECT * FROM products WHERE CatId=$cid AND pStatus=1 ORDER BY Name";
	$result = mysql_query($sel);
	
?>
<style type="text/css">
.data
{
text-align:center;

}
</style>
<table width="75%" border="0" cellpadding="3" cellspacing="2" align="center">
	<tr>
	<th>S.NO</th>
	<th>Name</th>
	<th>Description</th>
	<th>Price</th>
	</tr>
	<?php
	if(mysql_num_rows($result)==0)
	{
	?>
	<tr>
	<td colspan="4" align="center">No Products Avabile Hear</td>
	</tr>
	<?php
	}
	else
	{
	while($record=mysql_fetch_assoc($result))
	{
	?>
	<tr class="data">
	<td><?php echo $record['Id'];?></td>
	<td><?php echo $record['Name'];?></td>
	<td><?php echo $record['Description'];?></td>
	<td><?php echo $record['Price'];?></td>
	<?php
	}
	}
	?>
	</table>

<?php
	//include_once("Includes/Bottom.php");
?>