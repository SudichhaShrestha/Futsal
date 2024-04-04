<?php
include_once './assets/includes/header.php';
include './assets/includes/connect.php';

$profileid = $_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['savechange'])) {
        $profile = $_FILES["profile_image"];
        $firstname = $_POST["first-name"];
        $lastname = $_POST["last-name"];
        $username = $_POST["username"];
        $phone = $_POST["number"];
        $email = $_POST["email"];

        $picname = rand(1000, 10000) . '-' . $profile['name'];
        $tname = $profile['tmp_name'];
        $upload_dir = './uploads/';

        move_uploaded_file($tname, $upload_dir . $picname);

        $updatequery = $con->prepare("UPDATE `user` SET `firstname` = ?, `lastname` = ?, `username` = ?, `phone` = ?, `email` = ?, `profile` = ? WHERE `id` = ?");
        $updatequery->bind_param("sssissi", $firstname, $lastname, $username, $phone, $email, $picname, $profileid);

        if ($updatequery->execute()) {
            echo "<script>alert('Update Successfully');</script>";
        } else {
            echo "<script>alert('Update Failed');</script>";
        }
    }
}
?>

<!-- Start of body -->
<div class="containerp">
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="Profile_info">
            <h2>Update Page</h2>
            <div class="form-container">
                <label for="profile-picture" class="edit-profile-picture">
                    <div class="image-container">
                        <img src="./assets/images/img.jpg" alt="Profile Picture" class="profile-picture">
                        <span class="edit-button">Edit</span>
                    </div>
                    <input type="file" id="profile-picture" name="profile_image" class="file-input">
                </label>
                <div class="personal_info">
                    <input type="text" id="first-name" name="first-name">
                    <label for="first-name">First Name</label>
                </div><br>
                <div class="personal_info">
                    <input type="text" id="last-name" name="last-name">
                    <label for="last-name">Last Name </label>
                </div><br>
                <div class="personal_info">
                    <input type="text" id="username" name="username">
                    <label for="username">Username</label>
                </div><br>
                <div class="personal_info">
                    <input type="number" id="number" name="number">
                    <label for="number">Phone</label>
                </div><br>
                <div class="personal_info">
                    <input type="email" id="email" name="email">
                    <label for="email">Email </label>
                </div><br>
                <button type="submit" class="link-edit" name="savechange">Save Changes</button>
            </div>
        </div>
    </form>
</div>
<?php
include_once './assets/includes/footer.php';
?>
<script src="/assets/js/homepage.js"></script>
</body>

</html>