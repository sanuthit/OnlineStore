<?php
	include_once'config.php'; //link with config.php
?>
<?php
    $id=$_GET['id'];

    $query="DELETE from item WHERE Item_id='$id'";

    $data=mysqli_query($conn,$query);
    
	if($data){
		echo"<script>alert('Record Update!')</script>";
	}
	else{
    		echo"<script>alert('Record not Update!')</script>";
	}
    mysqli_close($conn);
?>