<?php
    //session section start here.
    session_start();
    if(isset($_POST["btn"])){
        $username=$_POST["namefield"];
        $email=$_POST["emfield"];
        $password=$_POST["pafield"];
        if($username=="shawon" && $password=="shawon2001"){
            $_SESSION["sname"]=$username;
            header("location: demopage.php");
        }else{
            $m="username and password are incorrect";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in page</title>
</head>
<body>
    <?php
            echo isset($m)?$m:"";
    ?>

    <form action="#" method="post">
        <h1>Please enter following field then log in student information</h1>
        <div>
            Username:
            <input type="text" name="namefield" id="">
        </div><br>
        <div>
            Email:
            <input type="text" name="emfield" id="">
        </div><br>
        <div>
            Password:
            <input type="text" name="pafield" id="">
        </div><br>
        <div>
        <input type="submit" name="btn" value="submit">
        </div>
    </form>
    
</body>
</html>

<?php
        // session_start();
        // if(isset($_POST["btn"])){
        //     $username=$_POST["txtusername"];
        //     $password=$_POST["txtpassword"];
        //     $email=$_POST["emfield"];
        //     if($username=="admin" && $password=="123"){
        //         $_SESSION["rname"]=$username;
        //         header("location:registrationpage.php");
        //     }
        //     else{
        //         $msg="username or passwoed is incorrectE!";
        //     }
        // }

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authenticaton </title>
</head>
<body>
        <?php
                echo isset($msg)?$msg:"";
        ?>
        <section id="forms">
            <form action="#" method="post">
                <div>
                        User Name: <br>
                        <input type="text" name="txtusername" id="n">
                </div>
                <div>
                    email:
                    <input type="text" name="emfield" id="">
                </div>
                <div>
                        Password: <br>
                        <input type="password" name="txtpassword" id="p">
                </div>
                 
                <div>
                        <input type="submit" name="btn" value="submit">
                </div>
            </form>
        </section>
    
</body>
</html> -->