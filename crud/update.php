<?php 
include('header.php')?>
<h1>Update date </h1>
<div class="conatainer form-sm">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
 <div class="item item-sm">
    <label for="">Id 
        <input type="text" name="id" >
    </label><br><br>
    <input type="submit" value="show" name="showbtn" class="submit">
</div>
</form>
</div>
<?php
if(isset($_POST['showbtn'])){
    $con=mysqli_connect("localhost","root","","crud") or die("connection failed");
    $stu_id=$_POST['id'];
    $sql="SELECT * FROM `student` WHERE id={$stu_id}";
    $result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
?>
<div class="conatainer">
        <form action="updatedata.php" method="post">
            <div class="item">
                <label for="">Name :
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                </label><br>
                <label for="">
                    Mobile : <input type="number" name="mobile" value="<?php echo $row['mobile']; ?>">
                </label>
               <br>
                <label>Class: </label>
                    <?php
                        $sql1="SELECT * FROM st_dep";
                       $result1=mysqli_query($con,$sql1) or die("Query unsuccessfull.");
                    if(mysqli_num_rows($result1) > 0) {
                        echo '<select  name="cid">';
                        while($row1=mysqli_fetch_assoc($result1)){
                            if($row['cid']==$row1['cid']){
                                $select="selected";
                            }
                            else{
                                $select="";
                            } 
                    echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
                }
                echo "</select>";
            } 
                 ?>
                    <br>
                    <label for=""> 
             Address: <input type="text" name="address" id=""  value="<?php echo $row['address']; ?>">
                </label>
                <input type="submit"  class="submit" value="update" />
            </div>
        </form>
        <?php
         }
        }
    }
    ?>
</div>
</body>
</html>