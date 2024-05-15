<?php
// Check if delete_id is provided in the URL
if (isset($_GET['delete_id'])) {
    // Assuming $conn is already established
    // Prepare the SQL DELETE query
    $sql = "DELETE FROM table_name WHERE id = :delete_id";

    try {
        // Prepare the SQL statement
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':delete_id', $_GET['delete_id']);

        // Execute the statement
        $stmt->execute();

        echo "Record deleted successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
