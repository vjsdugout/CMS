<?php
	session_start();
	if(isset($_SESSION['email']) && isset($_SESSION['password']))
	{	
		unset($_SESSION['email']);
		unset($_SESSION['password']);
	}
	else
	{
		header("Location: reg_login.php");
	}
	
	include("inc/cms_head.php");
	include("inc/header.php");
?>
		<div id = 'content'>
			<div id = 'inside_content'>
				<div id = 'main_content'>
					<h2 style = "display: inline-block;"> You have successfully logged out. </h2>
					
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