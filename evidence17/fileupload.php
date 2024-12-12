<?php
        if(isset($_POST['btn'])){
            $filename=$_FILES['myfile'];
            $tmp=$_FILES['myfile']['tmp_name'];
            var_dump($tmp);
            //var_dump($filename);

            // $img="image/";
            // if(!(empty($filename))){
            //     if(move_uploaded_file($tmp,$img . $filename)){
            //         echo "<br>upload successfully.";
            //     }else{
            //         echo "there is a problem uploading the file.";
            //     }
                
            // }
            // else{
            //     echo "file not found.please select a file.";
            // }
            
            $img="image/";
       if(!empty($filename)){
            move_uploaded_file("$tmp","$img.$filename");
        }
        else{
            echo "please select a file.";
        }
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file and image upload</title>
</head>
<body>
    <div class="formm">
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="myfile">
            <!-- <input type="submit" name="btn" val> -->
             <button name="btn">upload</button>
        </form>
    </div>
    <?php
            if(isset($_POST['btn'])){
                echo "<img src='$img.$filename' alt='screenshot' width='500px'>";
            }
    ?>
</body>
</html>