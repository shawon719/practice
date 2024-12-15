<?php
    // if(isset($_POST["btnSubmit"])){
    //     $filename=$_FILES["filen"];
    //     $temp_file = $_FILES["filen"]["tmp_name"];
    //     var_dump($filename);
    //     echo "<br>";
    //     var_dump($temp_file);

    //     $img="image/";
    //         if(!empty($filename)){
    //             if(move_uploaded_file("$temp_file","$img . $filename")){
    //                 echo "successfully uploaded.";
    //             }else{
    //                 echo "not uploaded.";
    //             }
    //         }
    //         else{
    //             echo "choose the file .";
    //         } 
    // }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>again file upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="filen">
        <button name="btnSubmit">submit</button>
    </form>
    <?php
            // if(isset($_POST['btnSubmit'])){
            //     echo "<img src='$img$filename' atl='image'>";
            // }
    ?>
</body>
</html> -->

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
                echo "file uploaded.";
            } else {
                echo "there is a problem to upload";
            }
        }
        else{
            echo "choose the file.";
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
        <input type="submit" name="btnSubmit" value="submit" id="">
    </form>
    
    <?php
       // ফাইল আপলোড সফল হলে ইমেজ দেখানোর জন্য
        if(isset($_POST["btnSubmit"]) && !empty($filename)){
            // ইমেজটি সঠিকভাবে প্রদর্শন করার জন্য সঠিক পাথ ব্যবহার
            echo "<img src='$img$filename' alt='uploaded image' width='300px'>";
        }
    ?>
</body>
</html>
