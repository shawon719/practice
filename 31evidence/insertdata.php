<?php
        include("config.php");
        echo "database connected.";
        if(isset($_POST["maSub"])){
            $mName=$_POST["maName"];
            $address=$_POST["adName"];
            $contact=$_POST["coName"];
            $db->query("call manuf('$mName','$address','$contact')");
            echo "added.";
        }else{
            echo "not added;";
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>this is manufacturer table.</h1>
        <form action="" method="post">
            <table border="1" style="border-collapse:collapse">
                <thead>
                    <tr>
                        <th>Manufacture Name

                        </th>
                        <th>Address<br></th>
                        <th>Contact Number<br></th>
                    </tr>
                   
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="maName"></td>
                        <td><input type="text" name="adName"></td>
                        <td><input type="text" name="coName"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" style="text-align:center"><button name="maSub">Add into Manufacture</button></td>
                        
                    </tr>
                </tfoot>
                 
            </table>
        </form>
    </section> 

   
</body>
</html>