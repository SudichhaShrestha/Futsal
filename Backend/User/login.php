<?php
include_once './assets/includes/header.php';
include './assets/includes/connect.php';
?>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
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
      if ($result) {
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

<!--Login start-->
<section class="login-page">
  <div class="container">
    <div class="wrapper" id="wrapper">
      <div class="form-box login">
        <span class="icon-close">
          <ion-icon name="close-outline"></ion-icon>
        </span>
        <h2>Login</h2>
        <form action="#">
          <div class="input-box">
            <span class="icon">
              <ion-icon name="person-circle-outline "></ion-icon>
            </span>
            <input type="text" required />
            <label>Username</label>
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="lock-open"></ion-icon>
            </span>
            <input type="password" required />
            <label>Password</label>
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox" />Remember me</label>
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" class="btn" name="login">
            <a href="./profile.php" class="login">Login</a>
          </button>
          <div class="login-register">
            <p>
              Don't have an account?
              <a href="#" class="register-link">Register</a>
            </p>
          </div>
        </form>
      </div>

      <!--Register Start-->
      <div class="form-box register">
        <span class="icon-close">
          <ion-icon name="close-outline"></ion-icon>
        </span>
        <h2>Registration</h2>
        <form method="post" autocomplete="off" enctype="multipart/form-data">
          <div class="usernames">
            <div class="input-box">
              <span class="icon">
                <ion-icon name="person-circle-outline"></ion-icon>
              </span>
              <input type="text" name="fname" required />
              <label>Firstname</label>
            </div>

            <div class="input-box">
              <span class="icon">
                <ion-icon name="person-circle-outline"></ion-icon>
              </span>
              <input type="text" name="lname" required />
              <label>Lastname</label>
            </div>
          </div>

          <div class="input-box">
            <span class="icon">
              <ion-icon name="person-circle-outline"></ion-icon>
            </span>
            <input type="text" name="username" required />
            <label>Username</label>
          </div>

          <div class="input-box">
            <span class="icon">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </span>
            <input type="Number" name="phone" required max="" />
            <label>Phone Number</label>
          </div>

          <div class="input-box">
            <span class="icon">
              <ion-icon name="mail"></ion-icon>
            </span>
            <input type="email" name="email" required />
            <label>Email</label>
          </div>

          <div class="input-box">
            <span class="icon">
              <ion-icon name="lock-open"></ion-icon>
            </span>
            <input type="password" name="password" required />
            <label>Password</label>
          </div>

          <div class="input-box">
            <span class="icon">
              <ion-icon name="lock-open"></ion-icon>
            </span>
            <input type="password" name="cpassword" required />
            <label>Conform Password</label>
          </div>

          <div class="form-field">
            <label for="picprofile">Upload Profile Picture</label>
            <input type="file" name="picprofile" id="picprofile" />
          </div>

          <div class="remember-forgot">
            <label><input type="checkbox" /> I agree to the terms &
              condition</label>
          </div>

          <button type="submit" class="btn" name="submit">Register</button>

          <div class="login-register">
            <p>
              Already have an account?
              <a href="#" class="login-link">Login</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<script src="./assets/js/index.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/
    ionicons.js"></script>

</body>

</html>