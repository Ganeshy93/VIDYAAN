<?php
$conn = new mysqli('localhost', 'root', '', 'sih');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `login` (email, password) VALUES ('$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to index.php upon successful insertion
        header("Location: demo-education.html");
        exit(); // Ensure that no other output is sent before the redirect
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>






<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vidyan_portal</title>
    <!-- Add the correct path to your CSS file -->
    <link href="login.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:500" rel="stylesheet" type="text/css">
</head>
<body>
    <form action="login.php" method="POST">
        <div class="login">
            <div class="login-header">
                <h1>VIDYAAN</h1>
            </div>

            <div class="login-form">  
                <h3>Useremail:</h3>
                <input type="text" placeholder="Useremail" name="email" id="email" required><br>
                <h3>Password:</h3>
                <input type="password" placeholder="Password" name="password" id="password" required>  
                <!-- <br>
                <input type="submit" value="Login" class="login-button" name="submit" id="submit">
                <br> -->
                <br>
<a href="../dashboard/html/index.php" class="login-button">Login</a>
<br>

                <a href="register.php" class="sign-up">Sign Up!</a>
                <br>
                <h6 class="no-access">Can't access your account?</h6>
            </div>   
        </div>  
    </form>
    <?php
    if (isset($error)) {
        echo '<div class="error">' . $error . '</div>';                                                                     
    }
    ?>
</body>
</html>
