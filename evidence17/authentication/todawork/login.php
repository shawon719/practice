<?php
session_start();
if (isset($_POST['btn'])) {
    $username = $_POST['na'];
    $password = $_POST['pa'];
    $email = $_POST['em'];
    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    // Initialize error messages for each field
    $usernameError = "";
    $passwordError = "";
    $emailError = "";

    // Validate email
    if (!preg_match($pattern, $email)) {
        $emailError = "Please enter a valid email.";
    }

    // Validate username
    if ($username != "shawon") {
        $usernameError = "INCORRECT USER NAME.";
    }

    // Validate password
    if ($password != "123") {
        $passwordError = "Incorrect password.";
    }

    // Check if all fields are valid and redirect if so
    if ($username == "shawon" && $password == "123" && preg_match($pattern, $email)) {
        $_SESSION["sname"] = $username;
        header("Location: demo.php");
        exit();
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
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 300px;
            box-sizing: border-box;
        }
        .login-container h3 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .login-container input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .login-container button {
            width: 100%;
            padding: 12px;
            background-color:rgb(119, 146, 186);
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-container button:hover {
            background-color:rgb(134, 77, 130);
        }
        .error-message {
            color: red;
            font-size: 14px;
        }
        label {
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form action="#" method="post">
            <h3>Login Page</h3>

            <!-- Username field -->
            <label for="na">User Name:</label>
            <input type="text" name="na" placeholder="Enter name" value="<?php echo isset($username) ? $username : ''; ?>" required>
            <?php //echo isset($usernameError) && $usernameError ? "<p class='error-message'>$usernameError</p>" : ""; ?>

            <!-- Password field -->
            <label for="pa">Password:</label>
            <input type="password" name="pa" placeholder="Enter password" required>
            <?php echo isset($passwordError) && $passwordError ? "<p class='error-message'>$passwordError</p>" : ""; ?>

            <!-- Email field -->
            <label for="em">Email:</label>
            <input type="text" name="em" placeholder="Enter email" value="<?php echo isset($email) ? $email : ''; ?>" required>
            <?php echo isset($emailError) && $emailError ? "<p class='error-message'>$emailError</p>" : ""; ?>

            <button name="btn">Submit</button>
        </form>
    </div>
</body>
</html>