<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="<?php  $_SERVER['PHP_SELF'] ?>" method="post" class="formstyle">
        <h1>Prime Number</h1>
        <input type="number" name="txtnum" id=""><br><br>
        <input type="submit" name="btnSub" id="">
    </form>

    <?php
        if($_POST["btnSub"]){
            $n=$_POST["txtnum"];
            $flag=0;
            if($n==0 || $n==1){
                echo "<div class='result'>";
                echo "$n is composite Number";
                echo "</div>";
                
            }else{
                for($i=2;$i<$n;$i++){
                    if($n%$i==0){
                        $flag++;
                        //echo "$n is not prime.";
                        break;
                    }
                }  
                if($flag==0){
                
                echo "<div class='result'>$n is  prime.</div>";
            }else{
                echo "<div class='result'>$n is not prime.</div>";
            }
            //echo "</div>";
            }
            
        }
    ?>
</body>
</html>