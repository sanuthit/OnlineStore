<?php
	include_once'config.php'; //link with config.php
?>
<?php
	$item_id=$_GET['id'];
	$item_name=$_GET['name'];
	$item_description=$_GET['description'];
	$price=$_GET['price'];
	$quantity=$_GET['quantity'];
	$item_code=$_GET['code'];

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
	</ul>
	<h3 style = "text-align:center">Edit item</h4>
	
<div style="border-style:groove;border-color:Darkblue;">	
	<form action="submitUpdateItems.php" method="GET">
		<table border="0" width="25%">
		<tr>
			<td>Item Id</td>
			<td><input type="text" value="<?php echo"$item_id" ?>" name="field0" readonly></td>
		</tr>
		<tr>
			<td>Item name</td>
			<td><input type="text" value="<?php echo"$item_name" ?>" name="field1" ></td>
		</tr>
		<tr>
			<td>Item description</td>
			<td><textarea value="<?php echo"$item_description" ?>" name="field2" ></textarea></td>
		</tr>
		<tr>
			<td>Item quantity</td>
			<td><input type="text" value="<?php echo"$quantity" ?>" name="field3" ></td>
		</tr>
		<tr>
			<td>Item code</td>
			<td><input type="text" value="<?php echo"$item_code" ?>" name="field4" ></td>
		</tr>
		<tr>
			<td>Item price</td>
			<td><input type="text" value="<?php echo"$price" ?>" name="field5" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Update" ></td>
		</tr>
		</table>
	</form>
</div>

	<hr>
	<footer>
	<center>
	<p>Created by: Sachiya</p>
	<a href="https://courseweb.sliit.lk/login/">Visit to Our course</a>
	</center>
</body>
</html>
