	<?php 
session_start();
require('config.php');



if(isset($_POST['uname']) and isset($_POST['psw']))
{
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];
	
	$query="SELECT * from admin WHERE username='$uname' and password='$psw'";
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	$count=mysqli_num_rows($result);
	
	if($count==1)
	{
		$_SESSION['username']=$uname;
		
	}
	else
	{
		echo "<script>alert('Invalid credential');location='admin_login.html'</script> ";
		//header('location:admin_login.html');
		
	}
	
}

if(isset($_SESSION['username']))
{
	$uname=$_SESSION['username'];
	echo "hii Admin ".$uname;
	header('location:adminheader.html');
	
}
?>