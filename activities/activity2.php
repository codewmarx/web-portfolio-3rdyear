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
    <title>CSS Activity 1</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
    
    <!--headings-->
    <div>
        <h1>This is the main heading</h1>
        <button id="btn-3"><a href="../homepage/home.php">Go Back</a></button>
        <h2>This is a sub-heading</h2>
    </div>


    <!--paragraphs-->
    <p class="paragraph1">This is a sample paragraph. This paragraph will be transformed using a class selector.</p>
    <p>This is a default paragpraph for comparison.</p>
    
    <!--buttons-->
    <div id="container">
        <p class="pg1">You can sign up or login here:</p>
            <button id="btn-1">Login</button>
            <button id="btn-2">Sign up</button>
    </div>

    <!--lists-->
    <h3>Types of developers:</h3>
    <ul class="lists">
        <li>Front-end Devs</li>
        <li>Back-end Devs</li>
        <li>Full-stack Devs</li>
        <li>Mobile Devs</li>
    </ul>

    <!--anchor-->
    <a href="#default" class="anchor1">You may hover to this link.</a>
</body>
</html>