<?php
	include_once'config.php'; //link with config.php
?>
<?php
	$name = $_POST["item"]; 
	$code = $_POST["code"];
	$price = $_POST["price"];//dont take itemid,because when user input same id for two item ,it cnt be uniquely identify each items
	$qun = $_POST["qun"];
	$desc = $_POST["desc"];
    
	//insert data to table
	
	$sql="INSERT INTO 
	item(Item_id,Item_name,Item_description,Price,Quantity,Item_code)VALUES('','$name','$desc',$price,$qun,$code)";//this is query
	
	//execute query
	if(mysqli_query($conn,$sql)) //predefine func.. for execute query -> mysqli_query(link,query)
	{
		//echo"<script>alert('Record Inserted Successfully.')</script>";
	    header("index.php");// if need to redirect another location
	}else
	{
		echo"<script>alert('Error Insertion.')</script>";
	}
	
	//close the connection
	mysqli_close($conn);//predefine func.. for close connection -> mysqli_close(link)
?>
	