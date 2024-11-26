<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>large number</title>
</head>
<body>
     <form action="<?php 
            $_SERVER['PHP_SELF']
    ?>" method="post">
            <input type="text" name="fnum" id="">
            <input type="text" name="snum" id="">
            <input type="text" name="tnum" id="">
            <input type="submit" name="btn"  value="submit" id="">
    </form>
    <?php

            if(($_POST['btn'])){
                $first_num=$_POST["fnum"];
                $second_num=$_POST["snum"];
                $third_num=$_POST["tnum"];
                $max=0;
                if($first_num>$second_num && $first_num>$third_num){
                    $max=$first_num;
                    echo "largest among $first_num,$second_num,$third_num is : $max";
                }
                else if($second_num>$first_num && $second_num>$third_num){
                     $max=$second_num;
                    echo "largest among $first_num,$second_num,$third_num is : $max";
                }
                else{
                    $max=$third_num;
                    echo "largest among $first_num,$second_num,$third_num is : $max";
                }
            }
?>

</body>
</html>
