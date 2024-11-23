<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime number</title>
</head>
<body>
    <h1>prime number</h1>

    <div class="prime">
        <form action="#" method="post">
                <input type="number" name="number" id="number">
                <input type="submit" value="Submit" name="submit" id="submit">
        </form>
    </div>
    <?php
        $number=$_POST['number'];
        $count=0;
        if($number==0 || $number==1){
            echo "not prime.but composite.";
        }
        else{
            for($i=2;$i < $number;$i++){
                if($number% $i ==0){
                    $count++;
                    break;
                    echo "$number is not prime.";
                } 
            }
            if($count >0){
                echo "$number is not prime.";
            }
            else{
                echo "$number is prime.";
            }
        }
    ?>

        <div class="p">
            <form action="#" method="post">
                    <input type="number" name="number" id="number">
                    <input type="submit" name="submit" id="submit" value="Submit">
            </form>
        </div>

        <?php
                $number=$_POST['number'];
                $count=0;
                if($number==0 || $number==1){
                    echo "composite number.";
                }
                else{
                    for($i=2;$i< $number;$i++){
                        if($number%$i==0){
                            $count++;
                            break;
                            echo "not prime $number.";
                        }
                    }
                    if($count==0){
                        echo "prime $number.";
                    }
                    else{
                        echo "not prime $number.";
                    }
                }
        ?>
</body>
</html>