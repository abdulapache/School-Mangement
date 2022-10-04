<?php
include 'header.php';
include 'footer.php';
include 'connect.php';
$id=$_GET['r'];
$query="SELECT * FROM teacher WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);
$row=mysqli_fetch_array($q);
?>
  





  <div class="content-wrapper">
<form action="teacherupdatedb.php?r=<?php echo $id?>" method="POST" enctype="multipart/form-data">
    <h3>Teachers</h3>
    
    
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Teacher Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['t_name']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Qualification</label>
                    <input type="text" name="qualification" class="form-control" id="exampleInputPassword1" placeholder="Enter teacher qualification" value="<?php echo $row['t_qualification']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter teacher name" value="<?php echo $row['t_phone']?>">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Subject</label>
                    <input type="text" name="subject" class="form-control" id="exampleInputPassword1" placeholder="Enter teacher subject" value="<?php echo $row['t_subject']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="email" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter teacher username" value="<?php echo $row['t_username']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter teacher password" value="<?php echo $row['t_password']?>">
                  </div>
                  
               
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter teacher address" value="<?php echo $row['t_address']?>">
                  </div>
                

                     <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="exampleInputFile" value="<?php echo $row['t_pic']?>">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                 
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

</div>

</body>
</html>
