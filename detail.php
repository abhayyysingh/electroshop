 <html>
 <head>
<link rel="stylesheet" href="styleheadersidebar.css">
<style>
	body{
	padding:10px;
	}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1);
  width: 220px;
  height:330px;  
  text-align: center;
  font-family: arial;
  float:left;
  padding:5px;
  margin-top:25px;
 margin-left:650px;
  margin-right:90px;
  background-color:white;
}
.price {
  color: grey;
  font-size: 22px;
}
.card button:hover {
  opacity: 0.7;
}
 </style>
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
 </html>
 <?php
include_once 'abc.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$row_id=$_GET['row_id'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {	
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM products WHERE prod_id ='$row_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<div='corona'>";
    while($row = $result->fetch_assoc()) {
		$aaa=$row['prod_id'];
		$price=$row['prod_price'];
		echo "<div class='card'>";
		$a= '<img src="data:image/jpeg;base64,'.base64_encode($row['prod_image'] ).'" height="100" width="100"/>';
		echo $a."<br>";
		echo "catagory: ".$row["prod_category"]."<br>";
		echo "brand:  ".$row["prod_brand"];
		echo "<h3>".$row['prod_fullname']."</h3>";
		echo "Price:  "."<label class='price'>".$row['prod_price']."</label></br>";
		echo "Description: ".$row['prod_desc'];
		?>
		<form method="GET" action="cart.php">
	<input type="hidden" name="cart" value="<?php echo $row_id; ?>">
	<input type="submit" name="addtocart" value="Add To Cart" style='padding:1px; width:100%;height:40px; background-color:blue;color:white'  >
		<?php echo "</form>";
		echo "</div>";
	}
}
echo "<br>";
echo "</div>";
?> 
</form>
<form action="shopnow.php" method="POST" class="shopnow">
<label><b>-or-</b></label><br>
<br>
<label>Quantity</label><br>
<input type="text" name="quantity"  placeholder="enter quantity" required>
</br>
<input type="hidden" name="price" value="<?php echo $price; ?>">
<input type="hidden" name="row_id" value="<?php echo $row_id; ?>"><br>
<input type="submit" name="shopnow" value="Shop Now" >
</form>
</body>
<?php include_once 'footer.html';?>
</html>