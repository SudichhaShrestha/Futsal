<?php
include './assets/includes/connect.php';
include "./assets/includes/sidebar.php";

if (isset($_SESSION['user_id'])) {
    $profileid = $_SESSION['user_id'];
    $sql = "SELECT * FROM user WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $profileid);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
}

$sql = "SELECT bookings.id, bookings.person_name, futsal_info.name AS futsal_name, bookings.status AS status, 
               bookings.booking_datetime, futsal_info.price_per_hour
        FROM bookings
        INNER JOIN futsal_info ON bookings.futsal_id = futsal_info.id";
$result = $con->query($sql);
?>

<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <h2>Booked</h2>
        </div>
        <div class="user--info">
            <?php if (isset($row['profile']) && !empty($row['profile'])) { ?>
                <a href="../User/profile.php"><img src="../User/uploads/<?php echo $row['profile']; ?>" alt="Profile Picture" class="profile-picture"></a>
                
            <?php } else { ?>
                <a href="../User/profile.php"><img src="../User/uploads/default.png" alt="Profile Picture" class="profile-picture"></a>
            <?php } ?>
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
                        <th>Booking Date/Time</th>
                        <th>Price Per Hour</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        $sn = 1;
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo htmlspecialchars($row['person_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['futsal_name']); ?></td>
                                <td><?php echo $row['booking_datetime']; ?></td>
                                <td><?php echo number_format($row['price_per_hour'], 2); ?></td>
                                <td>
                                    <?php if ($row['status'] == 'pending'): ?>
                                        <a href="book_status.php?id=<?php echo $row['id']; ?>"><?php  echo $row['status']; ?></a>
                                        <?php else : 
                                        echo $row['status'];
                                        endif; ?>
                                </td>
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
                        <td colspan="6">Total: <?php echo mysqli_num_rows($result); ?></td>
                        </tr>
                    </tfoot>
            </table>
        </div>
    </div>
</div>
