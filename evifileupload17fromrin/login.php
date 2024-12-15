<?php
session_start();
if(isset($_POST['btnSubmit'])){
    $username=$_POST['txtUsername'];
    $password=$_POST['txtPassword'];


    if($username=="admin" && $password=="123"){
        $_SESSION['rnam']=$username;
        header("location:demo.php");
    }else{
        $msg="Username or Password  incorrect!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <div>
        username:<br>
        <input type="text" name="txtUsername"/>    
        </div>

        <div>
            Password:<br>
            <input type="password" name="txtPassword"/>
        </div>

        <div>
            Email:<br>
            <input type="text" name="txtEmail"/>
        </div>

        <div>
            <input type="Submit" value="Log-In" name="btnSubmit"/>
        </div>
        
    </form>
</body>
</html>



