<?php

include("./assets/includes/sidebar.php");
include './assets/includes/connect.php';
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $futsal_name = $_POST['futsal_name'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $price_per_hour = $_POST['price_per_hour'];
    $opening_time = $_POST['opening_time'];
    $closing_time = $_POST['closing_time'];
    $parking_available = isset($_POST['parking_available']) ? 1 : 0;


    $profile = $_FILES['picprofile'];
    $picname = rand(1000, 10000) . '-' . $profile['name'];
    $tname = $profile['tmp_name'];
    $upload_dir = './uploads/';
    move_uploaded_file($tname, $upload_dir . $picname);


    $query = "INSERT INTO futsal_info (name, description, location, price_per_hour, opening_time, closing_time, parking_available, img_path) 
    VALUES ('$futsal_name', '$description', '$location', $price_per_hour, '$opening_time', '$closing_time', $parking_available, '$picname', ')";


    if (mysqli_query($con, $query)) {
        echo "<script> alert ('Futsal added successfully.');</script>";
    } else {
        echo "<script> alert ('Failed to add Futsal.');</script>";
    }
}
?>

<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>ADD</span>
            <h2>Futsal</h2>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <h1 class="card-title">Add Futsal</h1>
            <form action="#" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="futsal_name">Name of Futsal:</label>
                    <input type="text" id="futsal_name" name="futsal_name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" id="location" name="location" required>
                </div>
                <div class="form-group">
                    <label for="price_per_hour">Price per Hour:</label>
                    <input type="number" id="price_per_hour" name="price_per_hour" min="0" required>
                </div>
                <div class="form-group">
                    <label for="opening_time">Opening Time:</label>
                    <input type="time" id="opening_time" name="opening_time" required>
                </div>
                <div class="form-group">
                    <label for="closing_time">Closing Time:</label>
                    <input type="time" id="closing_time" name="closing_time" required>
                </div>
                <div class="form-group">
                    <label for="parking_available">Parking Available:</label>
                    <input type="checkbox" id="parking_available" name="parking_available">
                </div>
                <div class="form-group">
                    <label for="main_image">Choose Main Image for Display:</label>
                    <input type="file" name="picprofile" id="picprofile" require />
                </div>
                <!-- <div class="form-group">
                    <label for="gallery_images">Choose Image(s) for Gallery:</label>
                    <input type="file" id="gallery_images" name="gallery_images[]" accept="image/*" multiple required>
                </div> -->
                <button type="submit">Add Futsal</button>
            </form>

        </div>
    </div>
</div>
</body>

</html>