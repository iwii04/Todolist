<?php
include_once "register.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Register Form -->
    <div class="container" id="signup" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="firstName" id="first name" placeholder="First Name" required>
                <label for="fname"></label>        
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lastName" id="last name" placeholder="Last Name" required>
                <label for="lname"></label>
            </div>
            <!-- <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email_register" placeholder="Email" required>
                <label for="email_register"></label>
            </div> -->
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password_register"></label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>

        <!-- Link ke Login -->
        <div class="links">
            <p>Already have an account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <!-- Sign In Form -->
    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="tambah.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="firstName" id="first name" placeholder="First Name" required>
                <label for="firstName"></label>        
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="lastName"></label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password_login"></label>
            </div>
            <p class="recover">
                <a href="#">Recover password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>

        <!-- Link ke Register -->
        <div class="links">
            <p>Don't have an account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>