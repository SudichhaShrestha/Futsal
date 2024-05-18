<?php
include './assets/includes/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['savechanges'])) {
        global $con;
        $futsal_id = $_POST['futsal_id']; 
        $updated_futsal_name = $_POST['futsal_name'];
        $updated_description = $_POST['description'];
        $updated_price_per_hour = $_POST['price_per_hour'];
        $updated_opening_time = $_POST['opening_time'];
        $updated_closing_time = $_POST['closing_time'];
        $updated_parking_available = isset($_POST['parking_available']) ? 1 : 0;

        if ($con) {
            $stmt = $con->prepare("UPDATE futsal_info SET name = ?, description = ?, price_per_hour=?,opening_time = ?, closing_time=?, parking_available=? WHERE id=? ");
            $stmt->bind_param("sssssii", $updated_futsal_name, $updated_description, $updated_price_per_hour, $updated_opening_time, $updated_closing_time, $updated_parking_available, $futsal_id);

            if ($stmt->execute()) {
                echo "<script>alert('Update Successfully');</script>";
                header("Location: futsal.php");
            } else {
                echo "<script>alert('Update Failed: " . $stmt->error . "');</script>";
            }
        } else {
            echo "<script>alert('Database connection error');</script>";
        }
    }
}
?>
