




<html>
 <head>
     <title> Homepage </title>     
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
    <div class="row topnav">
         <h3 style="margin-left: 300px;">Online Cab Service</h3>
         <a href="process/logoutprocess.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Log Out
         </button>
         <a href="process/delete.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Delete Account
         </button>
         <a href="process/driveredit.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Edit Account
         </button>
        
         <a href="process/showride.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Show Request Ride
         </button>
         
         </a>
         <a href="process/selfride.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Ride Status
         </button>
         </a>
         <a href="process/completeselfride.php">   <button style="float:right; margin-top:-22px; background-color:maroon;">Self Ride
         </button>
         </a>
         <br>
         </div>
         <?php
    include('db/connection.php');
   
     //    $name = $_GET['uname'];
        //  if(isset($_GET['uname'])){
          session_start();
         $user=$_SESSION['user'];
      $query = "SELECT * FROM `tbl_user` WHERE user_name='$user' ";
      $result = $conn->query($query);
     
     

      $row = $result->fetch_assoc();

    ?>

  <div class="main" style="margin-left:500px; font-size:30px;">
   	
       <div class="form-field">
        <label class="li">Name:</label>
        <?php echo $row['name']; ?>
      </div>
      <div class="form-field">
        <label class="li">Username:</label>
        <?php echo $row['user_name']; ?>
        
      </div>
    
     
      <div class="form-field">
        <label class="li">Mobile</label>
        <?php echo $row['mobile']; ?>
      </div>
      <div class="form-field">
        <label class="li">Email:</label>
        <?php echo $row['email']; ?>
      </div>
      <div class="form-field">
   <label class="li">Date of Birth:</label>
   <?php echo $row['date_of_birth']; ?>
 </div>
      <div class="form-field">
        <label class="li">Address:</label>
        <?php echo $row['address']; ?>
      </div>
      <div class="form-field">
        <label class="li">Gender:</label>
        <?php echo $row['gender']; ?>
         </div>
         </div>

       
 

    
         


         
