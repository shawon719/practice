<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="num" id="">
        <input type="submit" name="btn" id="">
    </form>

    <?php
            if($_POST["btn"]){
                $n=$_POST["num"];
                $fact=1;
               

                    for($i=1;$i<=$n;$i++){
                         if($n==0){
                            return 1;
                    }
                    $fact=$fact*$i;
                }
                
                echo "$n! factorial is:$fact";
            }
    ?>
</body>
</html>