<?php
            session_start();

        if(isset($_POST["logbtn"])){
            $username=$_POST["uname"];
            $password=$_POST["pname"];
            $email=$_POST["ename"];

            $a='/^[a-zA-Z0-9._%$+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,4}$/';
            //validate name and show error if name are not correct
            if($name != "sharmony"){
                $usernameerror="Incorrect user name.";
            }
            //validate password and show error if password are not correct
            if($password != "123"){
                $passworderror="Incorrect password.";
            }
            //validate email and show if email are not correct
            if(!preg_match($a,$email)){
                $emailerror="please enter valid email.";
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
    <title>login page </title>
</head>
<body>
    <section class="fo">
        <form action="" method="post">
            <div>
                Username:<input type="text" name="uname">
            </div><br>
            <div>
                Password:<input type="password" name="pname">
            </div><br>
            <div>
                Email:<input type="text" name="ename">
            </div>
            <div>
                <button name="logbtn">Log In</button>
                <button>Sign In</button>
                
            </div>
        </form>
    </section>
</body>
</html>