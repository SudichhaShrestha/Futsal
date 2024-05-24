<?php
include './assets/includes/connect.php';
include("./assets/includes/sidebar.php");

if (isset($_SESSION['user_id'])) {
    $profileid = $_SESSION['user_id'];
    $sql = "SELECT * FROM user WHERE id = $profileid";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    }
}

if (isset($_GET['id'])) {
    $futsal_id = $_GET['id'];
    $sql = "SELECT * FROM futsal_info WHERE id = $futsal_id";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $futsal = mysqli_fetch_assoc($result);
        $futsal_id = $futsal['id'];
        $futsal_name = $futsal['name'];
        $description = $futsal['description'];
        $price_per_hour = $futsal['price_per_hour'];
        $opening_time = $futsal['opening_time'];
        $closing_time = $futsal['closing_time'];
        $parking_available = $futsal['parking_available'];
    } else {
        echo "Futsal not found";
        exit;
    }
} else {
    echo "Futsal ID not provided";
    exit;
}
?>


<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>Update</span>
            <h2>Futsal</h2>
        </div>
        <div class="user--info">
        <img src="<?php echo '../User/assets/images' . $row['profile']; ?>"  alt="Profile Picture" class="profile-picture">
        </div>
    </div>
    <div class="container">
        <div class="card">
            <h1 class="card-title">Update Futsal</h1>
            <form action="adminupdate.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="futsal_name">Update Name of Futsal:</label>
                    <input type="text" id="futsal_name" name="futsal_name" value="<?php echo ($futsal_name); ?>" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" required><?php echo ($description); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="price_per_hour">Price per Hour:</label>
                    <input type="number" id="price_per_hour" name="price_per_hour" min="0" value="<?php echo ($price_per_hour); ?>" required>
                </div>
                <div class="form-group">
                    <label for="opening_time">Opening Time:</label>
                    <input type="time" id="opening_time" name="opening_time" value="<?php echo ($opening_time); ?>" required>
                </div>
                <div class="form-group">
                    <label for="closing_time">Closing Time:</label>
                    <input type="time" id="closing_time" name="closing_time" value="<?php echo ($closing_time); ?>" required>
                </div>
                <div class="form-group">
                    <label for="parking_available">Parking Available:</label>
                    <input type="checkbox" id="parking_available" name="parking_available" <?php echo $parking_available ? 'checked' : ''; ?>>
                </div>
                <div class="form-group">
                    <label for="main_image">Choose Main Image for Display:</label>
                    <input type="file" id="main_image" name="main_image" accept="image/*">
                </div>
                <input type="hidden" name="futsal_id" value="<?php echo $futsal_id; ?>">
                <button type="submit" name="savechanges">Update</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>