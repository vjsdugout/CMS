<?php
	
	function dbConnect($dbhost, $dbuser, $dbpass, $dbname)
	{
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		if(mysqli_connect_errno())
		{
			die("Database connection failed: " . mysqli_connect_error(). " (". mysqli_connect_errno().")");
			return false;
		}
		else
		{
			return $conn;
		}
	}
?>