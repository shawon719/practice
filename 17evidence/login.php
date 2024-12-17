<?php
    session_start();

    if(isset($_POST["logbtn"])){
        $username=$_POST["uname"];
        $password=$_POST["pname"];
        $email=$_POST["ename"];

        $a='/^[a-zA-Z0-9._%$+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,4}$/';
        //validate name and show error if name are not correct
        if($username != "sharmony"){
            $usernameError="Incorrect user name.";
        }
        //validate password and show error if password are not correct
        if($password != "123"){
            $passwordError="Incorrect password.";
        }
        //validate email and show if email are not correct
        if(!preg_match($a,$email)){
            $emailError="please enter valid email.";
        }
        // Check if all fields are valid and redirect to the demo page
        if($username == "sharmony" && $password == "123" && (preg_match($a,$email))){
            $_SESSION["shname"]=$username;
            header("location:demo.php");
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
        /* General styles for the page */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form container */
        .fo {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }

        /* Heading style */
        h3 {
            color: #2575fc;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        /* Input field styles */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
        }

        /* Error message styles */
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        /* Button styles */
        button {
            width: 48%;
            padding: 12px;
            margin: 10px 5px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[name="logbtn"] {
            background-color: #2575fc;
            color: white;
        }

        button[name="logbtn"]:hover {
            background-color: #6a11cb;
        }

        button[type="button"] {
            background-color: #ddd;
            color: #333;
        }

        button[type="button"]:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>
    <section class="fo">
        <h3>Log In Page</h3>
        <form action="" method="post">
            <div>
                Username:<input type="text" name="uname" placeholder="Enter name" value="<?php echo isset($username) ? $username : ''; ?>" required>
                <?php echo isset($usernameError) && $usernameError ? "<p class='error-message'>$usernameError</p>" : ""; ?>
            </div><br>
            <div>
                Password:<input type="password" name="pname" required>
                <?php echo isset($passwordError) && $passwordError ? "<p class='error-message'>$passwordError</p>" : ""; ?>
            </div><br>
            <div>
                Email:<input type="text" name="ename" placeholder="Enter email" value="<?php echo isset($email) ? $email : ''; ?>" required>
                <?php echo isset($emailError) && $emailError ? "<p class='error-message'>$emailError</p>" : ""; ?>
            </div>
            <div>
                <button name="logbtn">Log In</button>
                <button type="button">Sign In</button>
            </div>
        </form>
    </section>
</body>
</html>
