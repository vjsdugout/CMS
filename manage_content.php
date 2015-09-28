<?php
	include("inc/cms_head.php");
	session_start();
	if(isset($_SESSION['email']) && isset($_SESSION['password']))
	{

	}
	else
	{
		header("Location: reg_login.php");
	}
	if(isset($_POST['delete']))
	{
		ob_start();
	}
?>
		<?php
			include("inc/header.php");
		?>	
				<div id = 'content'>
					<div id = 'inside_content'>
						<div id = 'main_content'>
						<?php
							include_once("functions.php");
							$conn = dbConnect('localhost', 'cl56-user_info', '123456', 'cl56-user_info');
							if(!isset($_GET["subject_id"]) && !isset($_GET["id"]))
							{
								if($_GET['delete'] == 'true')
								{
									echo "<div style = 'margin-top: 5%; margin-left: 5%; color : #ED391B;'> Subject successfully deleted </div>";
								}
								echo "<h2> Manage Content </h2>";
								
								if($conn)
								{
									$query = "SELECT id, menu_name FROM subjects";
									$result = mysqli_query($conn, $query);
									if(!$result)
									{
										echo mysqli_error($conn);	
									}
									else
									{
										echo "<ul style = 'list-style: none; margin-top: 5%;'>";
										while($subject = mysqli_fetch_assoc($result))
										{
											echo "<li><a href = 'manage_content.php?id={$subject[id]}'>Manage {$subject[menu_name]} page</a></li>";
										}
										echo "</ul>";
									}
								}
							}
							else if(isset($_GET["id"]))
							{
								$id = $_GET["id"];
								$success = "";
								if(isset($_POST['create']))
								{
									$menu_name = mysqli_real_escape_string($conn, $_POST['menu_name']);
									$content = mysqli_real_escape_string($conn, $_POST['content']);
									$visible = $_POST['visible'];
									$query = "UPDATE subjects SET menu_name = '{$menu_name}', content = '{$content}', visible = '{$visible}' WHERE id = $id";
									$result = mysqli_query($conn, $query);
									if(!$result)
									{
										echo mysqli_error($conn);
									}
									else
									{
										$success = "Subject successfully modified.";
									}
								}
								else if(isset($_POST['delete']))
								{
									$query = "DELETE FROM subjects WHERE id = '{$id}'";
									$result = mysqli_query($conn, $query);
									if(!$result)
									{
										echo mysqli_error($conn);
									}
									else
									{
										header("Location: manage_content.php?delete=true");
									}
								}
								if($conn)
								{
									$query = "SELECT menu_name FROM subjects WHERE id = '{$id}'";
									$result = mysqli_query($conn, $query);
									if(!$result)
									{
										echo mysqli_error($conn);	
									}
									else
									{
										$subject = mysqli_fetch_assoc($result);
										echo "<span style = 'display: inline-block; margin-top:5%; margin-left: 5%; color: #1947A3;'>{$success}</span>";
										echo "<h2>Modify <span style = 'color: #1975D1;'>{$subject['menu_name']}</span> page</h2>";
									}
								
								?>
								<div style = 'width : 20%; margin: 5% 10%;'>
								<form name = 'change_subject' action = 'manage_content.php?id=<?php echo"$id" ?>' method = "POST" onsubmit = "return validate_subject()">
									Change Subject name to: <input type = 'text' name = 'menu_name' id = 'menuName' maxlength = '30'><br>
									<span id = 'error' style = "color: red;"></span><br><br>
									Modify Content: <textarea rows = '4' cols = '50' name = 'content' id = 'menuContent' ></textarea><br>
									Change Visibility: <input style = 'margin: 15% 0%;' type = 'radio' name= 'visible' value = '0'> No
													   <input style = 'margin: 15% 0%;' type = 'radio' name= 'visible' value = '1'  checked = 'checked'> Yes<br>
											 <input type = 'submit' value = 'Create Subject' name = 'create'> 
								</form><br>
								<form name = 'delete_subject' action = 'manage_content.php?id=<?php echo "$id" ?>' method = "POST">
								 <input type = 'submit'  id = 'del' value = 'Delete Subject' name = 'delete'> <br>
								 </form><br>
								 <a href = 'manage_content.php'> Cancel </a>
								</div>
								<?php
								
								}
							}
							else
							{
								include_once("functions.php");
								$id = $_GET["subject_id"];
								$connection = dbConnect('localhost', 'cl56-user_info', '123456', 'cl56-user_info');
								if($connection)
								{
									$query = "SELECT content FROM subjects WHERE id = '{$id}' ";
									$result_set = mysqli_query($connection, $query);
									if(!$result_set)
									{
										echo mysqli_error($connection);
									}
									else
									{
										while($content = mysqli_fetch_array($result_set))
										{
											echo"<p>{$content[0]}</p>";
										}
									}
								}
							}
						?>
							
						</div>
						<?php
							if(isset($_GET['subject_id']))
							{
								$selected_subject = $_GET['subject_id'];
							}
							else
							{
								$selected_subject = null;
							}
							include("inc/side_col.php");
						?>	
					</div>
				</div>
		<?php
			include("inc/footer.php");
			mysqli_free_result($result);
			mysqli_free_result($result_set);
			mysqli_close($conn);
			mysqli_close($connection);
			
		?>
				
	</body>
</html>