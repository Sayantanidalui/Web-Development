<?php
session_start();

include '../includes/config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["admin_name"]);
    $password = $_POST["admin_password"];

    $fixed_password = "secret123"; 

    if ($password === $fixed_password) {
        $_SESSION["admin_logged_in"] = true;
        $_SESSION["admin_name"] = $name;
        header("Location: panel.php");
        exit();
    } else {
        $error = "Incorrect password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body {
            background-image: url('../assets/bg5.jpg');
            height: 85vh;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            font-family: Arial;
        }
        .login-box {
            width: 350px;
            margin: 100px auto;
            background: #fff;
            padding: 25px;
            box-shadow: 0 0 10px #9a0b0bff;
            border-radius: 10px;
           
        }
        .login-box h2 {
            text-align: center;
        }
        .login-box input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
        }
        .login-box button {
            width: 100%;
            padding: 10px;
            background: #9a0b0bff;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 1rem;
        }
        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="login-box">
    <h2>Admin Login</h2>
    <?php if (!empty($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST">
        Name
        <input type="text" name="admin_name" placeholder="Enter your name" class="form-control" required/>
        Password
        <input type="password" name="admin_password" placeholder="Enter fixed password"  class="form-control"required />
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>