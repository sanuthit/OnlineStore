<?php
    session_start();
?>
<?php
	include_once'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Shopping Cart</title>
	<link rel="stylesheet" href="styles\styles.css">
	
</head>
<body>
	
	<img class="logo" src ="images\shopping cart.png" 
							alt ="shopping cart" width="200" height="200" >
	<h2>Shooping Cart</h2>
	<h3>The online shopping store</h3>
	<hr>
	<ul id="ul1" >
		<li id="li1"><a href="index.html">Home</a></li>
		<li id="li1"><a href="news.html">News</a></li>
		<li id="li1"><a href="register.html">Contact</a></li>
		<li id="li1"><a href="about.php">About us</a></li>
	</ul>
    <center><h1><?php echo $_SESSION['USER'] ?></h1></center>
	<hr>
	<footer>
	<center>
	<p>Created by: Sachiya</p>
	<a href="https://courseweb.sliit.lk/login/">Visit to Our course</a>
	</center>
</body>
</html>
