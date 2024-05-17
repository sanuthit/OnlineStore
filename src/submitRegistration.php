<!DOCTYPE html>
<html>
<head>
	<title>My Shopping Cart</title>
	<link rel="stylesheet" href="styles\styles.css">
	<script src ="js\myScript.js"></script>
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
	<h1 style="text-align:center;">Registration Form</h1>
   <center>
        <fieldset><legend><h2>Personal Details</h2></legend>
        <?php
            echo"Name: ".$_POST["fname"]."&nbsp".$_POST["lname"]."<br>";
            echo"Gender: ".$_POST["gender"]."<br>";
            echo"Mobile: ".$_POST["phone"]."<br>";
            echo"Email: ".$_POST["mail"]."<br>";
            echo"Address: ".$_POST["address"]."<br>";
            echo"DOB: ".$_POST["dob"]."<br>";
        ?>
        </fieldset>
    </center>
	<footer>
	<center>
	<p>Created by: Sachiya</p>
	<a href="https://courseweb.sliit.lk/login/">Visit to Our course</a>
	</center>
</body>
</html>
