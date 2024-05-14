<?php
include("./assets/php/db.php");
include("adminnotlogin.php");


//update user

if(isset($_POST['update_user'])){
    $user_id = $_post['user_id'];
    $update_user = $_POST['update_user'];
    mysqli_query($conn,"UPDATE `user` SET `usertype` ='$update_user' WHERE id = '$user_id' ");
    header('location:user.php ');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/user.css">
    <!--emoji link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>User</title>
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
                <a href="#">
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
                <h2>User</h2>
            </div>
            <div class="user--info">
                <div class="searh--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="search">
                </div>
                <img src="/image/om2.jpg" alt="">
            </div>
        </div>
         <div class="tabular-wrapper">
            <h3 class="main-title"></h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>User Name</th>
                            <th>Role</th>
                            <th>Action</th>
                    <tbody>

                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM `user`");
                        $number_user = mysqli_num_rows($sql);
                        if(mysqli_num_rows($sql)) {                     
                        while ($row = mysqli_fetch_assoc($sql)) {
                        ?>
                            <tr>
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['username']; ?> </td>
                                <!-- <td>  </td> -->                               
                                    <td>
                                        <form  method="post">
                                            <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>" >
                                    <select name="update_user" >
                                        <option disabled selected> <?php echo $row['usertype']; ?> </option>
                                        <option value="admin"> admin </option>
                                        <option value="user"> user </option>
                                    </select>
                                    </form>
                                    </td>
                                    
                                    <td>
                                    <form  method="post">
                                        <!-- <input type="submit" name="edit_user" value=" update user " > -->
                                        <button name="edit_user" value="Update User" > Edit </button>
                                    </form>
                                    </td>

                        </tr>
                                
                                <?php
                        }
                                }
                                    ?> </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"> <?php echo $number_user; ?> </td>
                        </tr>
                    </tfoot>
                    </thead>
                </table>
            </div>

        </div>
</body>

</html>