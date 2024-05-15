<?php
include './assets/includes/connect.php';
include("./assets/includes/sidebar.php");

if (isset($_GET['id'])) {
    $futsal_id = $_GET['id'];

    $sql = "SELECT * FROM futsal_info WHERE id = $futsal_id";
    $result = mysqli_query($con, $sql);


    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $futsal_name = $row['name'];
        $description = $row['description'];
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
            <img src="/image/om2.jpg" alt="">
        </div>
    </div>
    <div class="container">
        <div class="card">
            <h1 class="card-title">Update Futsal</h1>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="futsal_name">Update Name of Futsal:</label>
                    <input type="text" id="futsal_name" name="futsal_name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="main_image">Choose Main Image for Display:</label>
                    <input type="file" id="main_image" name="main_image" accept="image/*" required>
                </div>
                <button type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>