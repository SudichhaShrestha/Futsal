<?php
    include_once './assets/includes/header.php';
    include './assets/includes/connect.php';
    
    if (isset ($_SESSION['user_id'])){
        $profileid = $_SESSION['user_id'];
        $sql = "SELECT * FROM user WHERE id = $profileid";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        }
    }
    else{
        header('Location: login.php');
    }
?>
    <!-- Start of body -->
    <div class="containerp">
        <form action="#">
            <div class="Profile_info">
                <div class="form-container">
                    <h2>Profile Page</h2>
                    <img src="./uploads/<?php echo $row ['profile'];?>" alt="Profile Picture" class="profile-picture">
                    <div class="personal_info">
                        <label for="first-name"><?php echo $row ['firstname'];?></label>
                    </div><br>
                    <div class="personal_info">
                        <label for="last-name"><?php echo $row ['lastname'];?></label>
                    </div><br>
                    <div class="personal_info">
                        <label for="username"><?php echo $row ['username'];?></label>
                    </div><br>
                    <div class="personal_info">
                        <label for="number"><?php echo $row ['phone'];?></label>
                    </div><br>
                    <div class="personal_info">
                        <label for="email"> <?php echo $row ['email'];?> </label>
                    </div><br>
                   <a href="./update.php" class="link-edit">Edit</a>
                   <a href="./logout.php" class="link-edit">Logout</a>
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