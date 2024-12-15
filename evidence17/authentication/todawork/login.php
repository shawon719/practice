<?php
    session_start();
        if(isset($_POST['btn'])){
            $username=$_POST['na'];
            $password=$_POST['pa'];
            $email=$_POST['em'];
            $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
            if(!preg_match($pattern,$email)){
                echo "please enter a valid email.";
            }else{
                echo "entered email successfully.<br>";
            }
                if($username=="shawon" && $password=="123" && $email==$pattern){
                    $_SESSION['sname']=$username;
                    header("location:demo.php");
                }
                else{
                    $m="username,password and email are incorrect.";
                }

        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <section>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="">User Name:</label></td>
                    <td><input type="text" name="na" placeholder="enter name"></td>
                </tr>
                <tr>
                    <td><label for="">Password:</label></td>
                    <td><input type="password" name="pa" placeholder="enter password"></td>
                </tr>
                <tr>
                    <td><label for="">Email:</label></td>
                    <td><input type="text" name="em" placeholder="enter email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button name="btn">Submit</button></td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>