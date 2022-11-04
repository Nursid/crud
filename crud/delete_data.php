<?php 
$stu_id=$_GET['id'];
$con=mysqli_connect("localhost","root","","crud") or die("connection failed");

$sql="DELETE FROM `student` WHERE id='$stu_id'";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
header('Location: http://localhost/crud/index.php');
mysqli_close($con);
?>
