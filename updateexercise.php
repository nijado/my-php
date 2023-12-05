<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
$con=mysqli_connect("localhost","root","","skillup");
if ($con) {
	echo "connected";
}
else{
	echo "not connected";
}
?>


<center><h3 ><u>UPDATE  FORM</u></h3>

<?php
$id=$_GET['id'];
$sel="SELECT * FROM reg WHERE id='".$id."'";
$selx=mysqli_query($con,$sel);

$fet=mysqli_fetch_array($selx);
$a=$fet['id'];
$b=$fet['fname'];
$c=$fet['lname'];
$d=$fet['age'];
$e=$fet['location'];

?>
<table border="0">
	<form action="" method="POST">
		
    <tr>
    	<td>firstname</td><td><input type="text" name="fname" value="<?php echo $b;?>"></td>
    </tr>
    <tr><td>lastname</td><td><input type="text" name="lname" value="<?php echo $c;?>"></td></tr>
    <tr><td>age</td><td><input type="number" name="age" value="<?php echo $d;?>"></td> </tr>
    <tr><td>location</td><td><input type="text" name="loc" value="<?php echo $e;?>"></td></tr>
    <tr><td><input type="submit" name="update" value="UPDATE" ></td></tr>


	</form>
 <?php
                   if (isset($_POST['update'])) {

                      
                      $student=$_POST['fname'];
                      $email=$_POST['lname'];
                      $regno=$_POST['age'];
                      $level=$_POST['loc'];
                      
                      

                  

                         $UpQuery="UPDATE `reg` SET fname = '$student', lname='$email', age='$regno', location='$level' WHERE `reg`.`id` = '".$id."'";
                         $up=mysqli_query($con,$UpQuery);
                         if ($up) {
                           echo "<script>alert('well updated');location.href='exercises1.php';</script>";
                         }
                         }
                           ?>



</table>
</center>



</body>
</html>