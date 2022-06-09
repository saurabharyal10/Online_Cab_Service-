<?php
  include('../db/connection.php');
  session_start();
  $name=$_SESSION['name'];
 ?>
<html>
 <head>
 <style>

} 
 </style>
     <title> Homepage </title>     
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
 </head>
 <body>
    <div class="row topnav">
         <h3 style="margin-left: 300px;">Online Cab Service</h3>
         <a href="logoutprocess.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Log Out
         </button></a>
         <a href="delete.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Delete Account
         </button>
      </a>
      <a href="driveredit.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Edit Account
         </button>
      </a>
        
         <a href="showride.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Show Request Ride
         </button>
         </a>
         <a href="selfride.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Ride Status
         </button>
         </a>
         <a href="completeselfride.php">   <button style="float:right; margin-top:-22px; background-color:maroon;">Self Ride
         </button>
         </a>
        
        
   	</div>
      
 
  <body>
   
   

      <?php
                      $query= 'SELECT tbl_user.id, tbl_user.name, tbl_user.mobile, tbl_user.email, apply_ride.current_location, apply_ride.destination, apply_ride.time, apply_ride.id, apply_ride.userid
                      FROM tbl_user 
                      INNER JOIN apply_ride
                      ON tbl_user.id=apply_ride.userid WHERE apply_ride.status ="" ' ;
        $result = $conn->query($query);
       if($result->num_rows>0){ ?>
       <h2>Wants to ride</h2>
          <table style="width:50%; ">
             <thead >
           <!-- //  <th style=" padding:15px;" >id</th> -->
                <th style=" padding:15px;">Name</th>
                <th style=" padding:15px;">Contact no.</th>
<th style=" padding:5px;">Current locaction</th>
                <th style=" padding:15px;"> Destination</th>
                <th style=" padding:15px;"> Time</th>
                <th style=" padding:15px;"> Action</th>
             </thead>
           <?php while($row = $result->fetch_assoc()){ ?>
            <?php 
               // $query2 = 'SELECT tbl_user.id, tbl_user.name, tbl_user.mobile, tbl_user.email, apply_ride.current_location, apply_ride.destination, apply_ride.time, apply_ride.userid
               // FROM tbl_user 
               // INNER JOIN apply_ride
               // ON tbl_user.id=apply_ride.userid';
               


            ?>
              <tr>
         <!-- //     <td><?php echo $row['id'];?></td> -->
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['current_location'];?></td>
               <td><?php echo $row['destination'];?></td>
                <td><?php echo $row['time'];?></td>
                <?php echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to accept this ride?')\"href='?approve=".$row['id']."'>Approve</a></td>"; ?> 
               
                   </tr>
            <?php  } ?>
           </table>
        <?php }else{ ?>
           <h3 style="color:black;">No result found</h3>
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


  
    