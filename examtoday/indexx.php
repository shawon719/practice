<?php
include_once("class_student.php");

if(isset($_POST["btn"])){
    $name=$_POST["textName"];
    $id=$_POST["textid"];
    $batch=$_POST["textbatch"];

    $stuObj= new Student($name,$id,$batch);
    $stuObj->store();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
        <form action="#" method="post">
            <div>
                Name: <br>
                <input type="text" name="textName" id="">
            </div>
            <div>
                ID: <br>
                <input type="number" name="textid" id="">
            </div>
            <div>
                Batch: <br>
                <input type="number" name="textbatch" id="">
            </div>
            <div>
                <input type="submit" name="btn" id="" value="Submit">
            </div>
        </form>

        <?php
            Student::showData();
        ?>
</body>
</html>