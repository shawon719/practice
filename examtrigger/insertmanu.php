<?php
    include("database.php");

    // Add Manufacturer
    if (isset($_POST["addManu"])) {
        $mname = $_POST["maNAME"];
        $address = $_POST["adNAME"];
        $contact = $_POST["coNAME"];
        $connect->query("CALL addm('$mname', '$address', '$contact')");
    }

    // Add Product
    if (isset($_POST["add"])) {
        $pname = $_POST["pn"];
        $price = $_POST["pp"];
       
        $manuadd = $_POST["manufact"];
        $connect->query("CALL addp('$pname', '$price','$manuadd')");
    }

    // Trigger Delete
    if (isset($_POST["dlt"])) {
        $dltm = $_POST["manufact"];
        $connect->query("DELETE FROM manufacturer WHERE id= $dltm");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidence</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff8f8;
            color: #555;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            color: #ff69b4;
            font-size: 2.8em;
            text-align: center;
            margin-top: 30px;
            font-family: 'Lobster', sans-serif;
        }

        /* Section Styles */
        section {
            margin: 40px auto;
            max-width: 1100px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background: linear-gradient(135deg, #fceabb, #f8b500);
            transition: all 0.3s ease;
        }

        section:hover {
            transform: translateY(-10px);
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 1.1em;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-radius: 10px;
        }

        th {
            background-color: #ff6f61;
            color: white;
            font-weight: bold;
        }

        td {
            background-color: #fff4f1;
            color: #333;
            border: 1px solid #f1f1f1;
        }

        /* Input and Select Styles */
        input[type="text"], select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ff6f61;
            border-radius: 10px;
            font-size: 1.1em;
            background-color: #fceabb;
            color: #555;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus, select:focus {
            border-color: #f8b500;
            outline: none;
        }

        /* Button Styles */
        button {
            background-color: #ff6f61;
            color: #fff;
            padding: 14px 28px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.2em;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #ff3d2f;
            transform: translateY(-5px);
        }

        /* Message Styles */
        .message, .delete-message {
            font-size: 1.2em;
            text-align: center;
            margin-top: 15px;
        }

        .message {
            color: #66bb6a;
        }

        .delete-message {
            color: #ff1744;
        }

        /* Form Container Styles */
        .form-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-container select {
            width: 70%;
        }

        /* Footer */
        footer {
            text-align: center;
            font-size: 1.1em;
            color: #ff6f61;
            margin-top: 40px;
            font-family: 'Lobster', sans-serif;
        }

        footer p {
            margin-bottom: 20px;
        }

    </style>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

    <section>
        <h1>Manufacturer Table</h1>
        <form action="" method="post">
            <table>
                <thead>
                    <tr>
                        <td>Manufacturer Name</td>
                        <td>Address</td>
                        <td>Contact</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="maNAME" placeholder="Enter Manufacturer Name" required></td>
                        <td><input type="text" name="adNAME" placeholder="Enter Address" required></td>
                        <td><input type="text" name="coNAME" placeholder="Enter Contact" required></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" style="text-align:center">
                            <button name="addManu">Add Manufacturer</button>
                            <?php if (isset($_POST["addManu"])) { echo "<div class='message'>Data added successfully!</div>"; } ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </section>

    <section>
        <h1>Product Table</h1>
        <form action="" method="post">
            <table>
                <thead>
                    <tr>
                        <td>Product Name</td>
                        <td>Price</td>
                        <td>Manufacturer Name</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="pn" placeholder="Enter Product Name" required></td>
                        <td><input type="text" name="pp" placeholder="Enter Price" required></td>
                        <td>
                            <select name="manufact" required>
                                <?php
                                    $product = $connect->query("SELECT * FROM manufacturer");
                                    while(list($_mid, $_mname) = $product->fetch_row()) {
                                        echo "<option value='$_mid'>$_mname</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" style="text-align:center">
                            <button name="add">Add Product</button>
                            <?php if (isset($_POST["add"])) { echo "<div class='message'>Data added successfully!</div>"; } ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </section>

    <section>
        <h1>Delete Manufacturer</h1>
        <form action="" method="post">
            <div class="form-container">
                <select name="manufact" required>
                    <?php
                        $product = $connect->query("SELECT * FROM manufacturer");
                        while(list($_mid, $_mname) = $product->fetch_row()) {
                            echo "<option value='$_mid'>$_mname</option>";
                        }
                    ?>
                </select>
                <button name="dlt">Delete</button>
            </div>
            <?php if (isset($_POST['dlt'])) { echo "<div class='delete-message'>Manufacturer deleted.</div>"; } ?>
        </form>
    </section>

    <section>
        <h1>Product Show Table</h1>
        <table>
            <thead>
                <tr>
                    <td>Serial</td>
                    <td>Product Name</td>
                    <td>Price</td>
                    <td>Manufacturer Name</td>
                    <td>Office Address</td>
                    <td>Contact No.</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $product = $connect->query("SELECT * FROM product_show");
                    while(list($_id, $_pname, $_price, $_manuname, $_address, $_contact) = $product->fetch_row()) {
                        echo "<tr>
                            <td>$_id</td>
                            <td>$_pname</td>
                            <td>$_price</td>
                            <td>$_manuname</td>
                            <td>$_address</td>
                            <td>$_contact</td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </
