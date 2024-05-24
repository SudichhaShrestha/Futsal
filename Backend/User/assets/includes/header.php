<?php
session_start();
include './assets/includes/connect.php';
require_once './assets/includes/function.php';
if (isset ($_SESSION['user_id'])){
  $profileid = $_SESSION['user_id'];
  $sql = "SELECT * FROM user WHERE id = $profileid";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
  }
}
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
  <link rel="stylesheet" href="./assets/css/userorder.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Goalz</title>
</head>

<body>
  <header>
    <a href="#" class="logo"><span>G</span>oalz</a>
    <nav class="navbar">
      <ul>
        <li><a href="./homepage.php">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="./profile.php">Profile</a></li>
        <li>
          <div class="html-widget">
            <a href="#footer-widget">Contact</a>
          </div>
        </li>
        <?php if (is_login()) : ?>
          <li><a href="./bookeduser.php">Book</a></li>
          <div class="user_infos">
            <img src="./uploads/<?php echo $row['profile']; ?>" alt="Profile Picture" class="user_info">
            <p>Hi, <?php echo $row ['firstname'];?></p>
          </div>
        <?php else : ?>
          <li><a href="./login.php"><button class="btnLogin-popup">Login</button></a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>