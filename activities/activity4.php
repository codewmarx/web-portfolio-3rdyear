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
    <title>CSS Activity 2</title>
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    
    <!--header-->
    <header>
        <h1>Welcome, Visitors!</h1>
        <p class="par1">I will demonstrate you a simple design using CSS.</p>
    </header>

    <!--sections-->
    <section>
        <h2>Services</h2>
        <p>We offer various services. From web development to web designing.</p>
    </section>
    
    <section class="sect">
        <h2>Projects Deployed</h2>
        <a href="../homepage/home.php">Back</a>
        <p>The following projects are given below:</p>
        <div class="images">
            <img src="foggy.jpg" alt="Image 1"><br>
            <img src="rainy.jpg" alt="Image 2">
        </div>
    </section>

    <footer>
        <p>&copy; Designed by <i><b>Marko</b></i></p>
    </footer>

</body>
</html>