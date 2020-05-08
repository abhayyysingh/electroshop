<?php 
session_start();
require('config.php');
if(isset($_POST['uname']) and isset($_POST['psw']) and isset($_POST['re_psw']))
{
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];
	$re_psw=$_POST['re_psw'];
	if($psw==$re_psw)
	{
		$query="SELECT * from users WHERE username='$uname'";
		$result=mysqli_query($con,$query) or die(mysqli_error($con));
		$count=mysqli_num_rows($result);
		if($count==0)
		{
			$q="insert into users(username,password) values('$uname','$psw')";
			if(mysqli_query($con,$q))
			{
				echo "account created";
				header('location:login.html');
			}
			else
			{
				echo "error occured";
			}
		}
	}
	else 
	{
		echo "password and re-entered password must be same";
	}
}