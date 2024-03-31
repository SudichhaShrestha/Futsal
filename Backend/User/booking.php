    <?php
    include_once './assets/includes/header.php';
    ?>

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