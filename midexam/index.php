<?php
        require_once("students_class.php");
        if(isset($_POST["btnsubmit"])){
            $id=$_POST["textid"];
            $name=$_POST["textname"];
            $email=$_POST["textemail"];
            //echo $id;
            //echo $name;
           // echo $email;
       
                $studen=new Student($id,$name,$email);
                $studen->save();
                echo "success!";
        }

        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>midexam</title>
</head>
<body>
    <form action="#" method="post">
            ID:<input type="text" name="textid">
            <br><br>
            Name: <input type="text" name="textname">
            <br><br>
            Email:<input type="email" name="textemail">
            <br><br>
            <input type="submit" name="btnsubmit" value="Submit">

    </form>

    <?php
        Student::display_students();
    ?>
</body>
</html>