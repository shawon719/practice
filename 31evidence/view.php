<?php
        include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<body>
        <section>
            <h1>product details table</h1>
            <table border="1">
                <thead>
                    <tr>
                        <td>Serial</td>
                        <td>Product Name</td>
                        <td>price</td>
                        <td>Manufacture Name</td>
                        <td>Office Address</td>
                        <td>Contact No.</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $product=$db->query("select * from product_list");
                            while(list($_id,$_name,$_price,$_maname,$_oaddress,$_cont)=$product->fetch_row()){
                                echo "<tr>
                                            <td>$_id</td>
                                            <td>$_name</td>
                                            <td>$_price</td>
                                            <td>$_maname</td>
                                            <td>$_oaddress</td>
                                            <td>$_cont</td>
                                </tr>";
                            }
                    ?>
                </tbody>
            </table>
        </section>


         <section>
            <h1> new product details table</h1>
            <table border="1">
                <thead>
                    <tr>
                        <td>Serial</td>
                        <td>Product Name</td>
                        <td>price</td>
                        <td>Manufacture Name</td>
                        <td>Office Address</td>
                        <td>Contact No.</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $product=$db->query("select * from product_display");
                            while(list($_id,$_name,$_price,$_maname,$_oaddress,$_cont)=$product->fetch_row()){
                                echo "<tr>
                                            <td>$_id</td>
                                            <td>$_name</td>
                                            <td>$_price</td>
                                            <td>$_maname</td>
                                            <td>$_oaddress</td>
                                            <td>$_cont</td>
                                </tr>";
                            }
                    ?>
                </tbody>
            </table>
        </section>
</body>
</html>