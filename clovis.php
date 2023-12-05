<?php
include 'include.php';
$x=$_POST['fname'];
$y=$_POST['sname'];
$z=$_POST['email'];
$a=$_POST['pwd'];
$b=$_POST['pwd_conf'];
$c=$_POST['box'];


$selct="SELECT * FROM `dashbord` WHERE email='$x'";
$quel=mysqli_query($connect,$selct);

if ($_POST['pwd'] === $_POST['pwd_conf']) {
	$insert="INSERT INTO `dashbord`(`Id`, `First_Name`, `Last_Name`, `Email`, `Password`, `Confirmed_Password`, `Agreement`) VALUES (NULL,'$x','$y','$z','$a','$b','$c')";
$quely=mysqli_query($connect,$insert);
if ($quely) {
	header('location:index.php');

}else {
	echo "<script>alert('Try Again');location.href='read.php'</script>";
}
}elseif ($_POST['pwd'] != $_POST['pwd_conf']){
	echo "<script>alert('Try Again , Password don't match');location.href='read.php'</script>";
}


?>