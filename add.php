<?php
	session_start();
	if(isset($_SESSION['email']) && isset($_SESSION['password']))
	{

	}
	else
	{
		header("Location: reg_login.php");
	}
	
	if(isset($_POST["create"]))
	{
		$menu_name = $_POST['menu_name'];
		$visible = $_POST['visible'];
		$content = $_POST['content'];
		include_once("functions.php");
		$dbhost = "localhost";
		$dbuser = "cl56-user_info";
		$dbpass = "123456";
		$dbname = "cl56-user_info";
		
		$connection = dbConnect($dbhost, $dbuser, $dbpass, $dbname);
		if($connection)
		{
			$query = "SELECT menu_name FROM subjects WHERE menu_name = '{$menu_name}'";
			$res = mysqli_query($connection, $query);
			$rows = mysqli_num_rows($res);
			if($rows > 0)
			{
				$success = "Subject already exists";
			}
			else if(true)
			{
				$query1= "INSERT INTO subjects (menu_name, visible, content) VALUES('{$menu_name}', '{$visible}', '{$content}')";
				$result = mysqli_query($connection, $query1);
				if(!$result)
				{
					echo mysqli_error($connection);
				}
				else
				{
					echo $rows;
					$success = "New subject successfully created. Look for it in the side column.";
				}
			}
		}
	}
	else{
		$success = "";
	}
	include("inc/cms_head.php");
?>
		<?php
			include("inc/header.php");
		?>	
				<div id = 'content'>
					<div id = 'inside_content'>
						<div id = 'main_content'><br>
						<?php
							echo "<span style = 'padding: 5%;'>".$success."</span><br>";
						?>
							<h2 style = "margin-top: 0%;"> Add Subject </h2>
							<div style = 'width : 20%; margin: 5% 10%;'>
								<form name = 'add_subject' action = 'add.php?subject_id=0' method = "POST" onsubmit = "return validate_subject()">
									Subject name: <input type = 'text' name = 'menu_name' id = 'menuName' maxlength = '30'><br>
									<span id = 'error' style = "color: red;"></span><br><br>
									Content: <textarea rows = '4' cols = '50' name = 'content' id = 'menuContent' ></textarea><br>
									Visible: <input style = 'margin: 15% 0%;' type = 'radio' name= 'visible' value = '0'> No
											 <input style = 'margin: 15% 0%;' type = 'radio' name= 'visible' value = '1' checked = 'checked'> Yes<br>
											 <input type = 'submit' value = 'Create Subject' name = 'create'> 
								</form><br>
								<a href = 'manage_content.php'> Cancel </a>
							</div>
						</div>
						<?php
							include("inc/side_col.php");
							
						?>	
					</div>
				</div>
		<?php
			include("inc/footer.php");
		?>
				
	</body>
</html>