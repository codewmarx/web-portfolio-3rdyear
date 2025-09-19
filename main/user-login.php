<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">Login Portal</div>
        <form action="../authentication/login.php" method="post">
            <!-- login credentials authentication -->
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php } ?>

            <div class="field">
                <input type="text" name="username" required>
                <label>Username or Email</label>
            </div>

            <div class="field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <div class="field">
                <input type="submit" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="register.php">Register</a></div>
        </form>
    </div>
</body>
</html>