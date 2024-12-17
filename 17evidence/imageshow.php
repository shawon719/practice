<?php
    // session_start();
    // if(!isset($_SESSION['shname'])){
    //     header("location:login.php");
    //     exit();
    // }
?>

<!--
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

    <!-- Displaying images 
    <div class="image-container">
        <?php
            // $imgs = "images/";
            // $images = glob($imgs . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

            // if($images) {
            //     foreach($images as $image) {
            //         echo '<img src="'.$image.'" width="300" height="300" alt="Uploaded Image">';
            //     }
            // } else {
            //     echo "<p>No images available.</p>";
            // }
        ?>
    </div>

    <!-- Logout button 
    <button><a href="logout.php">Logout</a></button>
</body>
</html>-->

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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        /* Styling for the header */
        h3 {
            font-size: 32px;
            font-weight: 600;
            color: white;
            margin-bottom: 30px;
        }

        /* Container for the images */
        .image-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 90%;
            margin-bottom: 40px;
        }

        /* Styling for each image */
        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover effect for images */
        .image-container img:hover {
            transform: scale(1.1);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        /* Styling for the Logout button */
        button {
            background-color: #ff6f61;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            text-align: center;
            text-transform: uppercase;
        }

        /* Hover effect for button */
        button:hover {
            background-color: #ff4c3b;
            transform: scale(1.05);
        }

        /* Link Styling for Logout */
        a {
            color: white;
            text-decoration: none;
        }

        /* Message when no images available */
        .no-images {
            color: #ddd;
            font-size: 18px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h3 {
                font-size: 28px;
            }

            .image-container {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                padding: 10px;
            }

            button {
                padding: 10px 25px;
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            h3 {
                font-size: 24px;
            }

            .image-container {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                padding: 5px;
            }

            button {
                padding: 10px 20px;
                font-size: 14px;
            }
        }

    </style>
</head>
<body>
    <h3>Image Gallery</h3>

    <!-- Displaying images -->
    <div class="image-container">
        <?php
            $imgs = "images/";
            $images = glob($imgs . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

            if($images) {
                foreach($images as $image) {
                    echo '<img src="'.$image.'" alt="Uploaded Image">';
                }
            } else {
                echo "<p class='no-images'>No images available.</p>";
            }
        ?>
    </div>

    <!-- Logout button -->
    <button><a href="logout.php">Logout</a></button>
</body>
</html>
