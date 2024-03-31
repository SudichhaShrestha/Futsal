<?php
    include_once './assets/includes/header.php';
?>

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