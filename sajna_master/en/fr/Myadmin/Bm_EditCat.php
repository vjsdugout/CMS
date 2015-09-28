<?php
	require_once("../lib/dbconnect.php");
	$catid = $_GET['catid'];
	
	if(isset($_POST['Submit'])){
		$cname = $_POST['CatName'];
		$up = "UPDATE bm_category SET Name='$cname' WHERE Id=$catid";
		mysql_query($up);
		echo "<script type='text/javascript'>
			opener.location.href='bm_Category.php?ack=Category has been updated successfully';
			self.close();
		</script>";
	}
	
	$sel = "SELECT * FROM bm_category WHERE Id=$catid";
	$res = mysql_query($sel);
	$rec = mysql_fetch_assoc($res);
	$cname = $rec['Name'];
?>
<link href="CSS/master.css" rel="stylesheet">
<table width="100%" cellspacing="0" style="border:#FF33CC 0.2em solid">
<form name="UpdateCategoryForm" method="post" action="">
<tr>
  <td class="head" colspan="2">Update Category Form</td>
</tr>
<tr>
   <td>Category Name</td>
   <td><input type="text" name="CatName" value="<?php echo $cname;?>"></td>
</tr>
  <tr>
   <td colspan="2" align="center"><input type="submit" name="Submit" value="Update" style="width: 90px;"></td>
  </tr>
</form>