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
  <li><a class="active" href="services.php">Service</a></li>
  <li><a href="contactus.php">Contact us </a></li>
  <li> <a href="login.html" class="login">Log In </a></li>
  <li> <a href="logout.php" class="logout">Log out </a></li>
</ul>
<?php
include_once 'abc.php';
?>
<div class='name'>
<table><th>
Name:-
</th>
<th>Services:-</th>
<th>Contact No:-    </th>
			<tr></tr><tr></tr>
            <tr><td>ElectroShop  </td>  <td>Selling electronic items</td>       <td>+91-8329617984</td>
</tr></table></div>
<?php
include_once 'footer.html';
?>
</html>