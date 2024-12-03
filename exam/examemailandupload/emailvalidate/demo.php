<?php
        session_start();
        if(!isset($_SESSION["sname"])){
            header("location:login.php");
        }


        if (isset($_POST["btnSubmit"])) {
        $filename = $_FILES["my_file"]["name"];
        $temp_file = $_FILES["my_file"]["tmp_name"];
        var_dump($filename);
        $size=$_FILES["my_file"]["size"];
        $type=$_FILES["my-file"]["type"];

        // The directory where the file will be saved
        $img = "image/";

        $kb=$size/1024;

        if($kb>500 && $type=="jpg"){
            move_uploaded_file("$temp_file","$img.$filename");
            echo "successful";
        }else{
            echo "size is less than 500";
        }

        // Check if the file name is not empty
        // if (!empty($filename)) {
        //     // Construct the full path where the file will be moved
        //     $target_file = $img . basename($filename);

        //     // Move the uploaded file to the target directory
        //     if (move_uploaded_file($temp_file, $target_file)) {
        //         echo "File has been uploaded successfully.";
        //     } else {
        //         echo "Sorry, there was an error uploading your file.";
        //     }
        // } else {
        //     echo "Please select a file.";
        // }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo php </title>
</head>
<body>
    <a href="another.php">another</a>

    <form action="#" method="post">
        <div>
            ID: <br>
            <input type="text" name="txtId" id="">
        </div>
        <div>
            Name: <br>
            <input type="text" name="txtName">
        </div>
        <div>
            Email: <br>
            <input type="email" name="txtemail" id="">
        </div>
        <div>
            Password: <br>
            <input type="password" name="txtpassword" id="">
        </div>
        <div>
            Phone: <br>
            <input type="number" name="txtNumber" id="">
        </div>
        <div>
            <input type="file" name="my_file" id="">
        <input type="submit" name="btnSubmit" value="Submit" id="">
        </div>
        <div>
            <!-- <input type="submit" name="btn" value="submit" id=""> -->
        </div>
    </form>
    <a href="logout.php">Log out</a>
</body>
</html>