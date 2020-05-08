<?php 
session_start();
require('config.php');
if(isset($_POST['uname']) and isset($_POST['psw']))
{
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];
	$query="SELECT * from users WHERE username='$uname' and password='$psw'";
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		$_SESSION['uname']=$uname;
	}
	else
	{
		echo "Invalid login credential. ";
		
	}
}
if(isset($_SESSION['uname']))
{
	$uname=$_SESSION['uname'];
	echo "hii ".$uname;
	header('location:xyz.php');
	
}