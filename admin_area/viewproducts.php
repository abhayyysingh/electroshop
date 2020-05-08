
<?php 
session_start();
?>
<head>
<link rel="stylesheet" href="adminstyle.css">
</head>
<div class="topnav">
  <a  href="adminheader.html">Home</a>
  <a class="active" href="viewproducts.php">View all products</a>
  <a href="deleteproducts.php">delete products</a>
  <a href="insertproducts.php">Insert products</a>
  <a href="order.php">Orders</a>
  <a href="logout.php">logout</a>
</div>

<?php
if(isset($_SESSION['username']))
{
include('adminname.php');
include('config.php');
$sql = "SELECT * FROM products";
$result = $con->query($sql);
echo "<table border='1' >"."<th>Product id</th>"."<th>Image</th>"."<th>Category</td>"."<th>Brand</th>"."<th>Name</th>"."<th>Price</th>"."<th>Description	</th></table>";
echo "<hr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$b="Rs";
		$price=$row['prod_price'];
		$a= '<img src="data:image/jpeg;base64,'.base64_encode($row['prod_image'] ).'" height="100" width="100"/>';
         echo "<table    ><tr><td>".$row['prod_id']."</td><td>" . $a."</td>  <td>". $row["prod_category"]. "</td>  <td> " . $row["prod_brand"]."</td>  <td>".$row["prod_fullname"]."</td>  <td>".$row["prod_price"].$b. "</td><td>".$row["prod_desc"]."</td>";
		echo "</table>";
		echo "<hr>";
	}
} else {
    echo "0 results";
}
$con->close();
}
else{
	header('location:admin_login.html');
}
?>