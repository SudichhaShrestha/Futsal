<?php 
session_start();
$admin_username = $_SESSION['admin_username'];
if(!isset($admin_username)){
  header('location:../user/login.php');
}

?>