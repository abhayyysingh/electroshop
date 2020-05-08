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
  <li><a  href="xyz.php">Home</a></li>
  <li><a href="viewcart.php">Cart</a></li>
  <li><a href="services.php">Service</a></li>
  <li><a href="contactus.php">Contact us </a></li>
  <li> <a href="login.html" class="login">Log In </a></li>
  <li> <a href="logout.php" class="logout">Log out </a></li>
</ul>
<?php
include_once 'abc.php'; 
if(isset($_SESSION['uname'])){
if(isset($_POST['price']) and isset($_POST['row_id']) and isset($_POST['quantity']) )
{
	$price=$_POST['price'];
	$row_id=$_POST['row_id'];
	$quantity=$_POST['quantity'];
	$tprice=$quantity*$price;
	$_SESSION['prod_id']=$row_id;
}
?>
<html>

<form method="post" action="Paytm/PaytmKit/pgRedirect.php" >
		<table  class="checkout">
			<tbody>
				<tr>			
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
					</td>
				</tr>
					<input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
					<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
					<input  type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
				<tr>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="5"
						type="text" name="TXN_AMOUNT"
						value="<?php  echo $tprice ?>" readonly>
					</td>
				</tr>
				<tr>
					<td><label>Quantity*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="5"
						type="text" name="quantity"
						value="<?php echo $quantity; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td><label>username*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="6"
						type="text" name="username"
						value="<?php echo $_SESSION['uname']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td><label>prod_id*</label></td>
					<td><input  title="TXN_AMOUNT" tabindex="7"
						type="text" name="prod_id"
						value="<?php echo $row_id; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td><label>Shipping address*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="7"
						type="text" name="address" required>
					</td>
				</tr>
				<tr>
					<td><label>Phone No*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="7"
						type="text" name="phon_no"
						required>
					</td>
				</tr>
				<tr>
					<td><label>Email Id*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="7"
						type="text" name="email"
						required>
					</td>
				</tr>
				<tr>
					<td></td>
					
					<td><input value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
<?php
}else{
	echo "<script>alert('login First')</script>";
	echo "<script>window.history.back();</script>";
}
include_once 'footer.html';
?>