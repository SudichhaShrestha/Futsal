<?php
include './assets/includes/connect.php';
include("./assets/includes/sidebar.php");
$sql = "SELECT bookings.id, bookings.person_name, futsal_info.name AS futsal_name, bookings.booking_datetime, futsal_info.price_per_hour
        FROM bookings
        INNER JOIN futsal_info ON bookings.futsal_id = futsal_info.id";
$result = mysqli_query($con, $sql);
?>
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Booked</h2>
            </div>
            <div class="user--info">
                <img src="/image/om2.jpg" alt="">
            </div>
        </div>
        <div class="tabular-wrapper">
            <div class="table-container">
                <table>
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
                    if (mysqli_num_rows($result) > 0) {
                        $sn = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo $row['person_name']; ?></td>
                                <td><?php echo $row['futsal_name']; ?></td>
                                <td><?php echo $row['booking_datetime']; ?></td>
                                <td><?php echo $row['price_per_hour']; ?></td>
                                <td><button>Edit</button></td>
                            </tr>
                            <?php
                            $sn++;
                        }
                    } else {
                        echo "<tr><td colspan='6'>No booked data available</td></tr>";
                    }
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">Total:<?php echo mysqli_num_rows($result); ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
