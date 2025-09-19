<?php
include '../connection/dbconnect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $department = $_POST['department'];
    $job_title = $_POST['job_title'];
    $dob = date('Y-m-d', strtotime($_POST['dob']));


    // sql prepared statement for security
    $stmt1 = $conn->prepare("INSERT INTO employee (name, email, address, dob) VALUES (?, ?, ?, ?)");
    $stmt1->bind_param("ssss", $name, $email, $address, $dob);

    if ($stmt1->execute()) {
        // getting the ID of the newly inserted employee to be inserted into the employee_details table
        $employee_id = $stmt1->insert_id;

        // insert data into the employee_details table
        $stmt2 = $conn->prepare("INSERT INTO employee_details (employee_id, salary, department, job_title) VALUES (?, ?, ?, ?)");
        $stmt2->bind_param("idss", $employee_id, $salary, $department, $job_title);

        if ($stmt2->execute()) {
            // if successfully inserted both records:
            header("Location: /employeeManagement/dashboard/?page=employees");
        } else {
            // throw an error for inserting into employee_details
            echo "Error: " . $stmt2->error;
        }
        // close 2nd statement
        $stmt2->close();
    } else {
        // throw an error for inserting into employee
        echo "Error: " . $stmt1->error;
    }
    // closethe 1st statement
    $stmt1->close();
    $conn->close();
}

?>