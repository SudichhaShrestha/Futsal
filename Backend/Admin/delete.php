<?php
include('./assets/includes/connect.php');
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM futsal_info WHERE id = '$id'";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "<script> alert('Data Deleted'); </script>";
        header("location:futsal.php");
    } else {
        echo "<script> alert('Failed To Delete Data'); </script>";
    }
}
