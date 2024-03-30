<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/homepage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Goalz</title>
</head>

<body>
  <!--Header section start-->
  <header class="site-header">
    <div id="menu-bar" class="fa fa-bars"></div>
    <a href="#" class="logo"><span>G</span>oalz</a>
    <nav class="navbar">
      <a href="homepage.php">Home</a>
      <a href="#">About Us</a>
      <a href="./profile.php">Profile</a>
      <a href="#">Contact</a>
      <a href="#">Book</a>
      <a href="login.php"><button class="btnLogin-popup">Login</button></a>
    </nav>

    <div class="icons">
      <i class="fa fa-search" id="search-btn"></i>
    </div>

    <form action="" class="search-bar-container">
      <input type="search" id="search-bar" placeholder="search here...">
      <label for="search-bar" class="fa fa-search"></label>
    </form>
  </header>
  <!-- header section ends -->

  <div class="container">
    <div class="slider-container">
      <div class="slider">
        <img class="imgslider" src="./assets/images/img.jpg" alt="">
        <img class="imgslider" src="./assets/images/img.jpg" alt="">
        <img class="imgslider" src="./assets/images/img.jpg" alt="">
      </div>
      <button class="prev" onclick="moveSlide(-1)"><span style='font-size:20px;'>&#11164;</span></button>
      <button class="next" onclick="moveSlide(1)"><span style='font-size:20px;'>&#11166;</span></button>
      <div class="info">
        <h3>Up for a Futsal Match</h3>
        <p>Book your match from Goalz</p>
        <a href="#" class="btn">
          <h2>Learn More</h2>
        </a>
      </div>
    </div>
  </div>
  <div class="futsal-container">
    <div class="futsal-demo">
      <div class="nearfutsal">
        <h1 class="futsalheading">Futsals</h1>
      </div>
    </div>
    <div class="img-wrap">
      <div class="nearby">
        <a href="./futsal.php"><img src="./assets/images/img.jpg" alt="" /></a>
        <h5>Shankhamul Futsal</h5>
      </div>

      <div class="nearby">
        <a href="./futsal.php"><img src="./assets/images/img.jpg" alt="" /></a>
        <h5>Kumari Futsal</h5>
      </div>

      <div class="nearby">
        <a href="./futsal.php"><img src="./assets/images/img.jpg" alt="" /></a>
        <h5>United Futsal</h5>
      </div>

      <div class="nearby">
        <a href="./futsal.php"><img src="./assets/images/img.jpg" alt="" /></a>
        <h5>BCD Futsal</h5>
      </div>
    </div>
  </div>


  <script src="./assets/js/homepage.js"></script>
</body>
</html>