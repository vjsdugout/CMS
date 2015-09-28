<?php
	include_once("Includes/Top.php");
	 if(!isset($_SESSION[aid])){
 	header("location: Login.php");
	exit;
 }
	$cid = $_GET['cid'];
	$sel = "SELECT * FROM bm_products WHERE bmCatId=$cid";	
	$result = mysql_query($sel);
	
?>
<style type="text/css">
.head
{
background-color:#800000;
}
</style>
<a href='Bm_AddProd.php?cid=<?php echo $cid;?>'>Add Product</a>
<div style="color: #009966; font-size:14px; font-family:verdana; text-align:center;font-weight: bold;"><?php echo $_GET['ack'];?></div>
<table width="572" cellspacing="2" cellpadding="0" align="center">
  <tr class="head">  <th width="149" class="head">S.NO</th>
        <th width="149" class="head">Name</th>
		  <th width="149" class="head">Description</th>
		<th width="79" class="head">Price</th>
		<th width="106" class="head">Status</th>
		<th width="150" class="head">Action</th>		
  </tr>
  <?php
  	if(mysql_num_rows($result) == 0){
		echo "<tr><td colspan=5 align=center>No records found</td></tr>";
	}
	$cnt=1;
	while($rec = mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>$cnt</td>";
		echo "<td>$rec[Name]</td>";
		echo "<td>$rec[Description]<br>$rec[Description1]</td>";
		echo "<td>$rec[Price]</td>";
		echo "<td>";
		if($rec['pStatus'] == 0){
		echo "<a href='Bm_ProductsStatus.php?cid=$cid&pid=$rec[Id]&status=1'>Activate</a>";
		}else{
		echo "<a href='Bm_ProductsStatus.php?cid=$cid&pid=$rec[Id]&status=0'>Deactivate</a>";
		}
		echo "</td>";
		echo "<td><a href='Bm_EditProd.php?cid=$cid&pid=$rec[Id]'>Edit</a> | <a href='Bm_Deleteprod.php?cid=$cid&pid=$rec[Id]'>Delete</a></td>";
		echo "</tr>";
		$cnt++;
	}
  ?>
  <tr>
  </tr>
</table>

<?php
	include_once("Includes/Bottom.php");
?>