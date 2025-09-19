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
    <title>Homepage</title>
    <link rel="stylesheet" href="../css/homepage.css">
</head>
<body>
    <!--Header & Nav Section-->
    <header>
        <div class="logo-container">
            <img class="logo" src="../images/2.jpg" alt="Logo">
            <h2 class="logo-title">Simplicity</h2>
        </div>
        <nav>
            <ul class="nav-link">
                <li><a href="home.php">Home</a></li>
                <li><a href="../main/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <!--Main Content-->
    <main>
        <div class="button-container">
            <h2>Welcome to the Web Home System</h2>
            
            <!-- Dropdown Activities Button -->
            <div class="dropdown">
                <button>Activities</button>
                <div class="dropdown-content">
                    <a href="../activities/activity1.php">Activity 1</a>
                    <a href="../activities/activity2.php">Activity 2</a>
                    <a href="../activities/activity3.php">Activity 3</a>
                    <a href="../activities/activity4.php">Activity 4</a>
                </div>
            </div>
            
            <div class="dropdown">
                <select onchange="navigateToPage(this)" class="custom-dropdown">
                    <option value="" disabled selected>Select an Option</option>
                    <option value="../dashboard/index.php">Employee Management System (User)</option>
                    <option value="../admin/index.php">Employee Management System(Admin)</option>
                </select>
            </div>
        </div>
    </main>

    <script>
    function navigateToPage(selectElement) {
        const url = selectElement.value;
            if (url) {
                window.location.href = url; 
            }
        }
    </script>

    <!--Footer-->
    <footer>
        <p>&copy; WebDev with <span>Marko</span></p>
    </footer>
</body>
</html>
