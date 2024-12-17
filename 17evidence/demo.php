<?php
    session_start();
    if(!isset($_SESSION["shname"])){
        header("location:login.php");
    }// session code end

    //file upload start
    if(isset($_POST["btn"])){
        $filename=$_FILES["imgFile"];
        var_dump($filename);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo page </title>
</head>
<body>

    <h3>this is demo page </h3>
    <section>
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                Name:<input type="text" placeholder="Enter your name">
            </div><br>
            <div>
                ID:<input type="number" placeholder="Enter your id">
            </div>
            <div>
                Image:<input type="file" name="imgFile">
            </div>
            <div>
                <button name="btn">Submit</button>
            </div>
        </form>
    </section>
    
</body>
</html>