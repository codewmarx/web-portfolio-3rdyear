<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">

    <script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script defer src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script defer src="../assets/js/config.js"></script>
</head>
<body>
    <div class="mb-3">
        <h4>Employee Records</h4>
    </div>
    <div class="container">
        <table id="example" class="table table-striped table-hover" style="width:100%">
            <thead class="text-center table-success">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Salary</th>
                    <th>Department</th>
                    <th>Job Title</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../connection/dbconnect.php';
                $sql = "SELECT employee.id, employee.name, employee.email, employee.address, employee.dob, employee.age,
                employee_details.salary, employee_details.department, employee_details.job_title
                FROM employee LEFT JOIN employee_details ON employee.id = employee_details.employee_id";

                $result = $conn->query($sql);

                // fetching the data
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr class='text-center'>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['address']}</td>
                            <td>{$row['salary']}</td>
                            <td>{$row['department']}</td>
                            <td>{$row['job_title']}</td>
                            <td>{$row['dob']}</td>
                            <td>{$row['age']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>No employees found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>