<?php
  include('db/connection.php');
  include('include/header.php');
session_start();
if(isset( $_SESSION['id'] ) && isset($_SESSION['name'])){
  if( $_SESSION['name']=="admin1"){
    header("location:../../ONLINE_CAB/process/admin.php");
    
  }
  else if($_SESSION['usertype']=="Driver"){
    header("location:../../ONLINE_CAB/driverprofile.php");
  }
else{
header("location:../../ONLINE_CAB/userprofile.php");
}
}
 ?>
<html>
 <head>
     <title> Login </title>
     <link rel="stylesheet" href="css/login.css">      
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
  <h2 class="hd">Login To Your Account</h2> 
</div>
<?php

  $alertmsg = isset($_GET['alertmsg'])?$_GET['alertmsg']:'';

if($alertmsg == 1){
  echo "<script>alert('Sorry, the credentials do not match.')</script>";

}

?>

<div class="rowbar">
  <div class="container">
    <div class="col-md-9">
      <form style="margin:27px; margin-left:56px;" method="POST" action="process/loginprocess.php">
        <div class="form-field">
          <label class="li" for="exampleInputEmail1">Username</label>
          <input type="text" name="uname" id="uname" class="form-control" style="margin-left:-3px;" size="32">
        </div>
        <div class="form-field">
          <label class="li">Password</label>
          <input type="password" id="password" name="password" class="form-control" id="exampleInputPassword1" style="margin-left:-2px;" size="32">
        </div>
        <div class="form-field">
          <label class="li">Select User :</label><br>
            <select name="usertype" style="width: 715px; height: 27px;">
              <option value="Admin">Admin</option>
              <option value="Driver">Driver</option>
              <option value="User">User</option>
            </select><br>
        </div>
       
        <button type="Submit" class = "submit_btn" name="Submit" style="margin-left:10px; background-color: green;">Submit</button>
        <button type="Reset" class = "reset_btn" name="Reset" style="margin-left:10px;">Reset</button>

        </form>
    </div>
  </div>
</div>


</body>
</html>