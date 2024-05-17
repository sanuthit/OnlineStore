<?php
    session_start();
    include_once'config.php'; //link with config.php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username=$_POST["uname"];
        $password=$_POST["pass"];
		
		$sql="SELECT * FROM user WHERE Username='$username'&& Password='$password'";
		$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result)>0)
		{
			$row=mysqli_fetch_assoc($result);
			if($row['Username']===$username&& $row['Password']==$password){
				$_SESSION["USER"]=$row['Username'];
				header("Location:welcome.php");
			}
		   else
			{
				echo"<script>alert('Your login invalid!')</script>";
				header("Location:login.php");
			}
		}else{
			header("Location:login.php");
		}
	}
	mysqli_close($conn);
?>

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
        <h1>Login</h1>
	<form action="" method="POST">
        <input type="text" id="uname" name="uname" placeholder="username"/><br><br>
        <input type="password" id="pass" name="pass" placeholder="password"/><br><br>
        <input type="submit" value="Login"><br>
	</form>
	</center>
	<footer>
	<center>
	<p>Created by: Sachiya</p>
	<a href="https://courseweb.sliit.lk/login/">Visit to Our course</a>
	</center>
</body>
</html>
