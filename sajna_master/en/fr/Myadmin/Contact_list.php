<?php
require_once('../lib/dbconnect.php');
include_once("Includes/Top.php");
$sel="SELECT * FROM contlist";
$result=mysql_query($sel) or die(mysql_error());
?> 
<table width="100%" cellpadding="3" cellspacing="2">
<tr class="head">
<th>Id</th>
<th>Name</th>
<th>EmailId</th>
<th>ContactNo</th>
<th>Address</th>
<th>City</th>
<th>Description</th>
<th>RegistredOn</th>
<th>Action</th>
</tr>
<style type="text/css">
.head
{
background-color:#800000;
}
.data
{
background-color:#666666;
}
</style>
<?php
if(mysql_num_rows($result)==0)
{
?>
<tr class="data">
<td colspan="8" align="center">NO Records Found</td>
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
<td><?php echo $record['EmailId'];?></td>
<td><?php echo $record['ContactNo'];?></td>
<td><?php echo $record['Address'];?></td>
<td><?php echo $record['City'];?></td>
<td><?php echo $record['Description'];?></td>
<td><?php echo $record['RegistredOn'];?></td>
<td><a href="#">Edit</a>|<a href="#">Delete</a></td>
<?php
}
}
?>
</table>
<?php
include_once("Includes/Bottom.php");
?>