<?php
    include_once './assets/includes/header.php';
    ?>
    <!-- Start of body -->
    <div class="containerp">
        <form action="#">
            <div class="Profile_info">
                <h2>Profile Page</h2>
                <div class="form-container">
                    <img src="./assets/images/img.jpg" alt="Profile Picture" class="profile-picture">
                    <div class="personal_info">
                        <input type="text" id="first-name" name="first-name" required>
                        <label for="first-name">First Name</label>
                    </div><br>
                    <div class="personal_info">
                        <input type="text" id="last-name" name="last-name" required>
                        <label for="last-name">Last Name </label>
                    </div><br>
                    <div class="personal_info">
                        <input type="text" id="username" name="username" required>
                        <label for="username">Username</label>
                    </div><br>
                    <div class="personal_info">
                        <input type="number" id="number" name="number" required>
                        <label for="number">Phone</label>
                    </div><br>
                    <div class="personal_info">
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email </label>
                    </div><br>
                    <a href="profile.php"><button class="savechanges">Save Changes</button></a>
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