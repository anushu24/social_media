<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['id'])){
header('location:login.php');
}
$session_id = $_SESSION['id'];
$session_query = "select * from user_login where user_id = '$session_id'";
$query = mysqli_query($conn,$session_query);
$user_row = mysqli_fetch_assoc($query);
$session_username = $user_row['name'];

?>