<?php 

include('header.php')?>
<body>
    <h1>Insert a data</h1>
    <div class="conatainer">
        <form action="add.php" method="post">
            <div class="item">
                <label for="">
                    Name :<input type="text" name="name" id="" placeholder="Enter your Name..." required>
                </label><br>
                <label for="">
                    Mobile : <input type="number" name="mobile" id="" placeholder="Enter your Mobile Number..." required>
                </label><br>
                <label>Class: </label>
                <select  name="cid">
                    <option value="" selected disabled>Select Course Name..</option>
                    <?php
                        $con=mysqli_connect("localhost","root","","crud") or die("connection failed");
                        $sql="SELECT * FROM st_dep";
                            $result=mysqli_query($con,$sql) or die("Query unsuccessfull.");
                    while ($rows= mysqli_fetch_assoc($result)) {
                        ?>
                        
                    <option value="<?php echo $rows['cid'] ?>" > <?php echo $rows['cname'] ?></option>
                    <?php } ?>
                </select><br>
                <label for="">
                    Address: <input type="text" name="address" id="" placeholder="Enter your current Address..." required>
                </label><br>
                <input type="submit"  class="submit" value="Save" />
            </div>
        </form>
    </div>
</body>