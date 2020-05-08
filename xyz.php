

<html>
<head>
<link rel="stylesheet" href="styleheadersidebar.css">
</head>
<body>
<form action="search.php" method="GET">
<ul class="nav">

	<div class="logo"><img src="electroshop_logo.jpg" alt="Logo" style="width:500px;height:120px; " >
	<input type="submit" value="search">
	<input type="text" placeholder="Search.." name="searchkey" ></input></div>
	</form>
  <li><a class="active" href="xyz.php">Home</a></li>
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
 
/* if(!isset($_SESSION)) 
    { 
        session_start(); 
    }  */
 include_once 'abc.php';
 
include "config.php";
include "slider.html";
$sql = "SELECT prod_id,prod_category, prod_brand, prod_fullname, prod_price, prod_desc, prod_image FROM products ORDER BY RAND()";
$result = $con->query($sql);

 include('card.php');
$con->close();

?>

<br><br><br>
<?php include_once 'footer.html';?>

</body>
</html>