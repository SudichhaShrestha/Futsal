<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/booking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Book Page</title>
</head>

<body>
    <header class="site-header">
        <div id="menu-bar" class="fa fa-bars"></div>
        <a href="#" class="logo"><span>G</span>oalz</a>
        <nav class="navbar">
            <a href="homepage.html">Home</a>
            <a href="#">About Us</a>
            <a href="#">Review</a>
            <a href="#">Contact</a>
            <a href="#">Book</a>
            <a href="login.html"><button class="btnLogin-popup">Login</button></a>
        </nav>

        <div class="icons">
            <i class="fa fa-search" id="search-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fa fa-search"></label>
        </form>
    </header>

    <div class="page">
        <div class="container">
            <form action="#">
                <div class="grid-container">

                    <div class="column">
                        <h1>Shankhamul Futsal</h1>
                        <img src="./assets/images/img.jpg" width="300px" class="mainimg">
                    </div>
                    <div class="dcolumn">
                        <div class="form">
                            <div class="person">
                                <input type="text" id="text" name="text" placeholder="Person Name" required />
                            </div>
                            <div class="person">
                                <input type="number" id="number" name="number" placeholder="Contact-number" />

                            </div>
                            <div class="person">
                                <input type="email" id="email" name="email" placeholder="Email" required />

                            </div>
                            <div class="person">
                                <input type="datetime-local" id="dateandtime" name="dateandtime" required />

                            </div>
                        </div><br><br>

                        <div class="btn"><a href="#">Book Now</a></div>
                    </div>
                </div><br><br>

        </div>
        </form>
    </div>
    </div>
</body>

</html>