<?php 
session_start();
if(isset($_SESSION['username'])){


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>welcome,<?php echo $_SESSION['username'];?></h2>
click here to <a href="logout.php">logout</a>
</body>
</html><?php
}
else{
	header("location:login.php");
}

?>