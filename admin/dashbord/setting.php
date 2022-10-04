<?php
include 'header.php';
include 'footer.php';
include 'connect.php';
?>
<style>
  
  .main{
    margin-left: 150px;
    margin-top: -25px;
  }
  }
</style>
<div class="content-wrapper">
<form action="studentdb.php" method="POST" enctype="multipart/form-data">
    <h3>Admin</h3>
    
    
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change Admin Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
             
                  <div class="form-group" onclick="myFunction()">
                    <label for="exampleInputEmail1"> Password:</label><br>
                    <input type="password" name="password" placeholder="Enter old password" id="myinput">
                    <div class="main">
                   <i id="hide1" class="fa fa-eye-slash"></i>
                   <i id="hide2" class="fa fa-eye"></i>
                   </div>
                   
                  </div>
                  
                  
                 

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              

</div>

</body>
</html>
<?php
include 'footer.php';
?>








