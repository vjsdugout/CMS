<?php
	session_start();
	if(isset($_SESSION['email']) && isset($_SESSION['password']))
	{
		header("Location: cms.php");
	}
	
	include_once("functions.php");
	$dbhost = "localhost";
	$dbuser = "cl56-user_info";
	$dbpass = "123456";
	$dbname = "cl56-user_info";
	$output2 = ' ';
	$output1 = ' ';
	if(isset($_POST['register']))
	{	
		$first_name = trim($_POST["fname"]);
		$last_name = trim($_POST["lname"]);
		$email = trim($_POST["email"]);
		$password = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
		$birthday = $_POST["bday"];
		$gender = $_POST["gender"];
		
		$conn = dbConnect($dbhost, $dbuser, $dbpass, $dbname);
		if($conn)
		 {
			$query = "SELECT email, password FROM user_data WHERE email = '{$email}'";
			$result1 = mysqli_query($conn, $query);
			$row_count = mysqli_num_rows($result1);
			if(!$result1)
			{
				die("Database query failed!");
			}
			
			else if(!$row_count)
			{
			
				$query = "INSERT INTO user_data (email, first_name ,last_name, password, birth_date, sex) VALUES ('{$email}', '{$first_name}', '{$last_name}', '{$password}','{$birthday}' , '{$gender}')";
				
				$result = mysqli_query($conn, $query);
				if($result)
				{
					$output2 = "You have successfully registered. Please login";
				}
				else
				{
					die("Database query failed");
				}
				
			}
			else if($row_count > 0)
			{
				$output2 = "You are already registered. Please login.";
			}
		else
		{
			die("Database query failed. " . mysqli_error($conn));
		}
			mysqli_free_result($result1);
			mysqli_close($conn);
		}
	}
	
	else if(isset($_POST['submit']))
	{
		
		$username = trim($_POST['uname']);
		$pass = $_POST["pass"];
		
		$conn = dbConnect($dbhost, $dbuser, $dbpass, $dbname);
		
		if($conn)
		{
			$query = "SELECT email, password FROM user_data WHERE email = '{$username}'";
		
			$result = mysqli_query($conn, $query);
			$row_count = mysqli_num_rows($result);
			if(!$result)
			{
				die("Database query failed!");
			}
			
			else if(!$row_count)
			{
				$output1 = "Invalid username or password.";
			}
			
			else
			{
				while($login_info = mysqli_fetch_assoc($result))
				{
					if($login_info['email'] === $username && password_verify($pass, $login_info['password']) )
					{
						$_SESSION['email'] = $username;
						$_SESSION['password'] = $pass;
						header("Location: cms.php");
					}
					else
					{
						$output1 = "Invalid username or password.";
					}
				}
			}
			mysqli_free_result($result);
		}
		mysqli_close($conn);
	}
?>




<!DOCTYPE html>
<html>
	<head>
		<meta charset = 'utf-8'>
		<title> Template by VJ </title>
		<link type = 'text/css' rel = 'stylesheet' href = 'style1.css'>
		<link type = 'text/css' rel = 'stylesheet' href = 'reg.css'>
		<script src = 'script.js'>
		</script>
	</head>
	
	<body>
		<?php
			include("inc/header.php");
		?>
		
				<div id = 'content'>
					<div id = 'left'>
						<span style = "color: #fff; position: absolute; top: 80%; left:5%;"><?php echo $output1; echo "$output2";?></span>
						<h1>Welcome Back!</h1>
						<form name = 'log_in' action = 'reg_login.php' method = 'POST'>
							<input type = 'email' name = 'uname' id = 'username' value = '' placeholder = 'Email*'><br><br>
							<input type = 'password' name = 'pass' id = 'password' value = '' placeholder = 'Password*'><span></span><br><br>
							<a href = '#' onclick = 'showRight()'> Don't have a username? Signup</a>
							<input class = 'button' type = 'submit' name = 'submit' value = 'LOG IN'>
						</form>
						
							
									
					</div>
					<div id = 'right'>
						<div>
							<?php echo "<span style = 'color: #fff; margin-left: 9%;'>"; echo "$output2"; echo"</span>"?>	
							<h1> Sign Up! </h1>
							<h2> It's free </h2>
							<form name = 'register' action = 'reg_login.php' method = 'POST' onsubmit = 'return validate()'>
								<input type = 'text' name= 'fname' id = 'firstname' placeholder = 'First name' maxlength = '30'>
								<span class = 'error' id = 'error_fname'></span>
								<br><br>
								<input type = 'text' name= 'lname' id = 'lastname' placeholder = 'Last name'>
								<span class = 'error' id = 'error_lname'></span>
								<br><br>
								<input type = 'email' name= 'email' id = 'mail' placeholder = 'Email'>
								<span class = 'error' id = 'error_email'></span>
								<br><br>
								<input type = 'Password' name= 'pwd' id = 'pwd_id' placeholder = 'Password'>
								<span class = 'error' id = 'error_pwd'></span>
								<br><br>
								<input type = 'date' name= 'bday' id = 'birth_day'>
								<span class = 'error' id = 'error_bday'></span>
								<br><br>
								<div><input type = 'radio' name= 'gender' value = 'm'><span> Male</span>
								<input type = 'radio' name= 'gender' value = 'f'><span> Female</span></div>
								<span class = 'error' id = 'error_gender'></span><br>
								<a href ='#' onclick = 'showLeft()'> Already have a username? Log in!</a>
								<input class = 'button' type = 'submit' name = 'register' value = 'SIGN UP'>
							</form>	
											
						</div>
					</div>
				</div>
			
		<?php
			include("inc/footer.php");
		?>
	</body>
</html>