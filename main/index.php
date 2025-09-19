<?php
include '../employees/script.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplicity Website</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <!--Header & Nav Section-->
    <header class="header-1">
        <div class="logo-container">
            <img class="logo" src="../images/2.jpg" alt="Logo">
            <h2 class="logo-title">Simplicity</h2>
        </div>
        <nav>
            <ul class="nav-link">
                <li><a href="../sub-main/home.php">Home</a></li>
                <li><a href="../sub-main/about.php">About Me</a></li>
                <li class="dropdown">
                    <a href="../sub-main/activities.php">My Activities</a>
                </li>
            </ul>
        </nav>
    </header>

    <!--Main Content-->
    <main>
        <section class="section-1">
            <article class="article-1">
                <div class="content-1">
                    <h2>Welcome, Visitors!</h2>
                    <p><span class="t-style">T</span>his main section showcases a minimal but stylish approach in web designing. We focus on the essential principles that help create visually appealing, and responsive websites.The goal is to foster skill developement in areas such color schemes, typography, layout structure, and the use of modern web technologies such as HTML5, CSS, MYSQL PHP, libraries and Javascript frameworks.</p>
                    <p>In addition to these foundational topics, I have also been working on a series of creative projects that highlight my skills in HTML and CSS. These activities include designing interactive buttons, crafting responsive layouts, and experimenting with animations and transitions to improve the overall user experience. Through these projects, I aim to push the boundaries of web design, blending creativity with functionality to deliver aesthetically pleasing results.</p>
                </div>
            </article>
        </section>

        <!--Section 2-->
        <aside class="article-2">
            <div class="content-2">
                <h2>Login</h2>
                <form action="login.php" method="POST" onsubmit="return validateForm()">
                    <p>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" >
                    </p>
                    <p>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" >
                    </p>
                    <p>
                        <button type="submit">Login</button>
                    </p>
                </form>
                <div class="register-link">Don't have an account?
                    <a href="#" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop2">Register</a>
                </div>
            </div>
        </aside>

    </main>

        <!-- registration Modal -->
        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-md"> <!-- Slightly reduced size -->
                    <div class="modal-content shadow-lg rounded-4">
                        <!-- Modal Header -->
                        <div class="modal-header bg-light border-bottom-0 rounded-top-4">
                            <h5 class="modal-title fw-bold text-primary" id="staticBackdropLabel">Register Now</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <!-- Modal Body -->
                        <div class="modal-body px-4">
                            <form action="insert.php" method="POST">
                                <div class="row g-3">
                                    <!-- Name -->
                                    <div class="col-md-12">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control rounded-3" name="username" id="reg_username" required>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-md-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control rounded-3" name="email" id="email"required>
                                    </div>
                                    <!-- Address -->
                                    <div class="col-md-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control rounded-3" name="password" id="reg_password" required>
                                    </div>
                                    <!-- Salary -->
                                    <div class="col-md-12">
                                        <label for="conf-password" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control rounded-3" name="conf-password" id="conf-password" required>
                                    </div>
                                </div>
                                <div class="mt-4 d-grid">
                                    <button type="submit" class="btn btn-primary rounded-3">Register</button>
                                    <div class="mt-3 float-right">
                                        Already have an account? <a href="../main/index.php">Login</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

    <!--Footer-->
    <footer>
            <p>&copy; WebDev with<span class="m-footer">Marko</span></p>
    </footer>
    <script src="../assets/js/index.js"></script>
    <script>
        function validateForm() {
            const username = document.getElementById('username').value;
                const password = document.getElementById('password').value;

                if (username === '' || password === '') {
                    alert("Both fields must be field out!");
                    return false;
                }
                return true;
            }
    </script>

</html>
</body>