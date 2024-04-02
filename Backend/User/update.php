<?php
    include_once './assets/includes/header.php';
    include './assets/includes/connect.php';
?>
    <!-- Start of body -->
    <div class="containerp">
        <form action="#" method="post">
            <div class="Profile_info">
                <h2>Update Page</h2>
                <div class="form-container">
                <label for="profile-picture" class="edit-profile-picture">
                    <div class="image-container">
                        <img src="./assets/images/img.jpg" alt="Profile Picture" class="profile-picture">
                        <span class="edit-button">Edit</span>
                    </div>
                    <input type="file" id="profile-picture" name="profile-picture" class="file-input" accept="image/*">
                </label>
                    <div class="personal_info">
                        <input type="text" id="first-name" name="first-name" >
                        <label for="first-name">First Name</label>
                    </div><br>
                    <div class="personal_info">
                        <input type="text" id="last-name" name="last-name" >
                        <label for="last-name">Last Name </label>
                    </div><br>
                    <div class="personal_info">
                        <input type="text" id="username" name="username" >
                        <label for="username">Username</label>
                    </div><br>
                    <div class="personal_info">
                        <input type="number" id="number" name="number">
                        <label for="number">Phone</label>
                    </div><br>
                    <div class="personal_info">
                        <input type="email" id="email" name="email" >
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