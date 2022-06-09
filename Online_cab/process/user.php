<?php

function getLoginUserId($conn){
  session_start();
  $un = $_SESSION['loginuser'];
  $sql = "SELECT * FROM users WHERE username = '$un'";
  $result = $conn->query($sql);
  if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    return $row['id'];
  }
}

?>
