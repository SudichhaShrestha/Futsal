<?php
session_start();
require_once './assets/includes/function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/admin.css">
    <link rel="stylesheet" href="./assets/css/addfutsal.css">
    <link rel="stylesheet" href="./assets/css/booked.css">
    <link rel="stylesheet" href="./assets/css/futsal.css">
    <link rel="stylesheet" href="./assets/css/update.css">
    <link rel="stylesheet" href="./assets/css/user.css">
    <!--emoji link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Admin Dashboard</title>
</head>
<body> 
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="Admin.php">
                    <i class="fas fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="user.php">
                    <i class="fas fa-user"></i>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="futsal.php">
                    <i class="fas fa-football"></i>
                    <span>Futsal</span>
                </a>
            </li>
            <li>
                <a href="AddFutsal.php">
                    <i class="fas fa-add"></i>
                    <span>Add Futsal</span>
                </a>
            </li>
            <li>
                <a href="booked.php">
                    <i class="fas fa-check"></i>
                    <span>Booked Futsal</span>
                </a>
            </li>
            <!-- <li>
                <a href="UpdateFutsal.php">
                    <i class="fas fa-pen-to-square"></i>
                    <span>Update Futsal</span>
                </a>
            </li> -->
            <li>
                <a href="setting.php">
                    <i class="fas fa-cog"></i>
                    <span>Setting</span>
                </a>
            </li>
            <li class="logout">
                <a href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>