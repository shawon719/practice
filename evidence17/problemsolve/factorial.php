<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="formstyle">
            <h1>Factorial of N:</h1>
        <input type="text" name="num" id="">
        <br>
        <br>
        <input type="submit" name="btn" id="sub">
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
                
                // echo "<div class='result'>";

                echo "
                    <table>
                        <tr>
                            <th>
                                Number
                            </th>
                            <th>
                                Output
                            </th>
                        </tr>
                        
                    <tr>
                       <th> $n! factorial is:</th>
                       <th>$fact </th>
                    </tr>
                        
                </table>
                ";
                //echo "</div>";
            }
    ?>
</body>
</html>