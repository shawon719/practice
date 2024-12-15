<?php
    if(isset($_POST["btnSubmit"])){
        $filename=$_FILES['fileName'];
        //$filename=$_FILES["fileName"]['name'];
        $temp_file = $_FILES["fileName"]["tmp_name"];
        var_dump($filename);
        echo "<br>";
        var_dump($temp_file);

        $img="image/";
            if(!empty($filename)){
                if(move_uploaded_file("$temp_file","$img . $filename")){
                    echo "successfully uploaded.";
                }else{
                    echo "not uploaded.";
                }
            }
            else{
                echo "choose the file .";
            } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>again file upload</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="fileName">
        <button name="btnSubmit">submit</button>
    </form>
    <?php
            if(isset($_POST['btnSubmit']) && (!empty($filename))){
                echo "<img src='$img$filename' atl='image' width='400px'>";
            }
    ?>
</body>
</html>


