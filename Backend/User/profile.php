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
                        <label for="first-name">First Name</label>
                    </div><br>
                    <div class="personal_info">
                        <label for="last-name">Last Name </label>
                    </div><br>
                    <div class="personal_info">
                        <label for="username">Username</label>
                    </div><br>
                    <div class="personal_info">
                        <label for="number">Phone</label>
                    </div><br>
                    <div class="personal_info">
                        <label for="email">Email </label>
                    </div><br>
                    <a href="update.php"><button class="btnedit">Edit</button></a>
                    <a href="#"><button class="btnedit">Logout</button></a>
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