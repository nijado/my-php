
<?php
$con=mysqli_connect("localhost","root","","skillup");
if ($con) {
	echo "connected";

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>uplaod the image</title>
</head>
<body>

 
<form action="" method="POST" enctype="multipart/form-data">

<input type="file" name="file1" >	
<input type="submit" name="upload" value="upload">


<a href="viewimage.php"><input type="button" name="view" value="view uploaded image" style="background-color: green;color: white;"></a>-->
</form>
<?php
if(isset($_POST['upload'])){
	$filename=$_FILES['file1']['name'];
	$filetmpname=$_FILES['file1']['tmp_name'];
	$path="files/".$filename;
	if ($filename!="") {
	
	

	$query= "INSERT INTO upload(doocument) VALUES('$filename')";
	$run=mysqli_query($con,$query);
	if($run ){
		

		move_uploaded_file($filetmpname, $path);
		echo"success";
	}
	else {
		echo "no file selected";
		}


}else {
		echo "no file selected";
		}

} 
    



?>




</body>
</html>