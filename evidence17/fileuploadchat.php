<?php
    if(isset($_POST["btnSubmit"])){
        // ফাইলের নাম এবং টেম্পোরারি ফাইল পাথ নেয়া হচ্ছে
        $filename = $_FILES["my_file"]["name"];
        $temp_file = $_FILES["my_file"]["tmp_name"];
        
        // ডিরেক্টরি যেখানে ফাইলটি আপলোড হবে
        $img = "image/";

        // যদি ফাইল নির্বাচন করা থাকে, তবে ফাইলটি মুভ করা হবে
        if(!empty($filename)){
            // move_uploaded_file ফাংশনটি ফাইলটি সঠিকভাবে নির্ধারিত ডিরেক্টরিতে মুভ করে
            if(move_uploaded_file($temp_file, $img . $filename)){
                echo "ফাইল আপলোড হয়েছে।";
            } else {
                echo "ফাইল আপলোড করতে সমস্যা হয়েছে।";
            }
        }
        else{
            echo "অনুগ্রহ করে একটি ফাইল নির্বাচন করুন।";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ইমেজ আপলোড</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="my_file" id="">
        <input type="submit" name="btnSubmit" value="সাবমিট" id="">
    </form>
    
    <?php
        // ফাইল আপলোড সফল হলে ইমেজ দেখানোর জন্য
        // if(isset($_POST["btnSubmit"]) && !empty($filename)){
        //     // ইমেজটি সঠিকভাবে প্রদর্শন করার জন্য সঠিক পাথ ব্যবহার
        //     echo "<img src='$img$filename' alt='uploaded image' width='300px'>";
        // }
    ?>
</body>
</html>
