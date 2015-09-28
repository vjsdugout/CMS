<?php
	include_once("functions.php");
	session_start();
	if(isset($_SESSION['email']) && isset($_SESSION['password']))
	{

	}
	else
	{
		header("Location: reg_login.php");
	}
	
?>

<?php
	include("inc/cms_head.php");
	include("inc/header.php");
		?>	
				<div id = 'content'>
					<div id = 'inside_content'>
						<div id = 'main_content'>
							<h2> Admin Menu </h2>
							<h3>Welcome to the admin area.</h3>
							
							<ul>
								<li><a href ='manage_content.php'> Manage website content </a></li>
								<li><a href ='manage_users.php'> Manage admin users </a></li>
								<li><a href ='logout.php'> Logout</a></li>
								
							</ul>
						</div>
							<div class = 'side_col'>
								<div>
									
								</div>
								
							</div>
						
					</div>
				</div>
		<?php
			include("inc/footer.php");
		?>
				
	</body>
</html>