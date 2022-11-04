<?php
	$s_name=$_POST['name'];
	$s_moblie=$_POST['mobile'];
   $s_address=$_POST['address'];
    $s_class=$_POST['cid'];

 $con=mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql="INSERT INTO `student`(`name`, `mobile`, `address`, `cid`) VALUES ('$s_name','$s_moblie','$s_address','$s_class')";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");

header('Location: http://localhost/crud/index.php');

mysqli_close($con);
?> 