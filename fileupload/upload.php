<?php
    if(isset($_POST["btnSubmit"])){
        $filename=$_FILES["my_file"]["name"];
       $temp_file=$_FILES["my_file"]["tmp_name"];
        var_dump($filename);
       
       $img="image/";
       if(!empty($filename)){
            move_uploaded_file("$temp_file","$img.$filename");
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
    <title>image upload</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="my_file" id="">
        <input type="submit" name="btnSubmit" value="submit" id="">
    </form>
    <?php
        if(isset($_POST["btnSubmit"])){
                echo "<img src='$img.$filename' alt='bung' width='300px'>";
        }
        
    ?>
</body>
</html>