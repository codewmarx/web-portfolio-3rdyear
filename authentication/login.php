<?php 

session_start();
include '../connection/dbconnect.php';

    if (isset($_POST['username']) && isset($_POST['password'])) {
        // sanitize the input
        function validate($data) {
            return htmlspecialchars(stripslashes(trim($data)));
        }

        $uname = validate($_POST['username']);
        $password = validate($_POST['password']);

        // checking for empty inputs
        if (empty($uname)) {
            header("Location: /main/user-login.php?error=Username is required");
            exit();
        } else if(empty($password)) {
            header("Location: /main/user-login.php?error=Password is required");
            exit();
        }

        // prepare statement to check username
        $stmt = $conn->prepare("SELECT * FROM logintab WHERE username = ?");
        $stmt->bind_param("s", $uname);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            // verifying password
            if ($password === $row['password']) {
                // storing session variables
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['role'] = $row['role'];

                // redirect on the dashboard based on role
                if ($row['role'] === 'employee') {
                    header("Location: /employeeManagement/dashboard/?page=dashboard");
                } else {
                    header("Location: /employeeManagement/admin/index.php");
                }
                exit();
            } else {
                echo "Incorrect credentials.";
            }
        } else {
            echo "Incorrect credentials.";
        }
    } else {
        header("Location: /employeeManagement/main/user-login.php");
        exit();
    }

?>