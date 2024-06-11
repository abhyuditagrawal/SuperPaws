<?php
    session_start();

    include("db.php");
    if($_SERVER[ 'REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];


        if(!empty($username) && !empty($password) && !is_numeric($username))
        {
            $query = "select * from where email = '$username' and password='$password'";
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background-color: #1a2a24; /* Dark green background */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-form {
            background-color: #fff; /* White background */
            padding: 20px;
            border-radius: 5px; /* Rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle box shadow */
            width: 300px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none; /* Remove the default border */
            border-bottom: 2px solid #ddd; /* Add a subtle bottom border */
            outline: none; /* Remove the default outline */
        }

        .login-form input[type="submit"] {
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .login-form input[type="submit"]:hover {
            background-color: #45a049; /* Darker green background on hover */
        }
    </style>
</head>
<body>
    <form class="login-form" method = "POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <div class="form-group">
            <input type="checkbox" id="remember"><label for="remember">Remember me</label>

            <p>Not a member? <a href="sign up.html">Register here!</a></p>
        <a href="#"><p>Forgot Password?</p></a>
            
        </div>

        <input type="submit" value="Login">
        
    </form>
</body>
</html>