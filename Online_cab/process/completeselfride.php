<?php
  include('../db/connection.php');
  session_start();
         $user=$_SESSION['user'];
         $selfname=$_SESSION['name'];
    
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
         <h3 style="margin-left: 400px;">Online Cab Service</h3>
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
         <a href="completeselfride.php">   <button style="float:right; margin-top:-22px; background-color:maroon;">Self Ride
         </button>
         </a>
         </a>
        
   	</div>
      
  <body>


  <?php
//   echo $selfname;exit;
           
                      $query= "SELECT tbl_user.id, tbl_user.name, tbl_user.mobile, tbl_user.email, apply_ride.current_location, apply_ride.destination, apply_ride.time, apply_ride.id, apply_ride.userid,apply_ride.driver_name
                      FROM tbl_user 
                      INNER JOIN apply_ride
                      ON tbl_user.id=apply_ride.userid WHERE apply_ride.driver_name ='$selfname' AND apply_ride.remarks = 'complete' ";
        $result = $conn->query($query);
       if($result-> num_rows > 0){ ?>
       <h2>SELF RIDE</h2>
          <table style="width:80%; ">
             <thead >
             <th style=" border:1px solid black;"> Time</th>
                <th style=" border:1px solid black;">Name</th>
                <th style="  border:1px solid black;">Contact no.</th>
<th  style="  border:1px solid black;">Current locaction</th>
                <th style="  border:1px solid black;"> Destination</th>
                
               
                <!-- <th style="  border:1px solid black;"> Driver_id</th> -->
                <!-- <th style="  border:1px solid black;"> Driver_name</th> -->
             </thead>
           <?php while($row = $result->fetch_assoc()){ ?>
           
              <tr>
              <td style="  border:1px solid black;"><?php echo $row['time'];?></td>
                <td style="  border:1px solid black;"><?php echo $row['name'];?></td>
                <td style="  border:1px solid black;"><?php echo $row['mobile'];?></td>
                <td style="  border:1px solid black;"><?php echo $row['current_location'];?></td>
               <td style="  border:1px solid black;"><?php echo $row['destination'];?></td>
              
                <!-- <td style="  border:1px solid black;"><?php echo $row['userid'];?></td> -->
                <!-- <td style="  border:1px solid black;"><?php echo $row['driver_name'];?></td> -->
                   </tr>
            <?php  } ?>
           </table>
        <?php }else{ ?>
           <h3>No result found</h3>
        <?php }
      ?>
      

     
  </body>


  
    
         
     