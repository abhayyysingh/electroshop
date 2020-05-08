<html>
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
  <li><a class="active" href="contactus.php">Contact us </a></li>
  <li> <a href="login.html" class="login">Log In </a></li>
  <li> <a href="logout.php" class="logout">Log out </a></li>
</ul>
<?php
include_once 'abc.php';
?>
<div class="about">
<table>
<th>
About us
</th>
<tr><td>
This site does the same work as of the Affiliate marketing site, but not for the sake of commission or earning money, instead helping the customer to get true views and good product in valid price. In our site we will include those site which are well licensed and well known for their product so that customer do not feel cheated or fooled. We will provide long term services for a product brought by a site preferred by us to the customer, even if the warranty of the product is expired, we will help the customer to get it repaired or updated with the applicable charges. It will compare the shopping site including their prices, availability of product, etc and give first preference to the best one by considering all points. Through our site no extra charges will be applied .
</td></tr>
<th>
Contact Us
</th>
<tr>
<td class="zaq">
<div class="profilecard">
  <img src="abhay.jpg" alt="Avatar" style="width:100%;height:400px">
  <div class="profile">
    <h4><b>Abhay Singh</b></h4> 
    <p>TYBsc Computer Science</p> 
  </div>
</div>
<td>
</tr>
<tr><td>
<b>Email Id :- </b>abhayyysingh@gmail.com
<td></tr>
<tr>
<td>
<b>Mobile No :- </b>+91 8329617984
</td>
</tr>
</table>
</div>
<?php
include_once 'footer.html';
?>
</html>