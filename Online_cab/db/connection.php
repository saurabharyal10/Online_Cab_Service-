<?php
$host = 'localhost';
$db = 'cab_service';
$username = 'root';
$password = '';

$conn = new mysqli($host,$username,$password,$db);
if($conn->connect_error){
  die("Connection failed ".$conn->connect_error);
}

?>
