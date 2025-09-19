<?php
include 'conn.php';

// fetching all the data
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM employee WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
}

// Check if ID is passed correctly
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the ID
} else {
    die("Invalid ID provided.");
}

// Check if POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $department = $_POST['department'];
    $job_title = $_POST['job_title'];
    $dob = date('Y-m-d', strtotime($_POST['dob']));

    // Use prepared statements to update employee table
    $stmt1 = $conn->prepare("UPDATE employee SET name=?, email=?, address=?, dob=? WHERE id=?");
    $stmt1->bind_param("ssssi", $name, $email, $address, $dob, $id);

    if ($stmt1->execute()) {
        // Now updating the employee_details table
        $stmt2 = $conn->prepare("UPDATE employee_details SET salary=?, department=?, job_title=? WHERE employee_id=?");

        // Make sure to bind parameters correctly based on their data types
        $stmt2->bind_param("dssi", $salary, $department, $job_title, $id);

        // If successfully updated the employee_details
        if($stmt2->execute()) {
            header("Location: /employeeManagement/dashboard/?page=employees");
            exit();
        } else {
            echo "Error updating employee details: " . $stmt2->error;
        }

        $stmt2->close();
    } else {
        echo "Error updating employee: " . $stmt1->error;
    }

    $stmt1->close();
}

$conn->close();
?>
