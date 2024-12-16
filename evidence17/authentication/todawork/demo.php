<?php
    session_start();
    if(!isset($_SESSION["sname"])){
        header("location:login.php");
        exit();
    }

    // if (isset($_POST["filebtn"])) {
if(isset($_FILES["myFile"])){
        $filename = $_FILES["myFile"]["name"];
        $temp_file = $_FILES["myFile"]["tmp_name"];
        $size = $_FILES["myFile"]["size"];
        $type = strtolower(pathinfo($_FILES['myFile']['name'], PATHINFO_EXTENSION));

        $img = "image/";

        $kb = $size / 1024;

        // Check if the file size is more than 1000 KB
        if ($kb > 1000) {
            if (move_uploaded_file($temp_file, $img . $filename)) {
                echo "image uploaded successfully.";
                // Redirect to another page after successful upload
                header("location:imageshow.php");
                exit();
            } else {
                // Error message if the upload fails
                $errorMessage = "there is a problem to upload the file";
            }
            $errorMessage = "image file must less than 1000 kb";
        } 
        else if(glob($imgs . "*.{jpg,jpeg,png,gif}", GLOB_BRACE)){
            // Try to move the uploaded file
            if (move_uploaded_file($temp_file, $img . $filename)) {
                echo "image uploaded successfully.";
                // Redirect to another page after successful upload
                header("location:imageshow.php");
                exit();
            } 
            else {
                // Error message if the upload fails
                $errorMessage = "there is a problem to upload the file";
            }
        }
     else {
        // Handle error if the file is not uploaded or form was not submitted properly
        $errorMessage = "no file have not been choosen.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        /* General page styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container for the form */
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            box-sizing: border-box;
        }

        /* Form header styling */
        .form-container h3 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Styling the form input sections */
        .sec {
            margin-bottom: 20px;
        }

        .sec label {
            display: block;
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }

        .sec input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
            outline: none;
        }

        .sec input[type="file"] {
            padding: 5px;
        }

        /* Submit button styling */
        .sec button {
            width: 100%;
            padding: 12px;
            background-color:rgb(98, 118, 32);
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .sec button:hover {
            background-color:rgb(10, 11, 14);
        }

        /* Error message styling */
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Student Registration Form</h3>
            <div class="sec">
                <label for="nam">Name:</label>
                <input type="text" name="nam" id="nam" placeholder="Enter name">
            </div>
            <div class="sec">
                <label for="num">ID:</label>
                <input type="number" name="num" id="num" placeholder="Enter ID">
            </div>
            <div class="sec">
                <label for="emm">Email:</label>
                <input type="text" name="emm" id="emm" placeholder="Enter email">
            </div>
            <div class="sec">
                <label for="age">Age:</label>
                <input type="number" name="age" id="age" placeholder="Enter age">
            </div>
            <div class="sec">
                <label for="myFile">Image:</label>
                <input type="file" name="myFile" id="myFile">
            </div>
            <div class="sec">
                <button name="filebtn">Submit</button>
            </div>
            <!-- Display error messages if any -->
            <?php 
                if (isset($errorMessage)) {
                    echo "<p class='error-message'>$errorMessage</p>";
                }
            ?>
        </form>
       
    </div>
</body>
</html>
