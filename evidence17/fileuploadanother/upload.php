
<?php
        if(isset($_POST['btn'])){
            $filename=$_FILES['myfile'];
            var_dump($filename);
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>File Upload</h1>
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="myfile" id="">
            <button name="btn">Upload</button>
        </form>
    </section>
</body>
</html>
