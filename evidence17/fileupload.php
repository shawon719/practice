<?php
    if(isset($_POST['btn'])){
        $filename=$_FILES['myFile'];
        $temp_file=$_FILES['myFile']['tmp_name'];
        //var_dump($filename);

        $img="image/";
         if(!empty($filename)){
            // move_uploaded_file ফাংশনটি ফাইলটি সঠিকভাবে নির্ধারিত ডিরেক্টরিতে মুভ করে
            if(move_uploaded_file($temp_file, $img . $filename)){
                echo "file uploaded";
            } else {
                echo "there is a problem uploading the file";
            }
        }
        else{
            echo "please select a file";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
     <section>
        <form action="" method="post" enctype="multipart/form-data">
                <h3>file upload</h3>
                <input type="file" name="myFile">
                <button name="btn">choose file</button>
        </form>
     </section>
     <?php
           // ফাইল আপলোড সফল হলে ইমেজ দেখানোর জন্য
        if(isset($_POST["btnSubmit"]) && !empty($filename)){
            // ইমেজটি সঠিকভাবে প্রদর্শন করার জন্য সঠিক পাথ ব্যবহার
            echo "<img src='$img$filename' alt='uploaded image' width='300px'>";
        }
     ?>
</body>
</html>