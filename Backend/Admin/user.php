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


//delete user
if (isset($_POST['delete_user'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM user WHERE id = '$id'";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "<script> alert('Data Deleted'); </script>";
        header("location:user.php");
    } else {
        echo "<script> alert('Failed To Delete Data'); </script>";
    }
}
?>


<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <h2>User</h2>
        </div>
        <div class="user--info">
        <img src="<?php echo '../User/assets/images' . $row['profile']; ?>"  alt="Profile Picture" class="profile-picture">
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
                        <th>Edit</th>
                <tbody>
                    <?php
                    $sql_users = "SELECT * FROM user";
                    $result_users = mysqli_query($con, $sql_users);
                    if ( mysqli_num_rows($result_users) > 0) {
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
                                    <td>
                                      <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">

                                        <input type="submit" name="delete_user" style="background-color: red;" class="btn-edit" value="Delete">
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
                        <td colspan="5">Total: <?php echo mysqli_num_rows($result_users); ?></td>
                    </tr>
                </tfoot>
                </thead>
            </table>
        </div>

    </div>
    </body>

    </html>