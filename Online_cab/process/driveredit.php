<!DOCTYPE html>
<head>
<link rel="stylesheet" href="../css/register.css">      
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
  <body>
  <div class="row topnav">
         <h3 style="margin-left: 500px;">Online Cab Service</h3>
   
   </div>
  
   
    <?php
    include('../db/connection.php');
    //$name = $_GET['name'];
     //if(isset($_GET['name'])){
      session_start();
      $user=$_SESSION['user'];
      $query = "SELECT * FROM `tbl_user` WHERE name='$user'";
      $result = $conn->query($query);
      $row = $result->fetch_assoc();
     
    
    ?>

 
   
    <div class="am_heading">
  <h2 class="hd">Edit Form</h2> 
</div>
  
    <form class="" action="drivereditprocess.php" method="post">

 <input type="hidden" name="id" value="<?php echo $id;?>">
 <div class="form-field">
        <label class="li">Name</label>
        <input type="text" name="name"  value="<?php echo $row['name'];?>" style="margin-left:26px;" size="32">
      </div>
      <div class="form-field">
        <label class="li">Username</label>
        <input type="text" value="<?php echo $row['user_name'];?>" name="uname" style="margin-left:-3px;" size="32">
      </div>
      <div class="form-field">
        <label class="li">Password</label>
        <input type="password" name="password"  value="<?php echo $row['password'];?>"style="margin-left:-2px;" size="32">
      </div>
     
      <div class="form-field">
        <label class="li">Mobile</label>
        <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" style="margin-left:20px; width: 264px;">
      </div>
      <div class="form-field">
        <label class="li">Email</label>
        <input type="mail" name="email" value="<?php echo $row['email'];?>" style="margin-left:27px;" size="32">
      </div>
      <div class="form-field">
        <label class="li">Date of Birth</label>
        <input type="date" name="dob" value="<?php echo $row['date_of_birth'];?>" style="margin-left:-20px; width: 264px;">
      </div>
      <div class="form-field">
        <label class="li">Address</label>
        <input type="text" name="location" value="<?php echo $row['address'];?>" style="margin-left:7px;" size="32">
      </div>
     
 
    
        <button type="Submit" class = "submit_btn" name="Submit" value="UploadImage" style="margin-left:10px;">Submit</button>
        <button type="Reset" class = "reset_btn" name="Reset" style="margin-left:10px;">Reset</button>
  </form>
  </body>
</html>
