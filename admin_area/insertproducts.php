<?php 
session_start();
?>
<html>
<head>
<style>

</style>

<link rel="stylesheet" href="adminstyle.css">

</head>
	<body>
	
	
	<div class="topnav">
  <a  href="adminheader.html">Home</a>
  <a  href="viewproducts.php">View all products</a>
  <a  href="deleteproducts.php">delete products</a>
  <a class="active" href="insertproducts.php">Insert products</a>
  <a href="order.php">Orders</a>
  <a href="logout.php">logout</a>
</div>
<?php include('adminname.php'); ?>
	
	<form action="insertproducts.php" method="post" enctype="multipart/form-data">
		<div style="width:100%" class="a">
		<label for='category'>Category:</label><br>
		<input type="text" name="category" placeholder="Enter category" required><br><br>
		<label for='category'>Brand:</label><br>
		<input type="text" name="brand" placeholder="Enter brand" required><br><br>
		<label for='category'>Fullname:</label><br>
		<input type="text" name="fullname" placeholder="Enter fullname" required><br><br>
		<label for='category'>Price:</label><br>
		<input type="text" name="price" placeholder="Enter price" required><br><br>
		<label for='category'>Description:</label><br>
		<input type="text" name="description" placeholder="Enter description" required><br><br>
		<label for='category'>Image:</label><br>
		<input type="file" name="image"><br><br>
		<input type="submit" value="Insert" name="insertbtn">
		</div>
	</form>
	<?php 
	if(isset($_SESSION['username']))
	{
	
		if(isset($_POST['insertbtn']))
		{
			$image=$_FILES['image']['tmp_name'];
			
			$images = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			
			$category= $_POST['category'];
			$brand= $_POST['brand'];
			$fullname=$_POST['fullname'];
			$price=$_POST['price'];
			$description=$_POST['description'];
			include('config.php');
			$sql = "INSERT INTO `products`(`prod_category`, `prod_brand`, `prod_fullname`, `prod_price`, `prod_desc`, `prod_image`) VALUES ('$category', '$brand', '$fullname','$price','$description','$images')";
			if(mysqli_query($con, $sql)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

				mysqli_close($con);
			
			
		}
		
	}
	else{
		header('location:admin_login.html');
	}
	?>
	
	
	</body>


<html>