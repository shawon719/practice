<?php 
    session_start();
    if(isset($_POST["btn"])){
         $name=$_POST["txtusername"];
         $password=$_POST["txtpassword"];
         $email=$_POST["txtemail"];

         $file=file("logindata.txt");
         foreach($file as $singledata){
            list($username,$userpassword)=explode(',',trim($singledata));

             if(trim($name) ==$username && trim($password)==$userpassword){
            $_SESSION["sname"]=$name;
             header("location:demoinformation.php");
        }
        else{
            $msg="username and password are incorrect!!!!!!!!!!";
        }
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
            <a href="#"><input type="submit" name="" value="Sign up
            " id=""></a>
    </form>
</body>
</html>

