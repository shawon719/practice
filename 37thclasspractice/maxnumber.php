<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maximum number</title>
</head>
<body>
    <div class="m">
        <form action="#" method="post">
            <input type="num1" name="num1" id="num1">
            <input type="num2" name="num2" id="num2">
            <input type="num3" name="num3" id="num3">
            <input type="submit" name="submit" id="submit" value="Submit">
        </form>
    </div>

    <?php
            $num1=$_GET['num1'];
            $num2=$_GET['num2'];
            $num3=$_GET['num3'];
            $max=0;
            if($num1>$num2 && $num1>$num3){
                $max=$num1;
                echo "$num1,$num2,$num3 is largest '$max'. ";
            }
            else if($num2>$num1 && $num2>$num3){
                $max=$num2;
                echo "$num1,$num2,$num3 is largest '$max'.";
            }
            else{
                $max=$num3;
                echo "$num1,$num2,$num3 is largest '$max'.";

            }

    ?>
</body>
</html>