<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturers & Products</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f8fb;
            color: #5f4b8b;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #ff8da1;
            font-size: 2rem;
            margin: 20px 0;
        }

        section {
            margin: 30px;
            padding: 20px;
            border-radius: 12px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #ff9eb5;
            color: #fff;
            font-weight: bold;
            font-size: 1.1rem;
        }

        td {
            background-color: #ffe0e9;
            border-radius: 8px;
        }

        input[type="text"], select {
            padding: 8px;
            border: 2px solid #ffb3d9;
            border-radius: 10px;
            width: 90%;
            margin: 5px 0;
            font-size: 1rem;
        }

        button {
            background-color: #ffb3d9;
            color: #5f4b8b;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff8da1;
        }

        button:focus {
            outline: none;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            font-size: 1rem;
            color: #5f4b8b;
        }

        select {
            padding: 8px;
            border: 2px solid #ffb3d9;
            border-radius: 8px;
            width: 90%;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .form-container .form-section {
            width: 48%;
        }

        .status-message {
            font-size: 1.2rem;
            color: #ff8da1;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

<section>
    <h1>Manufacturer Table</h1>
    <form action="" method="post">
        <table>
            <thead>
                <tr>
                    <th>Manufacturer Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="maName" required></td>
                    <td><input type="text" name="adName" required></td>
                    <td><input type="text" name="coName" required></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" style="text-align:center">
                        <button name="maSub">Add Manufacturer</button>
                        <div class="status-message">
                            <?php if (isset($_POST["maSub"])) echo "Manufacturer Added."; else echo "Not added."; ?>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</section>

<section>
    <h1>Product Table</h1>
    <form action="" method="post">
        <div class="form-container">
            <div class="form-section">
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Manufacturer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="ame" required></td>
                            <td><input type="text" name="pp" required></td>
                            <td>
                                <select name="manufact" required>
                                    <?php
                                        $manuName = $db->query("SELECT * FROM manufacturer");
                                        while (list($_mid, $_mNm) = $manuName->fetch_row()) {
                                            echo "<option value='$_mid'>$_mNm</option>";
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" style="text-align:center">
                                <button name="proSub">Add Product</button>
                                <div class="status-message">
                                    <?php if (isset($_POST["proSub"])) echo "Product Added."; else echo "Not added."; ?>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="form-section">
                <table>
                    <thead>
                        <tr>
                            <th>Delete Manufacturer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select name="delma" required>
                                    <?php
                                        $manuName = $db->query("SELECT * FROM manufacturer");
                                        while (list($_mid, $_mNm) = $manuName->fetch_row()) {
                                            echo "<option value='$_mid'>$_mNm</option>";
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td style="text-align:center">
                                <button name="dltManu">Delete Manufacturer</button>
                                <div class="status-message">
                                    <?php if (isset($_POST["dltManu"])) echo "Manufacturer Deleted."; else echo "Not deleted."; ?>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </form>
</section>

</body>
</html>
