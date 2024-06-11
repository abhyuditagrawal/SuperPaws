<?php
    session_start();

    include("db.php");

    if($_SERVER[ 'REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $address = $_POST['address'];

        if(!empty($username) && !empty($password) && !is_numeric($username))
        {



            $query = "insert into form (fname, lname, uname, pass, email, number, address) values ('$firstname', '$lastname', '$username', '$password', '$email', '$number', '$address')";


            mysqli_query($con, $query);

            echo "<script type = 'text/javascript'> alert('Sucessfully Registered')</script>";
        }

        else{
            echo "<script type = 'text/javascript'> alert('Please enter some valid information')</script>";
        }
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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
    <form class="login-form" method="post">

        <center><h1>SIGN UP</h1></center>

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" required>

        <label for="lname">Last name</label>
        <input type="text" id="lname" name="lname" required>


        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="cpassword">Confirm Password</label>
        <input type="password" id="cpassword" name="cpassword" required>

        <label for="email">Email ID</label>
        <input type="text" id="email" name="email" required>

        <label for="number">Phone number</label>
        <input type="text" id="number" name="number" required>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>

        <p>Already a member? <a href="login.html">Login!</a></p>
        </div>


        <input type="submit" value="Sign UP">
        
    </form>
</body>
</html>