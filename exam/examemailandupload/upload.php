<?php
    if (isset($_POST["btnSubmit"])) {
        $filename = $_FILES["my_file"]["name"];
        $temp_file = $_FILES["my_file"]["tmp_name"];
        $size=$_FILES["my_file"]["size"];
        $type=$_FILES["my_file"]["type"];
        $img = "image/";
        //   var_dump($filename);
        // The directory where the file will be saved
        

        $kb=$size/1024;

        if($kb<500 && $type=="jpg"){
            
            echo "successful";
        }else{
            move_uploaded_file($temp_file, $img . $filename);
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
    <title>Image Upload</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="my_file" id="">
        <input type="submit" name="btnSubmit" value="Submit" id="">
    </form>

    <?php
        // After the form is submitted, display the uploaded image
        if (isset($_POST["btnSubmit"])) { // && !empty($filename)
            //echo "<img src='" . $img . basename($filename) . "' alt='Uploaded Image' width='300px'>";
            echo "<img src='$img$filename' alt='Uploaded Image' width='500px'>";
        }
    ?>
</body>
</html>
