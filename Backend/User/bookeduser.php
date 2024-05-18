<?php
include_once './assets/includes/header.php';
include './assets/includes/connect.php';

if (isset($_SESSION['user_id'])) {
    $profileid = $_SESSION['user_id'];

    $sql = "SELECT bookings.id,bookings.person_name,futsal_info.name AS futsal_name,bookings.booking_datetime,futsal_info.price_per_hour,
            bookings.status FROM bookings
            INNER JOIN futsal_info ON bookings.futsal_id = futsal_info.id
             WHERE bookings.user_id = $profileid";
    $result = mysqli_query($con, $sql);;
}
?>

<body>
    <section class="home">
        <h1>Your Bookings</h1>
        <div class="table-container">
            <table class="order-table">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Futsal Name</th>
                        <th>Detail Time/Date</th>
                        <th>Perhour</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($result) && mysqli_num_rows($result) > 0) {
                        $sn = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo $row['person_name']; ?></td>
                                <td><?php echo $row['futsal_name']; ?></td>
                                <td><?php echo $row['booking_datetime']; ?></td>
                                <td><?php echo $row['price_per_hour']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                            </tr>
                    <?php
                            $sn++;
                        }
                    } else {
                        echo "<tr><td colspan='6'>No booked data available</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>