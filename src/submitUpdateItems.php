 <?php
	include_once'config.php'; //link with config.php
?> 
<?php
	if($_GET['submit']){
		$item_id=$_GET['field0'];
		$item_name=$_GET['field1'];
		$item_description=$_GET['field2'];
		$price=$_GET['field5'];
		$quantity=$_GET['field3'];
		$item_code=$_GET['field4'];
		
		$query = "UPDATE item SET
					Item_name='$item_name',Item_description='$item_description',
					Price='$price',Quantity='$quantity',Item_code='$item_code' WHERE Item_id='$item_id'";
		$data=mysqli_query($conn,$query);
		
		if($data){
			echo"<script>alert('Record Update!')</script>";
		}
		else{
			echo"<script>alert('Record not Update!')</script>";
		}
	}
	mysqli_close($conn);

?>