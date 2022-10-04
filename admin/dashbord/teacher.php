<?php
include 'connect.php';
include 'header.php';
include 'footer.php';
?>
        
            <div class="content">
               <h3>Teachers</h3>
    
      
    <button>
        <a href="teacheradd.php">+Add Teacher
        </a></button>
     

    
          <table border=2 bordercolor=green align=center width=900>
          <form action="teachersearch.php" method="post">
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
              <th>Qualification</th>
              <th>Phone</th>
              <th>Subject</th>
              <th>Username</th>
              <th>Password</th>
              <th>Address</th>
              <th>Pic</th>
              <th>Edit</th>
              <th>Update</th>
            </tr>
           <?php
           $query="SELECT * FROM teacher";
           $q=mysqli_query($con,$query);
           while($row=mysqli_fetch_array($q)){

           ?>

            <tr align=center>
              
              <td><?php echo $row['t_name']?></td>
              <td><?php echo $row['t_qualification']?></td>
              <td><?php echo $row['t_phone']?></td>
              <td><?php echo $row['t_subject']?></td>
              <td><?php echo $row['t_username']?></td>
              <td><?php echo $row['t_password']?></td>
              <td><?php echo $row['t_address']?></td>
              <td>
               <img src="upload/<?php echo $row['t_pic']?>" width=30>
              </td>
              <td>
                
                <button1>
                <a href='teacherdelete.php?r=<?php echo $row['t_id']?>' onclick="confirm('are you sure');">Delete</a>
                </button></td>
                <td>
                
                <button1>
                  <a href='teacherupdate.php?r=<?php echo $row['t_id']?>'>Edit</a>
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





