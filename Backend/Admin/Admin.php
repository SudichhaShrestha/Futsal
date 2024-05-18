<?php
include './assets/includes/connect.php';
include("./assets/includes/sidebar.php");

$sql = "SELECT bookings.id, bookings.person_name, futsal_info.name AS futsal_name, bookings.status AS status, 
               bookings.booking_datetime, futsal_info.price_per_hour
        FROM bookings
        INNER JOIN futsal_info ON bookings.futsal_id = futsal_info.id";
$results = $con->query($sql);


$sql = "SELECT * FROM user ";
$resultuser = mysqli_query($con, $sql);
if (mysqli_num_rows($resultuser) > 0) {
    $row = mysqli_fetch_assoc($resultuser);
}

?>
<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>Primary</span>
            <h2>Dashboard</h2>
        </div>
    </div>

    <div class="card-container">
        <h3 class="main--title">Today's Date</h3>
        <div class="card-wrapper">

            <div class="booking-card light-green">
                <div class="card--header">
                    <div class="amount">
                        <span>Payment Amount</span>
                        <span class="amount-value">$500.00</span>
                    </div>
                    <i class="fas fa-dollar-sign icon"></i>
                </div>
                <span class="card-detail">**** ****** ****06</span>
            </div>

            <div class="booking-card light-purple">
                <div class="card--header">
                    <div class="amount">
                        <span>Booking Order</span>
                        <span class="amount-value"><?php echo mysqli_num_rows($results); ?></span>
                    </div>
                    <i class="fas fa-list icon dark-purple"></i>
                </div>
            </div>

            <div class="booking-card light-pink">
                <div class="card--header">
                    <div class="amount">
                        <span>Users</span>
                        <span class="amount-value"><?php echo mysqli_num_rows($resultuser); ?></span>
                    </div>
                    <i class="fas fa-users icon dark-pink"></i>
                </div>
            </div>

            <div class="booking-card light-blue">
                <div class="amount">
                    <span>Payment Proceed</span>
                    <span class="amount-value">$500.00</span>
                </div>
                <i class="fas fa-check icon dark-blue"></i>
            </div>
            <span class="card-detail">**** ***** *****06</span>
        </div>
    </div>

    <div class="tabular-wrapper">
        <h3 class="main-title">Finance Data</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Transcation Method</th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024-03-21</td>
                        <td>Esewa</td>
                        <td>1200</td>
                        <td>Sankhamul Futsal Court Booking</td>
                        <td>Pending</td>
                        <td><button>Edit</button></td>
                    </tr>
                    <tr>
                        <td>2024-03-25</td>
                        <td>Card</td>
                        <td>1500</td>
                        <td>Dhapasi Futsal Court Booking</td>
                        <td>Pending</td>
                        <td><button>Edit</button></td>
                    </tr>
                    <tr>
                        <td>2024-03-28</td>
                        <td>Khalti</td>
                        <td>600</td>
                        <td>Chabhil Futsal Court Booking</td>
                        <td>Pending</td>
                        <td><button>Edit</button></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">Total: 3300</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
</body>

</html>