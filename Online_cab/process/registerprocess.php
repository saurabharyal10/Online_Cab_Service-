<?php
session_start();
$selfname=$_SESSION['name'];

 if(isset($_POST)){
   
   $name = $_POST['name'];
   $un = $_POST['uname'];
   $p1  = $_POST['password'];

   $m =  $_POST['mobile'];
   $e =  $_POST['email'];
   $dob =  $_POST['dob']; 
   $loc =  $_POST['location']; 
   $g =  $_POST['gender']; 

   $usertype = $_POST['usertype'];
  
 
     $today = date("Y-M-D");
     include('../db/connection.php');
 
   if($dob<$today){
   
    $sql ="INSERT INTO tbl_user(`name`,`user_name`,`password`, `mobile`, `email`,`date_of_birth`, `address`, `gender`, `user_type`, `date_of_join`) 
    VALUES ('$name','$un','$p1','$m','$e','$dob','$loc','$g','$usertype','$today')";
   
     if($conn->query($sql)){
        header('Location:../login.php?name='.$name);
     }else{
        echo $conn->error;
       echo "Error Occured";
     }
    }else{
      echo " <script> alert('invalid date of birth');  
      window.location.href='../register.php';
      </script> ";
    }
   }else{
     echo "Password does not match";
   }

?>
