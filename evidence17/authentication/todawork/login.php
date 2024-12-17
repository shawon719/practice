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




<?php
//     session_start();

//     if(isset($_POST["logbtn"])){
//         $username=$_POST["uname"];
//         $password=$_POST["pname"];
//         $email=$_POST["ename"];

//         $a='/^[a-zA-Z0-9._%$+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,4}$/';
//         //validate name and show error if name are not correct
//         if($username != "sharmony"){
//             $usernameError="Incorrect user name.";
//         }
//         //validate password and show error if password are not correct
//         if($password != "123"){
//             $passwordError="Incorrect password.";
//         }
//         //validate email and show if email are not correct
//         if(!preg_match($a,$email)){
//             $emailError="please enter valid email.";
//         }
//         // Check if all fields are valid and redirect to the demo page
//         if($username == "sharmony" && $password == "123" && (preg_match($a,$email))){
//             $_SESSION["shname"]=$username;
//             header("location:demo.php");
//         }
//     }
?>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* General styles for the page */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            box-sizing: border-box;
        }

        /* Form container */
        .fo {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
            transition: all 0.3s ease-in-out;
        }

        /* Heading style */
        h3 {
            color: #ff7e5f;
            margin-bottom: 30px;
            font-size: 26px;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* Input field styles */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
            background-color: #f7f7f7;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #ff7e5f;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(255, 126, 95, 0.5);
        }

        /* Error message styles */
        .error-message {
            color: #ff6347;
            font-size: 12px;
            margin-top: 5px;
            font-style: italic;
        }

        /* Button styles */
        button {
            width: 48%;
            padding: 12px;
            margin: 10px 5px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        button[name="logbtn"] {
            background-color: #ff7e5f;
            color: white;
        }

        button[name="logbtn"]:hover {
            background-color: #feb47b;
        }

        button[type="button"] {
            background-color: #ddd;
            color: #333;
        }

        button[type="button"]:hover {
            background-color: #bbb;
        }

        /* Hover and focus effects */
        button:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Mobile responsiveness */
        @media (max-width: 480px) {
            .fo {
                width: 90%;
                padding: 20px;
            }

            h3 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <section class="fo">
        <h3>Log In Page</h3>
        <form action="" method="post">
            <div>
                Username:<input type="text" name="uname" placeholder="Enter username" value="<?php echo isset($username) ? $username : ''; ?>" required>
                <?php //echo isset($usernameError) && $usernameError ? "<p class='error-message'>$usernameError</p>" : ""; ?>
            </div><br>
            <div>
                Password:<input type="password" name="pname" required>
                <?php //echo isset($passwordError) && $passwordError ? "<p class='error-message'>$passwordError</p>" : ""; ?>
            </div><br>
            <div>
                Email:<input type="text" name="ename" placeholder="Enter email" value="<?php echo isset($email) ? $email : ''; ?>" required>
                <?php //echo isset($emailError) && $emailError ? "<p class='error-message'>$emailError</p>" : ""; ?>
            </div>
            <div>
                <button name="logbtn">Log In</button>
                <button type="button">Sign In</button>
            </div>
        </form>
    </section>
</body>
</html>  -->

    