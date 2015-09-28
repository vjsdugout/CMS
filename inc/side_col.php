<div class = 'side_col'>
	<div>
		<ul>
			<?php
				include_once("/../functions.php");
				$conn = dbConnect('localhost', 'cl56-user_info', '123456', 'cl56-user_info');
				if($conn)
				{
					$query = "SELECT * FROM subjects";
					$result = mysqli_query($conn, $query);
					$row_count = mysqli_num_rows($result);
					
					if(!$result)
					{
						die("Database query failed!");
					}
					while($subject = mysqli_fetch_assoc($result))
					{
						echo "<li "; 
							  if($subject['id'] == $selected_subject)
							  {
								  echo "style = 'font-weight: 900'";
							  }
							  echo">";
							  ?><a href='manage_content.php?subject_id=<?php echo urlencode($subject[id]);?>'><?php 
							  if($subject['visible']){
							  echo $subject['menu_name'];
							  }?></a></li>
							  
					<?php
					}
					
				}
				
			?>	
			<li
			<?php
					if($_GET["subject_id"] === '0')
					{
						echo "style = 'display: none;'";
					}
					echo ">";
			?>
			<a href ='add.php?subject_id=0'> Add a New Subject</a></li>
			<li
			<?php
					if(!isset($_GET["subject_id"]) && !isset($_GET["id"]))
					{
						echo " style = 'font-weight: 900;'";
					}
					echo ">";
					mysqli_free_result($result);
				?>	
			<a href = 'manage_content.php'>Manage Content</a></li>
		</ul>
	</div>
	
</div>