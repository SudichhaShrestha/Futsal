<?php

include("./assets/includes/sidebar.php");
include('./assets/includes/connect.php');
if (isset($_SESSION['user_id'])) {
    $profileid = $_SESSION['user_id'];
    $sql = "SELECT * FROM user WHERE id = $profileid";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
}

$sql = "SELECT id, name, location FROM futsal_info";
$result = mysqli_query($con, $sql);
?>

<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <h2>Futsals</h2>
        </div>
        <div class="user--info">
        <img src="<?php echo '../User/assets/images' . $row['profile']; ?>"  alt="Profile Picture" class="profile-picture">
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
                        <th>Update</th>
                        <th>Edit</th>
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
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['location']; ?></td>
                                <td><a class="btn-edit" href="UpdateFutsal.php?id=<?php echo $row['id']; ?> ">Edit</a></td>
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <td><input type="submit" name="delete" class="btn-delete" value="Delete"></td>
                                </form>
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
                        <td colspan="5">Total: <?php echo mysqli_num_rows($result); ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
</body>

</html>