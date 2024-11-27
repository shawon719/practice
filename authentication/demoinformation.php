<?php
    session_start();
    if(!isset($_SESSION["sname"])){
        header("location:indexx.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
</head>
<body>
    <form action="#">
        <h1>this is second page</h1>
        <table>
            <tr>
                <th>Name:</th>
                <th>
                    <input type="text" name="txt" id="">
                </th>
            </tr>
            <tr>
                <th>Id:</th>
                <th>
                    <input type="number" name="num" id="">
                </th>
            </tr>
            <tr>
                <th>Batch:</th>
                <th>
                    <input type="number" name="numb" id="">
                </th>
            </tr>
        </table>
            <input type="submit" value="Submit" name="btn" id="">
            <a href="anotherpage.php"><input type="text" name="" id="" value="another page"></a>
    </form>
</body>
</html>