<?php
echo    $s_id=$_POST['id'];
echo	$s_name=$_POST['name'];
echo	$s_moblie=$_POST['mobile'];
echo   $s_address=$_POST['address'];
echo    $s_class=$_POST['cid'];
 $con=mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql="UPDATE `student` SET `name`='$s_name',`mobile`='$s_moblie',`address`='$s_address',`cid`='$s_class' WHERE id='$s_id'";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
header('Location: http://localhost/crud/index.php');
mysqli_close($con);
?> 