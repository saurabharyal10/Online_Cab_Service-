<?php
require '../db/connection.php';
?>
<html>
 <head>
     <title> Homepage </title>     
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
 </head>
 <body>
    
      <div class="row topnav">
         <h3 style="margin-left: 500px;">Online Cab Service</h3>
         <a href="logoutprocess.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Log Out
         </button>
         <a href="driverdetail.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Driver Details
         </button>
         <a href="userdetail.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> User Details
         </button>
        
       </a>
       <a href="ride_history.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Ride History
         </button>
        
       </a>
       <a href="feedback.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Feedback
         </button>
        
       </a>
         <br>
         </div>
         
      <?php
                      $query= 'SELECT tbl_user.id, tbl_user.name, tbl_user.mobile, tbl_user.email, apply_ride.current_location, apply_ride.destination, apply_ride.time, apply_ride.id, apply_ride.userid,apply_ride.driver_name
                      FROM tbl_user 
                      INNER JOIN apply_ride
                      ON tbl_user.id=apply_ride.userid WHERE apply_ride.status ="approve"
order by apply_ride.time DESC ' ;
        $result = $conn->query($query);
       if($result->num_rows>0){ ?>
       <h2>Join with us</h2>
          <table style="width:80%; ">
             <thead >
             <th style=" border:1px solid black;"> Time</th>
                <th style=" border:1px solid black;">Name</th>
                <th style="  border:1px solid black;">Contact no.</th>
<th  style="  border:1px solid black;">Current locaction</th>
                <th style="  border:1px solid black;"> Destination</th>
               
                <th style="  border:1px solid black;"> Driver_id</th>
                <th style="  border:1px solid black;"> Driver_name</th>
             </thead>
           <?php while($row = $result->fetch_assoc()){ ?>
           
              <tr>
              <td style="  border:1px solid black;"><?php echo $row['time'];?></td>
                <td style="  border:1px solid black;"><?php echo $row['name'];?></td>
                <td style="  border:1px solid black;"><?php echo $row['mobile'];?></td>
                <td style="  border:1px solid black;"><?php echo $row['current_location'];?></td>
               <td style="  border:1px solid black;"><?php echo $row['destination'];?></td>
               
                <td style="  border:1px solid black;"><?php echo $row['userid'];?></td>
                <td style="  border:1px solid black;"><?php echo $row['driver_name'];?></td>
                   </tr>
            <?php  } ?>
           </table>
        <?php }else{ ?>
           <h3>No result found</h3>
        <?php }
      ?>

      <?php 
      // to approve a ride

      if (isset($_GET['approve'])) {

         $id = $_GET['approve'];
         $note_approve = mysqli_real_escape_string($conn,$_GET['approve']);
         $approve_query = "UPDATE apply_ride SET driver_name='$name',status='approve'  WHERE id='$id'";
         $run_approve_query = mysqli_query($conn, $approve_query) or die (mysqli_error($conn));
         if (mysqli_affected_rows($conn) > 0) {
             echo "<script>alert('Ride Approved!');
             window.location.href='showride.php';</script>";
         }
         else {
          echo "<script>alert('error occured.try again!');</script>";   
         }
         }
      
      ?>
  </body>


  
    
         
     