<?php 
    session_start();
    if(isset($_POST["btn"])){
         $username=$_POST["txtusername"];
         $password=$_POST["txtpassword"];
         $email=$_POST["txtemail"];
        if($username=="shawon" && $password=="123"){
            $_SESSION["sname"]=$username;
             header("location:demoinformation.php");
        }
        else{
            $msg="username and password are incorrect!!!!!!!!!!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in page </title>
</head>
<body>

        <?php 
                echo isset($msg)?$msg:" ";
        ?>
    <form action="#" method="post">
        <h1>this is first page</h1>
        <table>
            <tr>
                <th><label for="">User Name:</label></th>
                <th><input type="text" name="txtusername" id="" required></th> 
            </tr>
            <tr>
                <th>Password:</th>
                <th><input type="text" name="txtpassword" id="" required></th>
            </tr>
            <tr>
                <th>Email:</th>
                <th><input type="email" name="txtemail" required></th>
            </tr>
        </table>
            <input type="submit" name="btn"  value="Log in" id="">
    </form>
</body>
</html>

