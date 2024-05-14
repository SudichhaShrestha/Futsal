<?php 
include('../Admin/assets/php/db.php');

// Check if user is already logged in
if(isset($_SESSION['user_email'])) {
    header('location: home.php');
    exit; // Make sure to exit after redirecting
}

// Check if admin is already logged in
if(isset($_SESSION['admin_email'])) {
    header('location: admin.php');
    exit; // Make sure to exit after redirecting
}

//Code For Login Users
if (isset($_POST["login"])) {
    //    print_r($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($conn,"SELECT * FROM `user` WHERE username = '$username'AND password = '$password'") or die('Query failed') ;
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        if ($row['usertype'] == 'user') {
            $_SESSION['user_firstname'] = $row['firstname'];
                $_SESSION['user_lastname'] = $row['lastname'];
                $_SESSION['user_username'] = $row['username'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_number'] = $row['number'];
                $_SESSION['user_id'] = $row['id'];
            header('location: ../User/homepage.php');
            exit; // Make sure to exit after redirecting
        }
        elseif ($row['usertype'] == 'admin') {
                $_SESSION['admin_firstname'] = $row['firstname'];
                $_SESSION['admin_lastname'] = $row['lastname'];
                $_SESSION['admin_username'] = $row['username'];
                $_SESSION['admin_email'] = $row['email'];
                $_SESSION['admin_number'] = $row['number'];
                $_SESSION['admin_id'] = $row['id'];
                header('location: ../admin/admin.php');
                exit; // Make sure to exit after redirecting
            }
    } else {
        $error = 'incorrect password or mail';
    }
    
}
?>
