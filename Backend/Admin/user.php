<?php
include("./assets/includes/sidebar.php");
include './assets/includes/connect.php';
$sql = "SELECT id, username, usertype FROM user";
$result = mysqli_query($con, $sql);
?>


<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <h2>User</h2>
        </div>
        <div class="user--info">
            <img src="./image/om2.jpg" alt="">
        </div>
    </div>

    <div class="tabular-wrapper">
        <h3 class="main-title"></h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>User Name</th>
                        <th>Role</th>
                        <th>Action</th>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        $sn = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['usertype']; ?></td>
                                <td><button>Edit</button></td>
                            </tr>
                            <?php
                            $sn++;
                        }
                    } else {
                        echo "<tr><td colspan='4'>No user data available</td></tr>";
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                    <td colspan="4">Total: <?php echo mysqli_num_rows($result); ?></td>
                    </tr>
                </tfoot>
                </thead>
            </table>
        </div>

    </div>
    </body>

    </html>