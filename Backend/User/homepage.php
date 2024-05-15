<?php
    include_once './assets/includes/header.php';
    include './assets/includes/connect.php';
?>
  
  <div class="container12">
    <div class="slider-container1">
      <div class="slider">
        <img class="imgslider" src="./assets/images/slider1.jpg" alt="">
        <img class="imgslider" src="./assets/images/slider2.jpg" alt="">
        <img class="imgslider" src="./assets/images/slider6.jpg" alt="">
        <img class="imgslider" src="./assets/images/slider4.jpg" alt="">
        <img class="imgslider" src="./assets/images/slider5.jpg" alt="">
        <img class="imgslider" src="./assets/images/slider3.jpg" alt="">
      </div>
      <div class="info">
        <h3>Up for a Futsal Match</h3>
        <p>Book your match from Goalz</p>
        <div class="sliderbtn">
          <a href="#" class="btn00">
            <h2>Learn More</h2>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php
  global $con;
  $sql = "SELECT * FROM futsal_info LIMIT 4";
  $result = mysqli_query($con, $sql); ?>
  <div class="futsal-container">
    <div class="futsal-demo">
      <div class="nearfutsal">
        <h1 class="futsalheading">Futsals</h1>
      </div>
    </div>
    <div class="img-wrap">
      <?php
    if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="nearby">';
                    ?>
                    <figure>
                        <a href="futsal.php?id=<?php echo $row['id']; ?>">
                            <img src="<?php echo $row['img_path']; ?>" alt="<?php echo $row['name']; ?>" />
                        </a>
                    </figure>
                    <?php
                    echo '<h5>' . $row['name'] . '</h5>';
                    echo '</div>';
                }
            } else {
                echo "No Futsal found.";
            }
            ?>
      </div>
    </div>
  </div>

  <?php
    include_once './assets/includes/footer.php';
  ?>
  <script src="./assets/js/homepage.js"></script>
</body>
</html>