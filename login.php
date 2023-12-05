<?php
session_start();
$con=mysqli_connect("localhost","root","","skillup");
if ($con) {
	echo "connected";

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body> 

<center><h3 ><u> LOGIN FORM</u></h3>
	<br>

<table border="0h">
	<form action="" method="POST">
		
    <tr>
    	<td>username:</td><td><input type="text" name="uname"></td>
    </tr><br>
    <tr><td>password:</td><td><input type="password" name="pwd"></td></tr>
    
    <tr><td><input type="submit" name="login" value="login" class="btn btn-success"></td></tr>


	</form>




</table>
</center>
<?php

if (isset($_POST['login'])) {

	$psswd=$_POST['pwd'];
	$user=$_POST['uname'];
	$sel="SELECT * FROM login where username='$user' and password='$psswd'" ;
	$q=mysqli_query($con,$sel);
	
	$fet=mysqli_fetch_array($q, MYSQLI_ASSOC);
	$row=mysqli_num_rows($q);
	$_SESSION['username']=$fet['username'];
	if ($row) {
		echo "<script>alert ('welcome to your page');location.href='welcome.php';</script>";

		
		
	}

	else{
		echo "<script> alert('invalid credentials'); location.href='login.php';</script>";
	}

}

//http://linksyssmartwifi.com/ui/dynamic/setup/change_radio_settings.html
?>
</body></html