<?php session_start(); ?>
<html>
<head>
<link rel="stylesheet" href="styleheadersidebar.css">
</head>

<body>

<?php 

include_once 'sidebar.html';
if(isset($_SESSION['uname']))
{
?>
<a href="account.php"   class="uname"><?php echo "Welcome ".$_SESSION['uname']; ?></a>
<?php
}
else{
	
	?>
	<label class="uname">Welcome Guest</label>
	<?php
}
?>
</body>

</html>