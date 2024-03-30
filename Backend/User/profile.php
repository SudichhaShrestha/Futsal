<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User Profile</title>

</head>

<body>

    <header class="site-header">
        <div id="menu-bar" class="fa fa-bars"></div>
        <a href="#" class="logo"><span>G</span>oalz</a>
        <nav class="navbar">
            <a href="homepage.php">Home</a>
            <a href="#">About Us</a>
            <a href="#">Review</a>
            <a href="#">Contact</a>
            <a href="#">Book</a>
            <a href="login.php"><button class="btnLogin-popup">Login</button></a>
        </nav>

        <div class="icons">
            <i class="fa fa-search" id="search-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fa fa-search"></label>
        </form>
    </header>
    <!--End of header-->
    <!-- Start of body -->
    <div class="container">
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
    <script src="/assets/js/homepage.js"></script>
</body>

</html>