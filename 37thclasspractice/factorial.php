<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <input type="number" name="number" id="number">
        <button type="submit">Submit</button>
    </form>

    <?php 
        if($_POST){
            $fact=1;
            $number= $_POST['number'];
            echo "Factorial of  $number! : ";
            for($i=1;$i<=$number;$i++){
                $fact=$fact * $i;
            }
            echo $fact."<br>";
        }
    ?>
</body>
</html>