<?php
include_once './assets/includes/header.php';
include './assets/includes/connect.php';
require_once './assets/includes/function.php';
?>

<?php

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $email = $_POST['username'];
  $password = $_POST['password'];
  registerlogin($username, $email, $password);
}
?>

<!-- Login start -->
<section class="login-page">
  <div class="container02">
    <div class="wrapper">
      <div class="form-box login">
        <span class="icon-close">
          <ion-icon name="close-outline"></ion-icon>
        </span>
        <h2>Login</h2>
        <form action="#" method="post">
          <div class="input-box">
            <span class="icon">
              <ion-icon name="person-circle-outline"></ion-icon>
            </span>
            <input type="text" name="username" required />
            <label>Username</label>
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="lock-open"></ion-icon>
            </span>
            <input name="password" type="password" class="password" required />
            <label>Password</label>
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox" />Remember me</label>
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" class="btn02" name="login">
            Login
          </button>
          <div class="login-register">
            <p>
              Don't have an account?
              <a href="./register.php" class="register-link">Register</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php
include_once './assets/includes/footer.php';
?>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
