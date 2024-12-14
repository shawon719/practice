
<?php
    if(isset($_POST['btn'])){
        // ফাইল ইনপুট অ্যারে
        $filename = $_FILES['myfile']['name']; // ফাইলের আসল নাম
        $tmp = $_FILES['myfile']['tmp_name']; // অস্থায়ী ফাইল পাথ
        $img = "image/"; // আপলোড ডিরেক্টরি

        // ফাইলের পাথ তৈরি করা
        $target_file = $img . basename($filename);

        // ফাইল না নির্বাচন করা হলে
        if(empty($filename)){
            echo "Please select a file.";
        } else {
            // ফাইলটি আপলোড করা
            if(move_uploaded_file($tmp, $target_file)){
                echo "<br>Upload successfully.";
            } else {
                echo "There was a problem uploading the file.";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File and Image Upload</title>
</head>
<body>
    <div class="formm">
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="myfile">
            <button type="submit" name="btn">Upload</button>
        </form>
    </div>

    <?php
        // ফাইল আপলোড হলে তার প্রিভিউ দেখানো
        if(isset($_POST['btn']) && !empty($filename)){
            echo "<br><img src='$img$filename' alt='Uploaded Image' width='500px'>";
        }
    ?>
</body>
</html>
