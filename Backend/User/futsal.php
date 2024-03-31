<?php
    include_once './assets/includes/header.php';
    include './assets/includes/connect.php';

if (isset ($_GET['id'])){
  $futsalid = $_GET['id'];
  $sql = "SELECT * FROM futsal_info WHERE id = $futsalid";
  $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  ?>

<div class="page">
  <div class="containerft">
    <div class="grid-container">
      <div class="column">
        <h1>Shankhamul Futsal</h1>
        <img src="<?php echo $row ['img_path'];?>" width="300px" class="mainimg">
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

      <div class="dcolumnf">
        <div class="contentd">
          <p>Welcome to <?php echo $row['name'];?> <br> <br> <?php echo $row['discription'];?><br>
            <br> Location: <?php echo $row['location']; ?> <br>
            <?php
            if ($row ['parking_available'] == 1) {
                  echo "<br>Parking: Available";
              } else {
                  echo "<br>Parking: Not Available";
              }
          ?>
            <br>
            <br>Price:<?php echo $row['price_per_hour']; ?><br>
            <br>Time: <?php echo $row['opening_time']?> to <?php echo $row['closing_time']; ?>
          </p>
          <?php
}else
  echo "Futsal not found.";
}
?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include_once './assets/includes/footer.php';
?>
<script src="./assets/js/futsal.js"></script>
</body>

</html>