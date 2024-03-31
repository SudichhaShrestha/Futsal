<?php
session_start();
require_once './assets/includes/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/booking.css">
    <link rel="stylesheet" href="./assets/css/futsal.css">
    <link rel="stylesheet" href="./assets/css/homepage.css">
    <link rel="stylesheet" href="./assets/css/profile.css">
    <title>Goalz</title>
</head>
<body>
        
  <header >
    <a href="#" class="logo"><span>G</span>oalz</a>
    <nav class="navbar">
        <a href="./homepage.php">Home</a>
        <a href="#">About Us</a>
        <a href="./profile.php">Profile</a>
        <a href="#">Contact</a>
        <a href="#">Book</a>
        <?php
        if (is_login()):?>
        <a href="./logout.php"><button class="btnLogin-popup">Logout</button></a>
        <?php
        else: ?>
        <a href="./login.php"><button class="btnLogin-popup">Login</button></a>
        <?php endif;?>
    </nav>
    </header>