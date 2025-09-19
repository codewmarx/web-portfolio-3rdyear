<?php
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Fetch the user's data from the database
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the entered password with the hashed password in the database
        if (password_verify($password, $user['password'])) {
            // Set session variables upon successful login
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Redirect to the home page
            header("Location: ../homepage/home.php");
            exit;
        } else {
            // Incorrect password
            header("Location: ../main/index.php?error=Incorrect password");
            exit;
        }
    } else {
        // User not found
        header("Location: ../main/index.php?error=User not found");
        exit;
    }

    $stmt->close();
}
$conn->close();
?>
