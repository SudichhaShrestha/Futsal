<?php
include("./assets/php/db.php");
include("adminnotlogin.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/futsal.css">
    <!--emoji link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Admin Dashboard</title>
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
                <h2>Futsals</h2>
            </div>
            <div class="user--info">
                <div class="searh--box">
                <i class="fa-solid fa-search"></i>
                <input type="text"placeholder="search">
            </div>
            <img src="/image/om2.jpg" alt="">
        </div>
    </div>
    <div class="tabular-wrapper">
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Futsal Name</th>
                        <th>Location</th>
                        <th>Opening Time</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                        <?php  
                            $selected_futsal  = mysqli_query($conn,"SELECT * FROM `futsal_info`");
                            $number_futsal = mysqli_num_rows($selected_futsal);
                            while($row=mysqli_fetch_assoc($selected_futsal)){
                                $futsal_name = $row['name'];
                            $futsal_description = $row['opening_time'];
                            $futsal_location = $row['location'];
                            $futsal_id = $row['id'];
                            
                            
                            
                        ?>
                        <tr>
                            <td> <?php echo $futsal_id ?> </td>
                            <td> <?php echo $futsal_name ?> </td>
                            <td> <?php  echo $futsal_location ?></td>
                            <td><?php echo $futsal_description  ?></td>
                            <td><button>Edits</button></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"> <?php  echo $number_futsal ?> </td>
                        </tr>
                    </tfoot>
                </thead>
            </table>
        </div>

    </div>
</body>
</html>