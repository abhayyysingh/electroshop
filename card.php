<!DOCTYPE html>
<html>

<style>
body{
	padding:10px;
}
.corona{
	
	padding-top:0px;
	margin-left:240px;
	padding-bottom:100px;
	
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
  width: 240px;
  height:470px;  
  text-align: center;
  font-family: arial;
  float:left;
  padding:20px;
  margin-top:10px;
  margin-left:20px;
 
  
  background-color:rgb(245,240,245);

  
}
.card img{
	width:100%;
	height:50%;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.9);
}

.price {
  color: grey;
  font-size: 22px;
}

.card submit {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>


<?php 
/* $servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {	
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
 */
 echo "<div class='corona'>";
if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		echo "";
		echo "\n";
		echo "<form action='detail.php' method='GET'>";
		//print_r($row);
		//echo "<br>";
		$aaa=$row['prod_id'];
		echo "<div class='card'>";
		$a= '<img src="data:image/jpeg;base64,'.base64_encode($row['prod_image'] ).'" height="100" width="100"/>';
		echo $a."<br>";
		echo "catagory: ".$row["prod_category"]."<br>";
		echo "brand:  ".$row["prod_brand"];
		echo "<h3>".$row['prod_fullname']."</h3>";
		echo "Price:  "."<label class='price'>".$row['prod_price']."</label></br>";
		echo "Description: ".$row['prod_desc'];
		echo "<input type='hidden' name='row_id' value='$aaa'>"."<br>";;
		echo  "<input type='submit' class='details' value='Details' onClick='detail()'  style='padding:1px; width:100%;height:40px; background-color:black;color:white;' >";
		echo "</form>";
		
		echo "</div>";
		
	}
}
echo "</div>";

?>



