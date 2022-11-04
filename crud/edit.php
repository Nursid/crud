<?php 
include('header.php')?>
    <h2>Edit a  data</h2>
    <?php
$con=mysqli_connect("localhost","root","","crud") or die("connection failed");
$stu_id=$_GET['id'];
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
                    <input type="text" name="name" id="" placeholder="Enter your Name..." value="<?php echo $row['name']; ?>">
                </label><br>
                <label for="">
                    Mobile : <input type="number" name="mobile" id="" placeholder="Enter your Mobile Number..." value="<?php echo $row['mobile']; ?>">
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
            <?php } ?>
        </form>
    </div>
    <?php } ?>