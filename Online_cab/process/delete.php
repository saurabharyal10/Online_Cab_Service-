<?php
  include('../db/connection.php');
  session_start();
  $user=$_SESSION['user'];

 
    $sql = "DELETE FROM tbl_user WHERE user_name='$user'";
    if($conn->query($sql)===TRUE){
      echo " <script> alert('Your Account is Deleted Successfully. ');  
      window.location.href='../login.php?smsg=successfully deleted';
      </script> ";
    }else{
      echo $conn->error;
    }
     


    ?>
