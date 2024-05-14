<?php
include("./assets/php/db.php");
include("adminnotlogin.php");
include("futsalbackend.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/addfutsal.css">
    <!--emoji link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Add Futsal</title>
</head>

<body>
    <div class="sidebar">
    <div class="logo"><img src="./img/logo.png" alt=""></div>
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
                    <span>user</span>
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
            <li>
                <a href="UpdateFutsal.php">
                    <i class="fas fa-pen-to-square"></i>
                    <span>Update Futsal</span>
                </a>
            </li>
            <li>
                <a href="#">
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
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>ADD</span>
                <h2>Futsal</h2>
            </div>
            <div class="user--info">
                <div class="searh--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="search">
                </div>
                <img src="/image/om2.jpg" alt="">
            </div>
        </div>
          
        <body>
            <div class="container">
                <div class="card">
                    <h1 class="card-title">Add Futsal</h1>
                    <form action="AddFutsal.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="futsal_name">Name of Futsal:</label>
                            <input type="text" id="futsal_name" name="futsal_name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" name="description" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="location">location:</label>
                            <textarea id="location" name="location" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="main_image">Choose Main Image for Display:</label>
                            <input type="file" id="main_image" name="main_image" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="gallery_images">Choose Image(s) for Gallery:</label>
                            <input type="file" id="gallery_images" name="gallery_images" accept="image/*" multiple
                                required>
                        </div>
                        <button type="submit" name="add_futsal" >Add Futsal</button>
                    </form>
                </div>
            </div>
        </body>

</body>

</html>