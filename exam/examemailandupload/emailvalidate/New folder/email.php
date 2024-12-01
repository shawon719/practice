<?php
    include_once("emailclass.php");
        if(isset($_POST["sub"])){
            $email=$_POST["em"];

            $obj=new Email($email);

            if ($obj->emailvalidate()) {
                 echo "The email address '$email' is valid.";
                } else {
                    echo "The email address '$email' is invalid.";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>
</head>
<body>
    <form action="$" method="post">
        <input type="email" name="em" id=""><br>
        <input type="submit" name="sub" value="submit" id="">
    </form>
</body>
</html>