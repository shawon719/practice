<?php
    session_start();
    if(!isset($_SESSION['shname'])){
        header("location:login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        /* General page styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Container for the images */
        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        /* Styling for each image */
        .image-container img {
            margin: 10px;
            border: 2px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Styling for the buttons */
        button {
            background-color:rgb(112, 71, 10);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            text-align: center;
            font-size: 16px;
        }

        button:hover {
            background-color:rgb(199, 94, 160);
        }

        /* Link Styling for Logout */
        a {
            color: white;
            text-decoration: none;
        }

        /* Styling for header */
        h3 {
            color: #333;
        }
    </style>
</head>
<body>
    <h3>This is the Image Page</h3>

    <!-- Displaying images -->
    <div class="image-container">
        <?php
            $imgs = "images/";
            $images = glob($imgs . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

            if($images) {
                foreach($images as $image) {
                    echo '<img src="'.$image.'" width="300" height="300" alt="Uploaded Image">';
                }
            } else {
                echo "<p>No images available.</p>";
            }
        ?>
    </div>

    <!-- Logout button -->
    <button><a href="logout.php">Logout</a></button>
</body>
</html>