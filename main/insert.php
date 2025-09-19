<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reg_username = $_POST['username'];
    $email = $_POST['email'];
    $reg_password = $_POST['password'];
    $conf_password = $_POST['conf-password'];

    // Check if passwords match
    if ($reg_password !== $conf_password) {
        echo "Error: Passwords do not match!";
        exit;
    }

    // Hash the password for security
    $hashed_password = password_hash($reg_password, PASSWORD_DEFAULT);

    // Prepared statement for inserting into 'users' table
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $reg_username, $email, $hashed_password);

    if ($stmt->execute()) {
        // If registration is successful
        header("Location: ../main/index.php?message=success");
        exit;
    } else {
        // Error handling
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
