<?php
  include('db/connection.php');
  include('include/header.php');
 ?>
<html>
 <head>
     <title> Register </title>
     <link rel="stylesheet" href="css/register.css">      
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
 </head>
 <body>
	<div class="container1">
      <ul class="navbar">
      <li><a href="home.php">Home</a></li>
   		<li><a href="about_project.php">About Project</a></li>
   		<li><a href="register.php">Register</a></li>
      <li><a href="login.php"> Login</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
     </ul>
  </div>

<div class="am_heading">
  <h2 class="hd">Registration Form</h2> 
</div>

 <form method='POST' action='process/registerprocess.php' style="margin:27px; margin-left:56px;" enctype="multipart/form-data">
      <div class="form-field">
        <label class="li">Name</label>
        <input type="text" name="name" style="margin-left:26px;" size="32" required>
      </div>
      <div class="form-field">
        <label class="li">Username</label>
        <input type="text" name="uname" style="margin-left:-3px;" size="32" required>
      </div>
      <div class="form-field">
        <label class="li">Password</label>
        <input type="password" name="password" style="margin-left:-2px;" size="32" required>
      </div>
     
      <div class="form-field">
        <label class="li">Mobile</label>
        <input type="text" name="mobile" maxlength="10" minlength="9" style="margin-left:20px; width: 264px;" required>
      </div>
      <div class="form-field">
        <label class="li">Email</label>
        <input type="email" name="email" style="margin-left:27px;" size="32" required>
      </div>
      <div class="form-field">
        <label class="li">Date of Birth</label>
        <input type="date" name="dob" style="margin-left:-20px; width: 264px;" required>
      </div>
      <div class="form-field">
        <label class="li">Address</label>
        <input type="text" name="location" style="margin-left:7px;" size="32"required>
      </div>
      <div class="form-field">
        <label class="li">Gender</label>
        <input type="radio" name="gender" value="Male" style="margin-left:15px;"><span class = "gender" >Male</span>
        <input type="radio" name="gender" value="female" style="margin-left:45px;" ><span class = "gender" >Female</span>
        <input type="radio" name="gender" value="others" style="margin-left: 45px;"><span class = "gender" >Others</span>
      </div>
 
    <div class="form-field">
      <label class="li">Select User :</label>
          <select name="usertype" style="width: 272px; height: 21px; margin-left:-23px;">
    
              <option value="Driver" name="Driver">Driver</option>
              <option value="User" name="User">User</option>
          </select><br>
    </div>
    <div class="form-field">
      <label class="li">Accept term & Condition</label>
      <input type="checkbox" name="terms" style="margin-left:-102px;" size="32" required>
    </div>
        <button type="Submit" class = "submit_btn" name="Submit" value="UploadImage" style="margin-left:10px;">Submit</button>
        <button type="Reset" class = "reset_btn" name="Reset" style="margin-left:10px;">Reset</button>
    </form>

</body>
</html>