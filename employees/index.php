<?php
include 'conn.php';
include 'script.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <link rel="stylesheet" href="../assets/css/table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/3163bec1e3.js"></script>
</head>
<body>
    
    <div class="container mb-3">
        <h4 class="text1">Manage Employees</h4>

         <!-- button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Add Employee</button>

        <!-- modal for adding records -->
         <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Employee Records</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <!-- adding employee form -->
                        <div class="mt-12">
                            <form action="create.php" method="POST" onsubmit="return validate()">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address" id="address" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="salary">Salary</label>
                                        <input type="number" class="form-control" name="salary" id="salary" required min="0" step="0.01" title="Enter a valid salary (e.g., 1500 or 1500.50)">
                                    </div>
                                    <div class="mb-3">
                                        <label for="department">Department</label>
                                        <input type="text" class="form-control"
                                        name="department" id="department" title="Enter your department.">
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_title">Job Title</label>
                                        <input type="text" class="form-control" name="job_title" id="job_title" title="Your position as an employee.">
                                    </div>
                                    <div class="mb-3">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" id="dob" required>
                                        <input type="hidden" name="login_id" value="<?php echo $_SESSION['user_id']; ?>">
                                    </div>
                                <button type="submit" class="btn btn-primary">Add Employee</button>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
         </div>
 
         <!-- Update Employee Modal -->
        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-md"> <!-- Slightly reduced size -->
                <div class="modal-content shadow-lg rounded-4">
                    <!-- Modal Header -->
                    <div class="modal-header bg-light border-bottom-0 rounded-top-4">
                        <h5 class="modal-title fw-bold text-primary" id="staticBackdropLabel">Update Employee Records</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body px-4">
                        <form action="update.php?id=<?php $id; ?>" method="POST">
                            <div class="row g-3">
                                <!-- Name -->
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control rounded-3" name="name" id="name" value="<?= $row['name']?>" required>
                                </div>
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control rounded-3" name="email" id="email" value="<?= $row['email']?>" required>
                                </div>
                                <!-- Address -->
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control rounded-3" name="address" id="address" value="<?= $row['address']?>" required>
                                </div>
                                <!-- Salary -->
                                <div class="col-md-6">
                                    <label for="salary" class="form-label">Salary</label>
                                    <input type="number" class="form-control rounded-3" name="salary" id="salary" value="<?= $row['salary']?>" required>
                                </div>
                                <!-- Department -->
                                <div class="col-md-6">
                                    <label for="department" class="form-label">Department</label>
                                    <input type="text" class="form-control rounded-3" name="department" id="department" value="<?= $row['department']?>" required>
                                </div>
                                <!-- Job Title -->
                                <div class="col-md-6">
                                    <label for="job_title" class="form-label">Job Title</label>
                                    <input type="text" class="form-control rounded-3" name="job_title" id="job_title" value="<?= $row['job_title']?>" required>
                                </div>
                                <!-- Date of Birth -->
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control rounded-3" name="dob" id="dob" value="<?= $row['dob']?>" required>
                                </div>
                                
                            </div>
                            <div class="mt-4 d-grid">
                                <button type="submit" class="btn btn-primary rounded-3">Update Employee</button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Modal Footer -->
                    <div class="modal-footer bg-light border-top-0 rounded-bottom-4">
                        <div>
                            <div class="spinner-border spinner-border-sm text-secondary me-2" role="status"></div>
                            <span class="text-secondary">Processing...</span>
                        </div>
                        <button type="button" class="btn btn-secondary rounded-3" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


         <!-- employees table -->
        <section class="intro">
            <div class="bg-image mt-3 h-100">
                <div class="mask d-flex align-items-center h-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead class="text-center table-success">
                                                    <tr class="text-primary">
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">Salary</th>
                                                        <th scope="col">Department</th>
                                                        <th scope="col">Job Title</th>
                                                        <th scope="col">Date of Birth</th>
                                                        <th scope="col">Age</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include 'conn.php';
                                                    $sql = "SELECT employee.id, employee.name, employee.email, employee.address, employee.dob, employee.age,
                                                            employee_details.salary, employee_details.department, employee_details.job_title
                                                            FROM employee LEFT JOIN employee_details ON employee.id = employee_details.employee_id";

                                                    $result = $conn->query($sql);

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
                                                                    <td>
                                                                        <button class='btn edit-btn'
                                                                            data-id = '" . $row['id'] . "'
                                                                            data-name='" . htmlspecialchars($row['name'], ENT_QUOTES) . "'
                                                                            data-email='" . htmlspecialchars($row['email'], ENT_QUOTES) . "'
                                                                            data-address='" . htmlspecialchars($row['address'], ENT_QUOTES) . "'
                                                                            data-salary='" . htmlspecialchars($row['salary'], ENT_QUOTES) . "'
                                                                            data-department='" . htmlspecialchars($row['department'], ENT_QUOTES) . "'
                                                                            data-job_title='" . htmlspecialchars($row['job_title'], ENT_QUOTES) . "'
                                                                            data-dob='" . $row['dob'] . "'
                                                                            data-age='" . $row['age'] . "'
                                                                            data-bs-toggle='modal'
                                                                            data-bs-target='#staticBackdrop2'>
                                                                            <i class='fa-solid fa-user-pen'></i>
                                                                        </button>
                                                                            <button class='btn btn-danger btn-sm px-3' data-id='{$row['id']}' onclick='confirmDelete(this)'>
                                                                            <i class='fa-solid fa-trash'></i>
                                                                            </button>
                                                                    </td>
                                                                </tr>";
                                                        }
                                                    } else {
                                                        echo "<tr><td colspan='9' class='text-center'>No employees found</td></tr>";
                                                    }
                                                    $conn->close();
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

        <!-- delete functionv for confirmation -->
    <script>
        function confirmDelete(button) {
            const id = button.getAttribute("data-id");
            const confirmed = confirm("Are you sure you want to delete this record? This action cannot be undone.");

            if (confirmed) {
                // Always construct the correct absolute path
                const deleteUrl = `/employeeManagement/employees/delete.php?id=${id}&page=employees`;
                window.location.href = deleteUrl; // Navigate to the delete script;
            } else {
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.edit-btn');
        
        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Extracting data attributes
                const id = this.getAttribute('data-id');
                const name = this.getAttribute('data-name');
                const email = this.getAttribute('data-email');
                const address = this.getAttribute('data-address');
                const salary = this.getAttribute('data-salary');
                const department = this.getAttribute('data-department');
                const job_title = this.getAttribute('data-job_title');
                const dob = this.getAttribute('data-dob');
                
                // Selecting modal form elements
                document.querySelector('#staticBackdrop2 #name').value = name;
                document.querySelector('#staticBackdrop2 #email').value = email;
                document.querySelector('#staticBackdrop2 #address').value = address;
                document.querySelector('#staticBackdrop2 #salary').value = salary;
                document.querySelector('#staticBackdrop2 #department').value = department;
                document.querySelector('#staticBackdrop2 #job_title').value = job_title;
                document.querySelector('#staticBackdrop2 #dob').value = dob;

                // Updating form action
                document.querySelector('#staticBackdrop2 form').action = `update.php?id=${id}`;
            });
        });
    });

    </script>



</body>
</html>

    <!------------------------<: SOME SQL COMMANDS I MODIFIED/USED :>------------------------>
    <!-- sql age auto-generated
    DELIMITER $$

    CREATE TRIGGER before_employee_update
    BEFORE UPDATE ON employee
    FOR EACH ROW
    BEGIN
        SET NEW.age = TIMESTAMPDIFF(YEAR, NEW.dob, CURDATE());
    END $$

    DELIMITER ;
    -->

    <!-- migrating data from an existing table into a new table
    INSERT INTO employee_details (employee_id, salary, department, job_title)
    SELECT id, salary, department, job_title
    FROM employee; -->

    <!-- dropping existing foreign key constraint
    ALTER TABLE employee_details
    DROP FOREIGN KEY employee_details_ibfk_1;  -- this will drop the existing foreign key constraint

    ALTER TABLE employee_details
    ADD CONSTRAINT employee_details_ibfk_1
    FOREIGN KEY (employee_id) REFERENCES employee(id)
    ON DELETE CASCADE;
    -->

