<?php
include "header.php";
if(isset($_POST['deletebtn'])){
    $stu_id=$_POST['id'];
$con=mysqli_connect("localhost","root","","crud") or die("connection failed");

$sql="DELETE FROM `student` WHERE id='$stu_id'";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
header('Location: http://localhost/crud/index.php');
mysqli_close($con);
}

?>
<h1>Delete data</h1>
<div class="conatainer form-sm">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
 <div class="item item-sm">
    <label for="">Id 
        <input type="text" name="id" >
    </label><br><br>
    <input type="submit" value="delete" name="deletebtn" class="submit">
</div>
</form>
</div>