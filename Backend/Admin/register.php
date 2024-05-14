<?php
if (isset($_POST['register'])) {
  global $con;
  $firstname = mysqli_real_escape_string($con, $_POST["fname"]);
  $lastname = mysqli_real_escape_string($con, $_POST["lname"]);
  $username = mysqli_real_escape_string($con, $_POST["username"]);
  $phone = mysqli_real_escape_string($con, $_POST["phone"]);
  $email = mysqli_real_escape_string($con, $_POST["email"]);
  $password = mysqli_real_escape_string($con, $_POST["password"]);
  $cpassword = mysqli_real_escape_string($con, $_POST["cpassword"]);
  $profile = $_FILES['picprofile'];

  $picname = rand(1000, 10000) . '-' . $profile['name'];
  $tname = $profile['tmp_name'];
  $upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/booking/Backend/User/uploads/';
  move_uploaded_file($tname, $upload_dir . $picname);

  $duplicate = mysqli_query($con, "SELECT * FROM `user` WHERE username='$username'OR email='$email'");
  if (mysqli_num_rows($duplicate) > 0) {
    echo "<script>alert('Username or Email Has Already Been Taken');</script>";
  } else {
    if ($password == $cpassword) {
      $insertquery = "INSERT INTO `user`(firstname,lastname,username,phone,email,password,profile) VALUES ('$firstname','$lastname','$username','$phone','$email','$password','$picname')";
      $result = mysqli_query($con, $insertquery);
      if ($result>0) {
        echo "<script>alert('Account Created Successfully');</script>";
      } else {
        die(mysqli_error($con));
      }
    } else {
      echo "<script>alert('Password Does Not Match');</script>";
    }
  }
}
?>