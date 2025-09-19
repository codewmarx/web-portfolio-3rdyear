<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if user is not logged in
    header("Location: ../main/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="../assets/js/script.js"></script>
    <!-- font kit -->
    <script src="https://kit.fontawesome.com/3163bec1e3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar" class="sidebar">
            <!-- content for sidebar -->
             <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">CodwMarko</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin Elements
                    </li>
                    <li class="sidebar-item">
                        <a href="../homepage/home.php" class="sidebar-link">
                            <i class="fa-solid fa-home icon"></i>
                            <span class="link-text">Home</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="?page=dashboard" class="sidebar-link">
                            <i class="fa-solid fa-list icon"></i>
                            <span class="link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="?page=table" class="sidebar-link">
                            <i class="fa-solid fa-users icon"></i>
                            <span class="link-text">View Employee Table</span>
                        </a>
                    </li>
                </ul>
             </div>
        </aside>

        <!-- main content -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#"  data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="../assets/img/user.png" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="../main/user-login.php" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- main content -->
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        switch ($page) {
                            case 'dashboard':
                                $dashboardContent = <<<HTML
                                <div class="mb-3">
                                    <h4>Employee Management</h4>
                                </div>
                                <div class="row">
                                    <!-- first illustration -->
                                    <div class="col-12 col-md-6 d-flex">
                                        <div class="card flex-fill border-0 illustration">
                                            <div class="card-body p-0 d-flex flex-fill">
                                                <div class="row g-0 w-100">
                                                    <div class="col-6">
                                                        <div class="p-3 m-1">
                                                            <h4>Welcome Back, <span class="fw-bold text-primary">Admin!</span></h4>
                                                            <p class="mb-0">Here's your personalized dashboard.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 align-self-center text-center">
                                                        <img src="../assets/img/customer-support.avif" class="illustration-img img-fluid" alt="customer-support">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- second illustration -->
                                    <div class="col-12 col-md-6 d-flex">
                                        <div class="card flex-fill border-0 illustration">
                                            <div class="card-body p-0 d-flex flex-fill">
                                                <div class="row g-0 w-100">
                                                    <div class="col-6 align-self-center text-center">
                                                        <img src="../assets/img/growth.jpg" class="illustration-img img-fluid" alt="hr-system">
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="p-3 m-1">
                                                            <h4>Let's <span class="fw-bold text-primary">Organize</span>, Admin!</h4>
                                                            <p class="mb-0">Access your tools and manage your tasks effectively.</p>
                                                            <a href="?page=table" class="btn btn-primary btn-bg mt-2">View Employee Table</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- another visual -->
                                <div class="card flex-fill border-0 illustration shadow-sm">
                                    <div class="card-body p-0 d-flex flex-fill">
                                        <div class="row g-0 w-100">
                                            <!-- Content -->
                                            <div class="col-6">
                                                <div class="p-3 m-1">
                                                    <h4 class="mb-2 fw-medium">What is <span class="fw-bold text-primary">Employee Management?</span></h4>
                                                    <p class="mb-0">
                                                        <span class="fw-medium text-primary">Employee management</span> refers to the processes and strategies organizations use to oversee and optimize their workforce. It ensures employees are productive, engaged, and aligned with company goals.
                                                    </p>
                                                    <!-- See More Button -->
                                                    <button type="button" class="btn btn-primary btn-md mt-3" data-bs-toggle="modal" data-bs-target="#employeeManagementModal">
                                                        See More
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Image -->
                                            <div class="col-6 align-self-center text-center">
                                                <img src="../assets/img/teamwork.jpg" class="illustration-img img-fluid" alt="Growth Image" style="max-height: 250px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-body-secondary small text-center">
                                        Just now
                                    </div>
                                </div>

                                <!-- Bootstrap Modal -->
                                <div class="modal fade" id="employeeManagementModal" tabindex="-1" aria-labelledby="employeeManagementModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h5 class="modal-title fw-bold text-primary" id="employeeManagementModalLabel">Understanding Employee Management</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                <p>
                                                    <span class="fw-medium text-primary">Employee management</span> is a vital component of any successful organization. It involves planning, coordinating, and controlling the activities and well-being of employees to ensure they remain productive and motivated.
                                                </p>
                                                <h6 class="fw-semibold text-primary">Why is Employee Management Important?</h6>
                                                <ul>
                                                    <li>Enhances overall employee productivity and performance.</li>
                                                    <li>Improves employee engagement and job satisfaction.</li>
                                                    <li>Ensures clear communication and alignment with company goals.</li>
                                                    <li>Helps identify skill gaps and training opportunities.</li>
                                                    <li>Reduces employee turnover and increases retention.</li>
                                                </ul>
                                                <h6 class="fw-semibold text-primary">Key Aspects of Employee Management:</h6>
                                                <ol>
                                                    <li><span class="fw-medium text-dark">Recruitment & Onboarding:</span> Hiring and integrating new employees.</li>
                                                    <li><span class="fw-medium text-dark">Performance Management:</span> Setting goals and evaluating performance.</li>
                                                    <li><span class="fw-medium text-dark">Employee Development:</span> Training and growth opportunities.</li>
                                                    <li><span class="fw-medium text-dark">Workforce Communication:</span> Ensuring collaboration and clarity.</li>
                                                    <li><span class="fw-medium text-dark">Employee Well-being:</span> Supporting physical and mental health.</li>
                                                </ol>
                                                <p>
                                                    By implementing effective employee management strategies, companies can foster a positive work environment and drive long-term success.
                                                </p>
                                            </div>
                                            <!-- Modal Footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                HTML;
                                echo $dashboardContent;
                                break;
                            case 'table';
                                include '../admin/table.php';
                        }
                    } else {
                        // Default page content (dashboard)
                        $defaultDashboardContent = <<<HTML
                        <div class="mb-3">
                            <h4>Employee Management</h4>
                        </div>
                        <div class="row">
                            <!-- first illustration -->
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card flex-fill border-0 illustration">
                                    <div class="card-body p-0 d-flex flex-fill">
                                        <div class="row g-0 w-100">
                                            <div class="col-6">
                                                <div class="p-3 m-1">
                                                    <h4>Welcome Back, Marko!</h4>
                                                    <p class="mb-0">Here's your personalized dashboard.</p>
                                                </div>
                                            </div>
                                            <div class="col-6 align-self-center text-center">
                                                <img src="../assets/img/customer-support.avif" class="illustration-img img-fluid" alt="customer-support">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- second illustration -->
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card flex-fill border-0 illustration">
                                    <div class="card-body p-0 d-flex flex-fill">
                                        <div class="row g-0 w-100">
                                            <div class="col-6 align-self-center text-center">
                                                <img src="../assets/img/growth.jpg" class="illustration-img img-fluid" alt="hr-system">
                                            </div>
                                            <div class="col-6">
                                                <div class="p-3 m-1">
                                                    <h4>Stay Organized, Marko!</h4>
                                                    <p class="mb-0">Access your tools and manage your tasks effectively.</p>
                                                    <a href="?page=employees" class="btn btn-primary btn-bg mt-2">Manage Employees</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        HTML;
                        echo $defaultDashboardContent;
                    }   
                    ?>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



