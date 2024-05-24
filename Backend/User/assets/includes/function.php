<?php
function registerlogin($username, $email, $password)
{
  global $con;
  $email_search = "SELECT * FROM `user` WHERE username='$username' OR email='$email'";
  $query = mysqli_query($con, $email_search);
  $email_count = mysqli_num_rows($query);
  if ($email_count) {
    $user_data = mysqli_fetch_assoc($query);
    $db_pass = $user_data['password'];
    if ($db_pass == $password) {
        $_SESSION['user_id'] = $user_data["id"];
        $_SESSION['user_name'] = $user_data["firstname"];
        $_SESSION['user_email'] = $user_data["email"];
        $_SESSION['user_number'] = $user_data["number"];
        echo '<script>alert("Login Successfully")</script>';
        if ($user_data['usertype'] == "admin") {
            header("Location: ../Admin/Admin.php");
        } else {
            header("Location: homepage.php");
        }
    } else {
        echo '<script>alert("Incorrect password")</script>';
    }
} else {
    echo '<script>alert("User not found")</script>';
}

}




function is_login(){
    if (isset($_SESSION['user_id'])) :
    return true;
    else :
        return false;
    endif;
}