<?php
	if( (isset($_POST["login"])))
	{
		session_start();
		$user= $_POST['username'];
		$password1=$_POST['password'];
		
		require("connection.php");
		$query="select * from admin where username='$user' and password='$password1'";
		
		$row_fetch=mysql_query($query);
		$row_count=mysql_num_rows($row_fetch);
		if($row_count!=0)
		{
			$_SESSION['$user']="$user";
			$_SESSION['$password']="$password1";
			
			echo "<script>alert('successful login');</script>";
			header('location:task_allocation.html');
			}
		else
		{
			echo "<script>alert('plz enter the correct password');window.location.href = 'login.php';</script>";
		}
	}
?>