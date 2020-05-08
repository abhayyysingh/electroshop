<?php 
session_start();
?>

<html>
<head>
<link rel="stylesheet" href="adminstyle.css">
</head>
<body>

<div class="topnav">
  <a  href="adminheader.html">Home</a>
  <a  href="viewproducts.php">View all products</a>
  <a class="active" href="deleteproducts.php">delete products</a>
  <a href="insertproducts.php">Insert products</a>
  <a href="order.php">Orders</a>
  <a href="logout.php">logout</a>
</div>
<?php  include('adminname.php'); ?>
<div class="d">
<form method="POST" action="deleteproducts.php">
<label>Product Id</label><br>
<input type="text" name="prod_id" placeholder="Enter product id" required><br><br>
<input type="submit" name="delete" value="Delete">
</div>
<?php
if(isset($_SESSION['username']))
{

if(isset($_POST['prod_id']))
{
	$prod_id= $_POST['prod_id'];
	include('config.php');
	$sql = "DELETE FROM products WHERE prod_id='$prod_id'";
	if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
	} else {
    echo "Error deleting record: " . mysqli_error($con);
	}

mysqli_close($con);

	echo "item deleted";
}	
}
else{
	header('location:admin_login.html');
}
?>

</form>
</body>
</html>