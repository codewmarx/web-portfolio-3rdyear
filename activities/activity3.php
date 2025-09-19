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
    <title>CSS Activity 3</title>
    <link rel="stylesheet" href="../css/style3.css">
</head>
<body>
    <header>
        <h1>Web Development Services</h1>
    </header>

    <nav class="navigation">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <a href="../homepage/home.php">Back</a>
    </nav>


    <main class="main">
        <section>
            <h2>Website Design and Development</h2>
            <p>Creating the user interface (UI) and experience (UX) for a website using technologies like HTML, CSS, and Javascript.</p>
        </section>
        <section>
            <h2>E-commerce Development</h2>
            <p>Building e-commerce platforms using solutions like Shopify, WooCommerce, Magento, or custom-built systems.</p>
        </section>
        <section>
            <h2>Web Application Development</h2>
            <p>Creating fast, reliable web applications that offer a native app-like experience even offline.</p>
        </section>

    </main>

    <footer>
        <p>&copy; Developed by Marko</p>
    </footer>
    
</body>
</html>