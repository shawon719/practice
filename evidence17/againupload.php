<?php
    if(isset($_POST["btnSubmit"])){
        $filename=$_FILES["filen"];
        $temp_file = $_FILES["filen"]["tmp_name"];
        var_dump($filename);
        echo "<br>";
        var_dump($temp_file);
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="filen">
        <button name="btnSubmit">submit</button>
    </form>
</body>
</html>