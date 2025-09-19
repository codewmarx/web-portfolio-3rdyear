<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/css/register.css">
    <script defer src="../assets/js/index.js"></script>
</head>
<body>
    
    <div class="container">
        <form action="#" id="form" name="myForm" onsubmit="return formValidate()">
            <h1>Registration</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input type="email" name="email" id="text">
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="input-control">
                <label for="conf-password">Cofirm Password</label>
                <input type="password" id="conf-password" name="conf-password">
            </div>
            <button type="submit">Register</button>
            <div class="login-link">Already have an account? <a href=".php">Login</a></div>
        </form>
    </div>

</body>
</html>