<?php
session_start();
$user=$_SESSION['user'];
   
	$name = $_POST['name'];
	$un = $_POST['uname'];
	$p1  = $_POST['password'];
 
	$m =  $_POST['mobile'];
	$e =  $_POST['email'];
	$dob =  $_POST['dob']; 
	$loc =  $_POST['location']; 
	
   
  
	 include('../db/connection.php');

		$sql = "UPDATE `tbl_user` SET `name`='$name',`user_name`='$un',
		`password`='$p1',`mobile`='$m',`email`='$e',`date_of_birth`='$dob',`address`='$loc' WHERE user_name='$user'";
		
		
		if($conn->query($sql)===TRUE)
		{
			echo " <script> alert('Your Account is Successfully Updated. ');  
			window.location.href='../userprofile.php?smsg=successfully updated';
			</script> ";
		}else{
			echo"error aayo".$conn->error;
		
		}