<?php
 if(isset($_POST)){
   $un =  $_POST['uname'];
   $p1  = $_POST['password'];
   $usertype=$_POST['usertype'];

   include('../db/connection.php');
   session_start();
  
   $_SESSION['user']=$un;
   $_SESSION['usertype']=$usertype;
   

   
     $q3 = "SELECT * FROM tbl_user WHERE user_name = '$un' AND password='$p1' AND user_type='$usertype' " ; 
     $result3 =$conn->query($q3);
     $row = $result3 -> fetch_array(MYSQLI_ASSOC);
      $_SESSION['id'] = $row['id'];
      $_SESSION['name']=$row['name'];
      if($row){
        if($usertype == "User"){
         
          header('Location:../userprofile.php');
         } 
         
         elseif($usertype =="Driver"){
    
         
          header('Location:../driverprofile.php');
         }
         else{
          header('Location:../process/admin.php');
         }
      }else{
        header('Location:../login.php?alertmsg=1');
        
      

      exit;

      }
      }
   ?>
 