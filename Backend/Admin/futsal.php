<?php

include("./assets/includes/sidebar.php");
include './assets/includes/connect.php';

$sql = "SELECT id, name, location FROM futsal_info";
$result = mysqli_query($con, $sql);
?>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Futsals</h2>
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
                            <th>Futsal Name</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    if (mysqli_num_rows($result) > 0) {
                        // Loop through each row of data
                        $sn = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['location']; ?></td>
                                <td><a href="UpdateFutsal.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                                <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                            </tr>
                            <?php
                            $sn++;
                        }
                    } else {
                       
                        echo "<tr><td colspan='4'>No futsal data available</td></tr>";
                    }
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                        <td colspan="4">Total: <?php echo mysqli_num_rows($result); ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
