<?php
    // session_start();
    // unset($_SESSION["shname"]);
    // session_destroy();
    // echo "this is log out page.";
    // echo "<br><a href='login.php'><button>log out</button></a>";
?>

<?php
    session_start();
    unset($_SESSION["shname"]);
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        /* General page styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        /* Styling for the logout message */
        h1 {
            font-size: 32px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 30px;
        }

        p {
            font-size: 18px;
            color: #fff;
            margin: 20px 0;
        }

        /* Styling for the button */
        button {
            background-color: #ff6f61;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            text-align: center;
            text-transform: uppercase;
        }

        button:hover {
            background-color: #ff4c3b;
            transform: scale(1.05);
        }

        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <h1>Logged Out Successfully!</h1>
    <p>You have successfully logged out from the system.</p>

    <a href="login.php"><button>Go to Login</button></a>

</body>
</html>
