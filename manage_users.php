<?php
	session_start();
	include_once("functions.php");
	$success = "";
	if(isset($_SESSION['email']) && isset($_SESSION['password']))
	{
	
	}
	else
	{
		header("Location: reg_login.php");
	}
	$conn = dbConnect('localhost', 'cl56-user_info', '123456', 'cl56-user_info');
	if(isset($_GET['email']))
	{
		$del_user =  $_GET['email'];
		$query = "SELECT * FROM user_data WHERE email = '{$del_user}'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result))
		{
			$query = "DELETE FROM user_data WHERE email = '{$del_user}'";
			$result = mysqli_query($conn, $query);
			if(!$query)
			{
				echo mysqli_error($conn);
			}
			else
			{
				if($_SESSION['email'] == $del_user )
				{
					unset($_SESSION['email']);
					header("Location: reg_login.php");
				}
				$success = "User successfully deleted";
			}
		}
		else
		{
			$success = "User does not exist";
			if($_SESSION['email'] == $del_user )
			{
				unset($_SESSION['email']);
				header("Location: reg_login.php");
			}
		}
		
	}
	include("inc/cms_head.php");
	include("inc/header.php");
?>
		<div id = 'content'>
			<div id = 'inside_content'>
				<div id = 'main_content'>
					<h2>Manage Users </h2>
					<div style = "margin-top: 5%; margin-left: 5%; color: #EE4D35;"><?php echo $success;?></div>
					
					<?php
						echo "<ul style = 'margin-top: 5%; color: #194775;'>";
						include_once("functions.php");
						$query = "SELECT email, first_name, last_name FROM user_data";
						$result = mysqli_query($conn, $query);
						if(!$result)
						{
							echo mysqli_error($conn);
						}
						
						else
						{
							while($user = mysqli_fetch_assoc($result))
							{	
								echo"<li>{$user['first_name']} {$user['last_name']}  :   {$user['email']}";
		echo"<pre style = 'font-family:custom; display: inline;'>           <a href = manage_users.php?email={$user['email']}>Delete User</a></pre></li>";
							}
						}
						echo "</ul>"
					?>
				</div>
					<div class = 'side_col'>
						<div>
							
						</div>
						
					</div>
				
			</div>
		</div>
		
<?php
	include("inc/footer.php");
	mysqli_free_result($result);
	mysqli_close($conn);
?>
				
	</body>
</html>