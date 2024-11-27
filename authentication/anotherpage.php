<?php 
    include_once("studentclass.php");
    session_start();
    if(!isset($_SESSION["sname"])){
        header("location:demoinformation.php");
    }

    if(isset($_POST["btn"])){
        $name=$_POST["txtname"];
        $id=$_POST["txtid"];
        $phone=$_POST["txtphone"];
       // header("location:logout.php");
        $obj=new Student($name,$id,$phone);
        $obj->info();
        
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student details another</title>
</head>
<body>
    <form action="#" method="post">
        <h1>this is third page</h1>
        <h1>student information</h1>
        Name:
        <input type="text" name="txtname" id=""><br><br>
        id:
        <input type="text" name="txtid" id=""><br><br>
        phone:
        <input type="text" name="txtphone" id=""><br><br>
        <input type="submit" name="btn" id="" value="submit">
    </form>
</body>
</html>

<?php
    Student::showInfo();
?>

<a href="logout.php">Logout</a>