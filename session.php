<?php
session_start();
if (!isset($_SESSION['useremail'])){
header('location:login.php');
}
$session_email = $_SESSION['useremail'];
$session_query = $conn->query("select * from user_login where user_email = '$session_email'");
$user_row = $session_query->fetch();
$session_id = $user_row['id'];
$session_username = $user_row['user_name'];

?>

