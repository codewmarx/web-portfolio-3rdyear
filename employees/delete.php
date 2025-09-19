<?php
include '../connection/dbconnect.php';

// Deleting a specific row of data from the database
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform delete operation
    $sql = "DELETE FROM employee WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the correct page
        header("Location: /employeeManagement/dashboard/?page=employees");
        exit(); // Ensure no further code is executed after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
