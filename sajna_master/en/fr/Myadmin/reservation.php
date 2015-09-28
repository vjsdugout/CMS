<?php
require_once('../lib/dbconnect.php');
include_once("Includes/Top.php");
$sel="SELECT * FROM resevationlist";
$result=mysql_query($sel) or die(mysql_error());
?> 
<table width="100%" cellpadding="3" cellspacing="2">
<tr class="head">
<th>Id</th>
<th>Name</th>
<th>ContactNo</th>
<th>Address</th>
<th>ZipCode</th>
<th>EmailId</th>
<th>Events</th>
<th>Visit</th>
<th>Date</th>
<th>No of Persons</th>
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
<td><?php echo $record['ContactNo'];?></td>
<td><?php echo $record['Address'];?></td>
<td><?php echo $record['Zipcode'];?></td>
<td><?php echo $record['EmailId'];?></td>
<td><?php echo $record['Events'];?></td>
<td><?php echo $record['Visit'];?></td>
<td><?php echo $record['Date'];?></td>
<td align="center"><?php echo $record['Nofp'];?></td>
<td><a href="#">Edit</a>|<a href="#">Delete</a></td>
<?php
}
}
?>
</table>
<?php
include_once("Includes/Bottom.php");
?>