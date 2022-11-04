<?php 

include('header.php')?>
<h2>All Recorded Show</h2>
<?php
$con=mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql="SELECT * FROM `student`JOIN st_dep WHERE student.cid=st_dep.cid";
$result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
if(mysqli_num_rows($result) > 0){
?>
<table class="center">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Class</th>
      <th>Mobile</th>
      <th>Address</th>
      <th>Action</th>
    </tr>
    <tbody>
    <?php
    while($rows=mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo $rows['id'] ?></td>
      <td><?php echo $rows['name'] ?></td>
      <td><?php echo $rows['cname'] ?></td>
      <td><?php echo $rows['mobile'] ?></td>
      <td><?php echo $rows['address']  ?></td>
      <td> 
         <input type="submit" class="submit btn" value="Edit">
           <input type="submit" class="submit btn-sm" value="Delete">
           
      </td>
    </tr>
    </tbody>
    <?php } ?>
  </table>
<?php } else{
  echo "NO Record Found";
}
?>
</body>
</html>