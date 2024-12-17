<?php
    session_start();
    if(!isset($_SESSION["shname"])){
        header("location:login.php");
    }// session code end

    //file upload start
    if(isset($_POST["btn"])){
        $filename=$_FILES["imgFile"]["name"];
        $temp_file=$_FILES["imgFile"]["tmp_name"];
        $f_size=$_FILES["imgFile"]["size"];
        //$f_type=strtolower(pathinfo($_FILES["imgFile"]["name"],PATHINFO_EXTENSION));
        //var_dump($filename);
        $kb=$f_size/1024;

        $img="images/";
         // Check if no file is selected
    if (empty($filename)) {
        $errorMessage = "No file has been chosen.";
    }
    // Check if the file size is more than 1000 KB (1MB)
    else if ($kb > 1000) {
        if (move_uploaded_file($temp_file, $img . $filename)) {
            echo "Image uploaded successfully.";
            // Redirect to another page after successful upload
            header("location:imageshow.php");
            exit();
        } else {
            // Error message if the upload fails
            $errorMessage = "There is a problem uploading the file.";
        }
    } 
     // Check if the file type is valid (jpg, jpeg, png, gif)
     else if (in_array($type, ['jpg', 'jpeg', 'png', 'gif'])) {
        if (move_uploaded_file($temp_file, $img . $filename)) {
            echo "Image uploaded successfully.";
            // Redirect to another page after successful upload
            header("location:imageshow.php");
            exit();
        } else {
            // Error message if the upload fails
            $errorMessage = "There is a problem uploading the file.";
        }
    } 
    // If file type is not valid
    else {
        $errorMessage = "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
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