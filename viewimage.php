<?php
$con=mysqli_connect("localhost","root","","skillup");
if ($con) {
	echo "connected";

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	.alb{
	width:200px;
	height: 120px;
	padding: 1px;
}
.alb img{
	height: 100px;
	width: 100px;
}

</style>
</head>
<body>
<?php

$sel="SELECT * FROM upload  ORDER BY id asc";
$quer=mysqli_query($con,$sel);

 if(mysqli_num_rows($quer)>0){
 	while ($images=mysqli_fetch_assoc($quer)) {?>
<div class="alb">
	<img src="upload/<?=$images['doocument']?>">

</div>

 		<?php
 	}
 }
?>
</body>
</html>