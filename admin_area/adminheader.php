<?php
session_start();
if(isset($_SESSION['username']))
{
 ?>


<html>
<head>
<link rel="stylesheet" href="adminstyle.css">
</head>

<body>
</head>
<body>

<div class="topnav">
  <a  class="active" href="adminheader.html">Home</a>
  <a  href="viewproducts.php">View all products</a>
  <a href="deleteproducts.php">delete products</a>
  <a href="insertproducts.php">Insert products</a>
  <a href="order.php">Orders</a>
  <a href="logout.php">logout</a>
</div>


<div style="padding-left:16px">
  <h2>Admin Page</h2>
  <p>Admin is a Authentic person who have the permission to change the products and add new products or delete products and view all the orders</p>
</div>

</body>
</html>


</body>

</html>

<?php
}
else{
header('location:admin_login.html');
}
 ?>