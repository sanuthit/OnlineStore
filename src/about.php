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
	
	<?php
	define("com_name","Shopping Cart");
	echo"<h2>About ".com_name."</h2>";
	echo"This page is mainly about the ".com_name." web site.<br>";
	
	$sold = 75;
	$total = 100;
	
	echo"The Shopping Cart,<br>";
	echo"No of Sold Items : ".$sold."<br>";
	echo"No of total Items : ".$total."<br>";
	
	function findPercentage()
	{
		global $sold;
		global $total;
		
		$percentage = ($sold/$total)*100;
		return $percentage;
	}
	echo "Percentage of sold items : ".findPercentage()."<br>";

	echo "For ".date("d/m/Y")."(Today is ".date("l").") 24 items has<b> ";
	
	$date1=date_create(date("Y-m-d"));
	$shipDay=date_create("2022-5-24");
	$diff=date_diff($date1,$shipDay);
		
	if($diff->format("%R%a")> 0 )
	{
		$status="to be shipped.";
	}
	else
		$status="shipped.";
	
	echo"$status</b><br><br>";
	
	$item = array("Iphone"=>27,"Iphone X"=>30,"Iphone XS Max"=>12,"Iphone XR"=>29);
	echo"<table><tr><th>Item</th><th>No of sold items</th></tr><center>";
	foreach($item as $x=>$x_value)
	{
		echo"<tr><td>$x</td><td>$x_value</td></tr>";
	}
	echo"</center></table>";
	?>
	
	<hr>
	<footer>
	<center>
	<p>Created by: Sachiya</p>
	<a href="https://courseweb.sliit.lk/login/">Visit to Our course</a>
	</center>
</body>
</html>
