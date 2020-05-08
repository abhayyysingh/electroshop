<?php 
session_start();
?>
<head>
<link rel="stylesheet" href="adminstyle.css">
</head>
<div class="topnav">
  <a  href="adminheader.html">Home</a>
  <a  href="viewproducts.php">View all products</a>
  <a  href="deleteproducts.php">delete products</a>
  <a  href="insertproducts.php">Insert products</a>
  <a class="active" href="order.php">Orders</a>
  <a href="logout.php">logout</a>
</div>

<?php
if(isset($_SESSION['username']))
{include('adminname.php');
include('config.php');
$sql = "SELECT * FROM `order` ";
$result = $con->query($sql);
echo "<table border='1' >"."<th>Order id</th>"."<th>User name</th>"."<th>Txn_amount</td>"."<th>Quantity</th>"."<th>Product id</th>"."<th>address</th>"."<th>Phone No</th>"."<th>Email</th>"."</table>";
echo "<hr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$b="Rs";
		//$price=$row['prod_price'];
		//$a= '<img src="data:image/jpeg;base64,'.base64_encode($row['prod_image'] ).'" height="100" width="100"/>';
         echo "<table    ><tr><td>".$row['order_id']."</td><td>" . $row["uname"]. "</td>  <td> " . $row["txn_amount"]."Rs"."</td>  <td>".$row["quantity"]."</td>  <td>".$row["prod_id"]."</td><td>".$row["address"]."</td><td>".$row["phon_no"]."</td><td>".$row["email"]."</td><td>".$row["date"]."</td>";
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