<?php
if(isset($_POST['btnSubmit'])){
    // $filcheck=$_FILES['my_file'];
    $filename=$_FILES['my_file']['name'];
    $tmp_file=$_FILES['my_file']['tmp_name'];
    $file_size=$_FILES['my_file']['size'];
    // $file_type= $_FILES['my_file']['type'];
    $img='my_image/';
    $kb = $file_size/1024;

   
    
    $fileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    // check image type 
    if (!in_array($fileType, ["jpg", "png", "jpeg"])) {
        $msg2 = "Also Sorry, only jpg, png, jpeg, or gif formats are allowed!";
    }
    // check image size 
    elseif($kb<100){
        // upload file 
        move_uploaded_file($tmp_file,$img.$filename);
        echo "Successfully Uploaded!";
    }else{
        $msg ="Image is too large. Your image must be a maximum of 100 KB.";
    }

    
    // var_dump( $filcheck);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
    <style>
        /* General body and layout styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Main form container */
        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        /* Heading style */
        .form-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Styling file input */
        input[type="file"] {
            display: block;
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            background-color: #f0f0f5;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Styling for submit button */
        input[type="Submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="Submit"]:hover {
            background-color: #0056b3;
        }

        /* Uploaded image container */
        .uploaded-image {
            margin-top: 20px;
            text-align: center;
        }

        .uploaded-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            max-height: 300px;
        }

        /* Error message style */
        .error {
            color: red;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Upload Your Image</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="my_file">Choose an image:</label>
            <input type="file" name="my_file" id="my_file" accept="image/*">
            <input type="Submit" name="btnSubmit" value="Submit">
        </form>

        <!-- Section to display uploaded image -->
        <div class="uploaded-image">
            <!-- If image is uploaded, it will be displayed here -->
        <?php 
             echo "<img src='" . $img.$filename . "' alt='Uploaded Image'>";
        ?>
        </div>

        <!-- Error message for invalid upload -->
        <div class="error">
        <?php 
        echo isset($msg) ? $msg : '';
        ?>
          <?php 
        echo isset($msg2) ? $msg2 : '';
        ?>

            <!-- Error message would be displayed here if there is any issue -->
        </div>
    </div>

</body>
</html>
