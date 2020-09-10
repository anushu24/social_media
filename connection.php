<?php
  $servername = "localhost";
  $username = "root";
  $password ="";
  $database = "social_media";
  $conn = mysqli_connect($servername,$username,$password,$database);
  if(!$conn){
      echo "no connection";
  }
 else{
    echo "success";
} 
  ?>