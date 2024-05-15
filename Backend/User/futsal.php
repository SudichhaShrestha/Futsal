<?php
include_once './assets/includes/header.php';
include './assets/includes/connect.php';

if (isset($_GET['id'])) {
    $futsalid = $_GET['id'];

    // Fetch futsal information
    $futsal_sql = "SELECT * FROM futsal_info WHERE id = $futsalid";
    $futsal_result = mysqli_query($con, $futsal_sql);

    if (mysqli_num_rows($futsal_result) > 0) {
        $futsal_row = mysqli_fetch_assoc($futsal_result);

        // Fetch booking information for the selected futsal
        $booking_sql = "SELECT * FROM bookings WHERE futsal_id = $futsalid";
        $booking_result = mysqli_query($con, $booking_sql);
?>
        <div class="page">
            <div class="containerft">
                <div class="grid-container">
                    <div class="column">
                        <h1><?php echo $futsal_row['name']; ?></h1>
                        <img src="<?php echo $futsal_row['img_path']; ?>" width="300px" class="mainimg">
                        <div class="gallery">
                            <div class="image">
                                <!-- Add gallery images here -->
                            </div>
                        </div>
                        <div id="modal" class="modal">
                            <span class="close" onclick="closeModal()">&times;</span>
                            <img class="modal-content" id="modal-image">
                        </div>
                        <div class="booked">
                            <select class="time">
                                <option value="time_slot1">Unavailable Time</option>
                                <?php
                                // Display booking options
                                while ($booking_row = mysqli_fetch_assoc($booking_result)) {
                                    echo '<option value="' . $booking_row['booking_datetime'] . '">' . $booking_row['booking_datetime'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="btn"><a href="booking.php?id=<?php echo $futsal_row['id']; ?>">Book Now</a></div>
                    </div>

                    <div class="dcolumnf">
                        <div class="contentd">
                            <p>Welcome to <?php echo $futsal_row['name']; ?> <br> <br> <?php echo $futsal_row['discription']; ?><br>
                                <br> Location: <?php echo $futsal_row['location']; ?> <br>
                                <?php echo $futsal_row['parking_available'] ? "<br>Parking: Available" : "<br>Parking: Not Available"; ?>
                                <br>
                                <br>Price: <?php echo $futsal_row['price_per_hour']; ?><br>
                                <br>Time: <?php echo $futsal_row['opening_time'] ?> to <?php echo $futsal_row['closing_time']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    } else {
        echo "Futsal not found.";
    }
}
include_once './assets/includes/footer.php';
?>
<script src="./assets/js/futsal.js"></script>
</body>

</html>