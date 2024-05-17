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
	<!--br>
	<button><a href="addItems.html">Add New</a></button>
	<br--><br>
	
	<table>
		<tr>
			<th>Item Id</th>
			<th>Item Name</th>
			<th>Item Description</th>
			<th>Price</th>
			<th>Quntity</th>   
			<th>Item Code</th>
			<th>Edit</th>   
			<th>Delete</th>
		</tr>
		<?php
		$sql = "select* from item";
		$result = $conn->query($sql); //return table value into result
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())//row is associative array,it has data of each rows
			{
				//while use for continue for last row 
				echo"<tr><td>".$row["Item_id"]."</td><td>".$row["Item_name"]."</td><td>".$row
				["Item_description"]."</td><td>".$row["Price"]."</td><td>".$row
				["Quantity"]."</td><td>".$row["Item_code"]."</td>";
				echo "<td><button><a href='editRecord.php?id=$row[Item_id] &name=$row[Item_name] &description=$row[Item_description] &price=$row[Price] &quantity=$row[Quantity]&code=$row[Item_code]'>Edit</a></button></td>";
				echo"<td><button><a href='deleteItems.php?id=$row[Item_id] '>Delete</button></td></tr>";
			}
		}else
		{
			echo "Empty Rows.";
		}
		mysqli_close($conn);
		?>
	</table>
	<hr>
	<footer>
	<center>
	<p>Created by: Sachiya</p>
	<a href="https://courseweb.sliit.lk/login/">Visit to Our course</a>
	</center>
</body>
</html>
