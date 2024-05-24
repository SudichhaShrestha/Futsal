<?php
include_once './assets/includes/header.php';
include './assets/includes/connect.php';
//esewa Payment integeration
$url = '"https://uat.esewa.com.np/epay/main';

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['booking'])) {
        $person_name = mysqli_real_escape_string($con, $_POST['text']);
        $contact_number = mysqli_real_escape_string($con, $_POST['number']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $booking_datetime = mysqli_real_escape_string($con, $_POST['dateandtime']);
        $futsal_id = $_GET['id'];
        
        // Retrieve user_id from session
        $user_id = $_SESSION['user_id'];

        $check_futsal_query = "SELECT * FROM futsal_info WHERE id = $futsal_id";
        $check_futsal_result = mysqli_query($con, $check_futsal_query);
        if (mysqli_num_rows($check_futsal_result) > 0) {
            // Insert booking details along with user_id
            $insertquery = "INSERT INTO bookings (person_name, contact_number, email, booking_datetime, futsal_id, user_id) VALUES ('$person_name', '$contact_number', '$email', '$booking_datetime', $futsal_id, $user_id)";
            $result = mysqli_query($con, $insertquery);

            if ($result) {
                echo "<script>alert('Booked Successfully');</script>";
            } else {
                die("Error: " . mysqli_error($con));
            }
        } else {
            echo "Error: Futsal not found.";
        }
    }

    if (isset($_GET['id'])) {
        $futsalid = $_GET['id'];
        $sql = "SELECT * FROM futsal_info WHERE id = $futsalid";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        }
    }
} else {
    // Redirect to login page if user is not logged in
    header('Location: login.php');
}
?>

<div class="page">
    <div class="container">
        <form action="#" method="post">
            <div class="layout-grid">
                <div class="main-column">
                    <h1><?php echo !empty($row['name']) ? htmlspecialchars($row['name']) : ''; ?></h1>
                    <img src="<?php echo !empty($row['img_path']) ? htmlspecialchars($row['img_path']) : ''; ?>" width="300px" class="mainimg" alt="Main Image">
                </div>
                <div class="details-column">
                    <div class="form">
                        <div class="form-group">
                            <input type="text" id="text" name="text" placeholder="Person Name" required />
                        </div>
                        <div class="form-group">
                            <input type="number" id="number" name="number" placeholder="Contact Number" required min="0"/>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <input type="datetime-local" id="dateandtime" name="dateandtime" required />
                        </div>
                    </div><br><br>
                    <div id="bookNowButton">
                        <button type="submit" class="btns" name="booking">Book Now</button>
                    </div>
                    <div class="popup" id="popupContent">
                        <img src="./assets/images/correct.jpg" alt="Success">
                        <h2>Thank You!</h2>
                        <p>Your futsal has been booked. Thanks!</p>
                        <button type="button" onclick="closePopup()">OK</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>


<?php
include_once './assets/includes/footer.php';
?>
<script src="./assets/js/futsal.js"></script>
</body>
</html>
