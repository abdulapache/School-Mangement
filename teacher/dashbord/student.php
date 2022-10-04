<?php
include 'connect.php';
include 'header.php';
include 'footer.php';
?>
        
            <div class="content">
               <h3>Student</h3>
    
      
    <button>
        <a href="studentadd.php">+Add Student
        </a></button>
     

    
          <table border=2 bordercolor=green align=center width=900>
          <form action="studentsearch.php" method="post">
            <div class="input-group">

              <input type="search" name="search" placeholder="search">
               <div class="input-group-append">
          <button2 class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button2>
        </div>
            </div>
          </form>



            <tr align=center>
              
              <th>Name</th>
              <th>Fname</th>
              <th>Phone</th>
              <th>Course</th>
              <th>CNIC</th>
              <th>Username</th>
              <th>Password</th>
              <th>Address</th>
              <th>Pic</th>
              <th>Edit</th>
              <th>Update</th>
            </tr>
           <?php
           $query="SELECT * FROM student WHERE t_id='".$id."'";
           $q=mysqli_query($con,$query);
           while($row=mysqli_fetch_array($q)){

           ?>

            <tr align=center>
              
              <td><?php echo $row['s_name']?></td>
              <td><?php echo $row['s_fname']?></td>
              <td><?php echo $row['s_phone']?></td>
              <td><?php echo $row['s_course']?></td>
              <td><?php echo $row['s_cnic']?></td>
              <td><?php echo $row['s_username']?></td>
              <td><?php echo $row['s_password']?></td>
              <td><?php echo $row['s_address']?></td>
              <td>
               <img src="upload/<?php echo $row['s_pic']?>" width=30>
              </td>
              <td>
                
                <button1>
                <a href='teacherdelete.php?r=<?php echo $row['s_id']?>' onclick="confirm('are you sure');">Delete</a>
                </button></td>
                <td>
                
                <button1>
                  <a href='studentdelete.php?r=<?php echo $row['s_id']?>'>Edit</a>
               </button> 
               </td>
            </tr>
            <?php
}
            ?>
          </table>
    </div>
    
</body>
</html>





