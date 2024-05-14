<?php
include("./assets/php/db.php");
include("adminnotlogin.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/admin.css">
    <!--emoji link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Admin Dashboard</title>
</head>
<body> 
    <div class="sidebar">
        <div class="logo"><img src="./img/logo.png" alt=""></div> 
        <ul class="menu">
            <li class="active">
                <a href="#">
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
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="searh--box">
                <i class="fa-solid fa-search"></i>
                <input type="text"placeholder="search">
            </div>
            <img src="./assets/image/om2.jpg" alt="">
        </div>
    </div>
    <div class="card-container">
        <h3 class="main--title">Today's Date</h3>
        <div class="card-wrapper">

            <div class="booking-card light-green">
                <div class="card--header">
                    <div class="amount">
                        <span>Payment Amount</span>
                        <span class="amount-value">$500.00</span>
                    </div>
                    <i class="fas fa-dollar-sign icon"></i>
                </div>
                <span class="card-detail">**** ****** ****06</span>
            </div>

            <div class="booking-card light-purple">
                <div class="card--header">
                    <div class="amount">
                        <span>Booking Order</span>
                        <span class="amount-value">50</span>
                    </div>
                    <i class="fas fa-list icon dark-purple"></i>
                </div>
                <span class="card-detail">***** ***** ****06</span>
            </div>

            <div class="booking-card light-pink">
                <div class="card--header">
                    <div class="amount">
                        <span>Users</span>
                        <?php
                $select_admin=mysqli_query($conn,"SELECT * FROM `user` WHERE usertype='user'");
                $numbers_of_admin=mysqli_num_rows($select_admin)
                ?>
                        <span class="amount-value"><?php echo $numbers_of_admin ?> 
                    </span>
                    </div>
                    <i class="fas fa-user-group icon dark-pink"></i>
                </div>
                <span class="card-detail">**** ***** *****06</span>
              
            </div>

            <div class="booking-card light-blue">
                <div class="card--header">
                    <div class="amount">
                        <span>Payment Proceed</span>
                        <span class="amount-value">$500.00</span>
                    </div>
                    <i class="fas fa-check icon dark-blue"></i>
                </div>
                <span class="card-detail">**** *****  *****06</span>
            </div>
            <div class="booking-card light-yellow">
                <div class="card--header">


                    <div class="amount">
                        <span>Numbers of Futsal</span>
                        <?php
                $select_futsal_info=mysqli_query($conn,"SELECT * FROM `futsal_info`");
                $numbers_of_futsals=mysqli_num_rows($select_futsal_info);
                ?>
                        <span class="amount-value"><?php echo $numbers_of_futsals ?></span>
                    </div>
                    <i class="fas fa-people-group icon dark-orange"></i>
                </div>
                <span class="card-detail">**** *****  *****06</span>
            </div>
        </div>
    </div>
    <div class="tabular-wrapper">
        <h3 class="main-title">Finance Data</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Transcation Method</th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>
                                2024-03-21
                            </td>
                            <td>Esewa</td>
                            <td>1200</td>
                            <td>sankhamul futsal court booking</td>
                            <td>Pending</td>
                            <td><button>Edits</button></td>
                        </tr>
                        <tr>
                            <td>
                                2024-03-25
                            </td>
                            <td>Card</td>
                            <td>1500</td>
                            <td>Dhapasi futsal court booking</td>
                            <td>Pending</td>
                            <td><button>Edits</button></td>
                        </tr>
                        <tr>
                            <td>
                                2024-03-28
                            </td>
                            <td>Khalti</td>
                            <td>600</td>
                            <td>Chabhil futsal court booking</td>
                            <td>Pending</td>
                            <td><button>Edits</button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">Total:3300</td>
                        </tr>
                    </tfoot>
                </thead>
            </table>
        </div>

    </div>
</body>
</html>