<head>
<link rel="stylesheet" href="styleheadersidebar.css">
</head>
<form action="search.php" method="GET">
<ul class="nav">
	<div class="logo"><img src="electroshop_logo.jpg" alt="Logo" style="width:500px;height:120px; " >
	<input type="submit" value="search">
	<input type="text" placeholder="Search.." name="searchkey" ></input></div>
	</form>
  <li><a  href="xyz.php">Home</a></li>
  <li><a href="viewcart.php">Cart</a></li>
  <li><a href="services.php">Service</a></li>
  <li><a href="contactus.php">Contact us </a></li>
  <li> <a href="login.html" class="login">Log In </a></li>
  <li> <a href="logout.php" class="logout">Log out </a></li>
</ul>
<script>
 function detail()
{
	window.location.href="cart.php";
}
</script>
<?php
include_once 'abc.php';
$brand=$_GET['q'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
if(isset($brand))
{
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {	
    die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM products WHERE prod_brand ='$brand'";
	$result = $conn->query($sql);
	echo "<table  class='xyz' >"."<th></th>"."<th>Category</td>"."<th>Brand</th>"."<th>Name</th>"."<th>Price</th>"."<th>Description	</th>";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$b="Rs";
			$prod_id=$row['prod_id'];
			$a= '<img src="data:image/jpeg;base64,'.base64_encode($row['prod_image'] ).'" height="100" width="100"/>';
			echo "<table  class='zzz' ><tr><td>" . $a."</td>  <td>". $row["prod_category"]. "</td>  <td> " . $row["prod_brand"]."</td>  <td>".$row["prod_fullname"]."</td>  <td>".$row["prod_price"].$b. "</td><td>".$row["prod_desc"]."</td><td>";
			echo "<form action='cart.php' method='get'>";
			echo "<input type='hidden' name='cart' value='$prod_id'>"."<br>";
			echo  "<td><input type='submit'  value='Detail' name='detail' ></form></td>";
			echo "</table>";
			}
	}else {
		echo "<script>alert('This product is out of stock')</script>";
		echo "<script>window.history.back();</script>";
	}
	$conn->close();
}
else{
	echo "<b>"."404 ERROR PAGE NOT FOUND"."</b>";
}
include_once 'footer.html';
 ?>