<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

        <input type="number" name="number" id="number">
        <button> submit</button>
    </form>
    <?php 
            if($_POST){
                $fact=1;
                $number=$_POST['number'];
                echo "factorial is  '$number!' :  ";
                for($i=1;$i<=$number;$i++){
                    if($i==0){
                        return 1;
                    }
    
                    $fact=$fact*$i;

                }
                echo "<br>";
                echo $fact;
            }
    ?>
</body>
</html>