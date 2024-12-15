<?php
    if(isset($_POST['btn'])){
        $file=$_FILES['myFile'];
        $tmp=$_FILES['myFile']['tmp_name'];
        var_dump($file);

        $img="image/";
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
</body>
</html>