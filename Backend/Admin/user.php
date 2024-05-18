<?php
include("./assets/includes/sidebar.php");
include './assets/includes/connect.php';

if (isset($_SESSION['user_id'])) {
    $profileid = $_SESSION['user_id'];
    $sql = "SELECT * FROM user WHERE id = $profileid";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
}


if (isset($_POST['edit_user'])) {
    $user_id = $_POST['user_id'];
    $update_user = $_POST['update_user'];
    $usertype = "UPDATE `user` SET `usertype` = '$update_user' WHERE `id` = '$user_id'";
    $sql = mysqli_query($con, $usertype);

    if ($sql) {
        header("Location: user.php");
    } else {
        echo "<script>alert('Failed to update user type');</script>";
    }
}
?>


<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <h2>User</h2>
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
                    $sql_users = "SELECT * FROM user";
                    $result_users = mysqli_query($con, $sql_users);
                    if (mysqli_num_rows($result_users) > 0) {
                        $sn = 1;
                        while ($rows = mysqli_fetch_assoc($result_users)) {
                    ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo $rows['username']; ?></td>
                                <form action="#" method="post">
                                    <td>
                                        <input type="hidden" name="user_id" value="<?php echo $rows['id']; ?>">
                                        <select name="update_user">
                                            <option disabled selected><?php echo $rows['usertype']; ?></option>
                                            <option value="admin">admin</option>
                                            <option value="user">user</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="submit" name="edit_user" class="btn-edit" value="Save Change">
                                    </td>
                                </form>

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