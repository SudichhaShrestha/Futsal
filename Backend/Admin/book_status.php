<?php
include './assets/includes/connect.php';

if (!isset($_GET['id'])) 
{
    return;
}

    
        global $con;
        $id = $_GET['id'];
        $status = "complete";

        // Assuming $con is the established database connection
        if ($con) {
            $stmt = $con->prepare("UPDATE bookings SET status = ? WHERE id=? ");
            $stmt->bind_param("si", $status,$id);
            

            if ($stmt->execute()) {
                echo "<script>alert('Update Successfully');</script>";
                header("Location: booked.php");

            } else {
                echo "<script>alert('Update Failed: " . $stmt->error . "');</script>";
            }
        } else {
            echo "<script>alert('Database connection error');</script>";
        }
    
?>
