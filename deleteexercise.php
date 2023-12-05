<?php 
$con=mysqli_connect("localhost","root","","skillup");
if ($_GET['id']) {
	$m=$_GET['id'];
 
	$del="DELETE FROM reg   WHERE id='".$m."'";
	$query=mysqli_query($con,$del);
	if ($query) {
		echo "<script>alert('DELETED WELL');location.href='exercises1.php';</script>";
	}
	else
	{
		echo "<script>alert('Not DELETED WELL');location.href='exercises1.php';</script>";

	}
}





 ?>