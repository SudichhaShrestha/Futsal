<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/futsal.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Single Futsal</title>
</head>

<body>
  <header class="site-header">
    <div id="menu-bar" class="fa fa-bars"></div>
    <a href="#" class="logo"><span>G</span>oalz</a>
    <nav class="navbar">
      <a href="homepage.php">Home</a>
      <a href="#">About Us</a>
      <a href="#">Review</a>
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

  <div class="page">
    <div class="container">
      <div class="grid-container">
        <div class="column">
          <h1>Shankhamul Futsal</h1>
          <img src="./assets/images/img.jpg" width="300px" class="mainimg">
          <div class="gallery">
            <div class="image">
              <img src="./assets/images/img.jpg" alt="Image1" onclick="openModal('./assets/images/img.jpg')">
              <img src="./assets/images/img.jpg" alt="Image2" onclick="openModal('./assets/images/img.jpg')">
              <img src="./assets/images/img.jpg" alt="Image2" onclick="openModal('./assets/images/img.jpg')">
            </div>
          </div>
          <div id="modal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modal-image">
          </div>
          <div class="booked">
            <select class="time">
              <option value="time_slot1">Booked Time</option>
              <option value="6am-7am">Time A</option>
              <option value="7am-8am">Time B</option>
            </select>
          </div>
          <div class="btn"><a href="./booking.php">Book Now</a></div>
        </div>

        <div class="dcolumn">
          <div class="contentd">
            <p>Welcome to Shankhamul Futsal <br> <br> The futsal started since 2015 February 15.
              One of the most popular futsal in the city. You can book games and be our member.<br>
              <br> Location: Shankhamul, Kathmandu <br>
              <br>Parking: Available <br>
              <br>Price: Rs1000/hour<br>
              <br>Time: 6am-10pm</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/js/futsal.js"></script>
</body>

</html>