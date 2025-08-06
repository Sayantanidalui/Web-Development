<?php
session_start();
include '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user  = mysqli_fetch_assoc($query);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['name'];
        header("Location:../index.php");
        exit;
    } else {
        echo "Invalid email or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-image: url('../assets/bg2.jpg');
    height: 100vh;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover; 
    margin: 0;
    padding: 0;
}

.card-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.card {
    background-color: #ffff;
    padding: 40px;
    width: 350px;
    box-shadow: 0 0 2rem rgba(94, 2, 2, 1);
    border-radius: 10px;
    text-align: left;
}

.card h2 {
    margin-bottom: 20px;
    color: #333;
    font-size: 30px;
    margin-top: 0;
}

.card input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #a3a3a3ff;
}
.card button {
    width: 100%;
    padding: 10px;
    background-color: #dc3545;
    color: white;
    border: none;
    border-radius: 5px;
    font-weight: bold;
}

.card button:hover {
    background-color: #c82333;
}

.card a {
    color: #dc3545;
    text-decoration: none;
}
#center{
    text-align: center;
}
.card a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
    <div class="card-container">
        <div class="card">
<h2 id="center">Login</h2>
<form method="POST">
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit" style="font-size :18px;">Login</button>
</form>
<p id="center">New user? <a href="signup.php">Create account</a></p>
</div>
</div>
</body>
</html>