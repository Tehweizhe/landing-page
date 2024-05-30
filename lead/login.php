<?php
session_start();

// Define your username and password
$correct_username = 'admin';
$correct_password = 'password123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $correct_username && $password == $correct_password) {
        $_SESSION['loggedin'] = true;
        header('Location: view_submissions.php');
        exit();
    } else {
        $error = "Incorrect username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Your Brand</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Your</span> Brand</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="content container">
        <h1>Login</h1>
        <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
        <form action="login.php" method="post" class="login-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="submit-button">Login</button>
        </form>
    </section>

    <footer>
        <p>© 2024 Your Brand. All rights reserved.</p>
    </footer>
</body>
</html>
