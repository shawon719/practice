<?php
    // session_start();
    // unset($_SESSION["sname"]);
    // session_destroy();
    // //header("location:login.php");
    // echo "<h1>this is log out page.</h1>";
    // echo "<a href='login.php'><button>log out</button></a>";

?>
<?php
    session_start();
    unset($_SESSION["sname"]);
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1 {
            color: #e74c3c;
            font-size: 24px;
        }
        p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2980b9;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>You have successfully logged out!</h1>
        <p>Thank you for using our service.</p>
        <a href="login.php"><button>Go to Login Page</button></a>
    </div>
</body>
</html>
