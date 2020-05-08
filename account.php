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
  <li><a  href="services.php">Service</a></li>
  <li><a href="contactus.php">Contact us </a></li>
  <li> <a href="login.html" class="login">Log In </a></li>
  <li> <a href="logout.php" class="logout">Log out </a></li>
</ul>
<?php
include_once 'abc.php';
if($_SESSION['uname'])
{
	$username=$_SESSION['uname'];
	include('config.php');
	$sql = "SELECT * FROM `order`  WHERE uname ='$username'";
	$result = $con->query($sql);
	$prod_id=array();
	$order_id=array();
	$txn_amount=array();
	$date=array();
	$quantity=array();
$i=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$b="Rs";
		$prod_id[$i]=$row["prod_id"];
		$order_id[$i]=$row["order_id"];
		$txn_amount[$i]=$row["txn_amount"];
		$quantity[$i]=$row["quantity"];
		$date[$i]=$row['date'];
		$i=$i+1;
	}
} else {
    echo "0 results";
}
$prod_fullname=array();
$prod_image=array();
$j=0;
foreach($prod_id as $val)
{
	$sql2 = "SELECT * FROM `products` WHERE `prod_id` ='$val'";
	$result2 = $con->query($sql2);
	if ($result2->num_rows > 0) {
		while($row = $result2->fetch_assoc()) {
			$prod_fullname[$j]=$row['prod_fullname'];
			$prod_image[$j]=$row['prod_image'];
			$j++;
		}
	}
}
$count=count($prod_id);
$k=0;
	echo "<table class='or'>";
   echo '<th>Order id</th><th>Total Price</th><th>Quantity</th><th>Date & Time</th><th>Product Name</th><th>Product Image</th>';
	echo "</table>";
for($k=0;$k<$count;$k++)
{
   ?>
   <body>
   <table class="order" >
   <tr><td><?php print_r($order_id[$k]) ?></td>  <td><?php print_r($txn_amount[$k]);echo " Rs"?></td>  <td><?php print_r($quantity[$k])?></td> <td><?php print_r($date[$k]) ?></td> <td><?php print_r($prod_fullname[$k])?></td>  <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($prod_image[$k]).'" height="100" width=100%/>' ?></td>  </tr><table>
   </body>
   <?php
echo "<hr>";
}		
}
 include_once 'footer.html';
?>