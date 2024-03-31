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
      echo '<script>alert("Login Successfully")</script>';
      header("Location: homepage.php");
    } else {
      echo '<script>alert("Incorrect password")</script>';
    }
  } else {
    echo '<script>alert("Invalid username")</script>';
  }
  
}
