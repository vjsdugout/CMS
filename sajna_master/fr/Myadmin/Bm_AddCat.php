<?php
	require_once("../lib/dbconnect.php");
	 if(!isset($_SESSION[aid])){
 	header("location: Login.php");
	exit;
 }
	if(isset($_POST['Submit'])){
		$cname = $_POST['CatName'];
		$in = "INSERT INTO bm_category (Name) VALUES('$cname')";
		mysql_query($in);
		echo "<script type='text/javascript'>
			opener.location.href='bm_Category.php?ack=Category has been added successfully';
			self.close();
		</script>";
	}
?>
<link href="CSS/master.css" rel="stylesheet">
<table width="100%" cellspacing="0" style="border:#FF33CC 0.2em solid">
<form name="AddCategoryForm" method="post" action="">
<tr>
  <td class="head" colspan="2">Add Category Form</td>
</tr>
<tr>
   <td>Category Name</td>
   <td><input type="text" name="CatName"></td>
</tr>
  <tr>
   <td colspan="2" align="center"><input type="submit" name="Submit" value="Add" style="width: 90px;"></td>
  </tr>
</form>