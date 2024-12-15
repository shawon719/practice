<?php
        session_start();
        if(isset($_SESSION['sname'])){
           header("location:login.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student demo page</title>
</head>
<body>
        <form action="" method="post">
            <h3>Student Registration Form</h3>
            <div class="sec">
                <label for="">Name:</label>
                <input type="text" name="nam" id="" placeholder="enter name">
            </div>
            <div class="sec">
                <label for="">ID:</label>
                <input type="number" name="num" id="" placeholder="enter id">
            </div>
            <div class="sec">
                <label for="">Email:</label>
                <input type="text" name="emm" id="" placeholder="enter email">
            </div>
            <div class="sec">
                <label for="">Age:</label>
                <input type="number" name="age" id="" placeholder="enter age">
            </div>
            <div class="sec">
                <label for="">Image:</label>
                <input type="file" name="myFile" id="" placeholder="enter age">
                <button name="filebtn">choose</button>
            </div>
        </form>
</body>
</html>