<?php
session_start();
$user_id = $_SESSION['id'];
// $user=$_SESSION['user'];

   
    $current = $_POST['current'];
    $destination = $_POST['destination'];
    $status="ride ";
    date_default_timezone_set("Asia/Kathmandu");
     $today = date("  F jS Y h:i:s A");
      include('../db/connection.php');
 
   
   
    $sql ="INSERT INTO `apply_ride`(current_location,destination,time,userid,status) VALUES (' $current',' $destination ',' $today','$user_id','$status')";
     if($conn->query($sql)){
      echo " <script> alert('Successfully request ride');  
      window.location.href='../userprofile.php?smsg=successfully request';
      </script> ";
     }else{
        echo $conn->error;
       echo "Error Occured";
     

   }

?>
