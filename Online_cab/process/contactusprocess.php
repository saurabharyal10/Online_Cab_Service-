<?php
if(isset($_POST)){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['about'];

include('../db/connection.php');
$sql="INSERT INTO `contact`( `name`, `email`, `mobile`, `message`) VALUES ('$name','$email','$mobile','$message')";


if($conn->query($sql)){
    header('Location:../home.php');
 }else{
    echo $conn->error;
   echo "Error Occured";
 }
}
?>