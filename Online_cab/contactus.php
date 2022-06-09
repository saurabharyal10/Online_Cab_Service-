<?php
  include('db/connection.php');
  include('include/header.php');
 ?>
<html>
 <head>
     <title> Contact Us </title>
     <link rel="stylesheet" href="css/contactus.css">      
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

<div>
  <h2 class="hd">Contact us</h2> 
</div>

<div class="rowbar">
  <div class="container">
    <div class="col-md-7">
    <form action="process/contactusprocess.php" method="post">
      <form style="margin:27px; margin-left:18px;">
        <div class="form-field">
        <label class="li">Name</label>
        <input type="text" name="name" style="margin-left:26px;" size="32">
      </div>
        
        <div class="form-field">
        <label class="li">Email</label>
        <input type="mail" name="email" style="margin-left:27px;" size="32">
      </div>
      <div class="form-field">
        <label class="li">Mobile</label>
        <input type="text" name="mobile" style="margin-left:20px; width: 296px;">
      </div>
      <div class="form-field">
        <label class="li">Message</label>
        <textarea name="about" rows="8" cols="40" style="margin-left:164px; margin-top: -24px;"></textarea>
      </div> 
      <button type="Submit" class = "submit_btn" name="Submit" style="margin-left:10px;">Submit</button>
      <button type="Reset" class = "reset_btn" name="Reset" style="margin-left:10px;">Reset</button>
    </form>
    </div>
   
  </div>
</div>
</form>
</body>
</html>