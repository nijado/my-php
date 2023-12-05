<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/x-icon" href="Capture.png" height="40px">
</head>
<body>

<center><h3 ><u> REGISTRATION FORM</u></h3>

<table border="0">
	<form action="" method="POST">
		
    <tr>
    	<td  ">firstname</td><td><input type="text" name="fname"></td>
    </tr>
    <tr><td>lastname</td><td><input type="text" name="lname"></td></tr>
    <tr><td>age</td><td><input type="number" name="age"></td> </tr>
    <tr><td>location</td><td><input type="text" name="loc"></td></tr>
    <tr><td><input type="submit" name="register" value="register"></td></tr>


	</form>




</table>
</center>

<?php  
$con=mysqli_connect("localhost","root","","skillup");
if ($con) {
	echo "connected";
}
else{
	echo "not connected";
}
?>
<?php 
if (isset($_POST['register'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$age=$_POST['age'];
	$loc=$_POST['loc'];
  $insert="INSERT INTO `reg`(id,fname,lname,age,location) 
  VALUES(NULL,'".$fname."','".$lname."','".$age."','".$loc."')";
  $insx=mysqli_query($con,$insert);
  if ($insx) {
  	echo "insetrtrt";
  }
  else{
  	echo "not inserted";
  }

}

 ?>

<table border="1" class="table" >
	<tr class="success "><th>id</th><th>firstname</th> <th>lastname</th> <th>age</th> <th>location</th><th>action</th></tr>

<?php

$sel="SELECT * FROM reg";
$selx=mysqli_query($con,$sel);
$q=1;
while($fet=mysqli_fetch_array($selx)){
$a=$fet['id'];
$b=$fet['fname'];
$c=$fet['lname'];
$d=$fet['age'];
$e=$fet['location'];

?>
<tr> <td><?php echo "$a";?></td>   <td><?php echo "$b";?></td>   <td><?php echo "$c";?></td>  <td><?php echo "$d";?></td>  <td><?php echo "$e";?></td><td><a href="deleteexercise.php?id=<?php echo $fet['id'];?>"><input type="submit" name="deete" value="delete"></a></td>


	<td><a href="updateexercise.php?id=<?php echo $fet['id'];?>" bgcolor="orange"><input type="submit" name="deete" value="update"></a></td> </tr>

<?php  
$q++;
}
?>
</table>

</body>
</html>