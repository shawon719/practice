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
        

        $img="images/";
        $kb = $f_size / 1024;

        // Check if the file size is more than 1000 KB
        if ($kb > 1000) {
            if (move_uploaded_file($temp_file, $img . $filename)) {
                echo "Image uploaded successfully.";
                // Redirect to another page after successful upload
                header("location:imageshow.php");
                exit();
            } else {
                // Error message if the upload fails
                $errorMessage = "There is a problem uploading the file.";
            }
        } else {
            // If file size is less than 1000 KB, show error message
            $errorMessage = "Image file must be more than 1000 KB.";
        }
        
        // Check if the file is of a valid image type (JPG, JPEG, PNG, GIF)
        $valid_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
        if (in_array(strtolower($file_extension), $valid_extensions)) {
            // Try to move the uploaded file
            if (move_uploaded_file($temp_file, $img . $filename)) {
                echo "Image uploaded successfully.";
                // Redirect to another page after successful upload
                header("location:imageshow.php");
                exit();
            } else {
                // Error message if the upload fails
                $errorMessage = "There is a problem uploading the file.";
            }
        } else {
            // Handle error if file type is not valid
            $errorMessage = "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
        
        // Check if no file is selected
        if (empty($filename)) {
            $errorMessage = "No file has been chosen.";
        }
        
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Page</title>
    <style>
        /* General reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        /* Container for the form */
        section {
            background: #fff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        /* Heading styling */
        h3 {
            font-size: 24px;
            margin-bottom: 30px;
            color: #2575fc;
        }

        /* Form input styling */
        input[type="text"], input[type="number"], input[type="file"] {
            width: 100%;
            padding: 12px;
            margin: 15px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        /* Focus effects for inputs */
        input[type="text"]:focus, input[type="number"]:focus, input[type="file"]:focus {
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
        }

        /* Button styling */
        button {
            background-color: #2575fc;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        /* Hover effect for the button */
        button:hover {
            background-color: #6a11cb;
        }

        /* Error message styling */
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        /* Responsive design */
        @media (max-width: 600px) {
            section {
                width: 100%;
                padding: 20px;
            }

            h3 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- <h3>Demo Page</h3> -->
    <section>
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                Name:<input type="text" placeholder="Enter your name">
            </div><br>
            <div>
                ID:<input type="number" placeholder="Enter your ID">
            </div><br>
            <div>
                Image:<input type="file" name="imgFile">
            </div><br>
            <div>
                <button name="btn">Submit</button>
            </div>
        </form>
    </section>
    
</body>
</html>
