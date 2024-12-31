<?php
    include("database.php");
    if(isset($_POST["addManu"])){
        $mname=$_POST["maNAME"];
        $address=$_POST["adNAME"];
        $contact=$_POST["coNAME"];
         $connect->query("call addm('$mname','$address','$contact')");

         if(isset($_POST["add"])){
            $pname=$_POST["pn"];
            $price=$_POST["pp"];
            $manuadd=$_POST["manufactureadd"];
            $connect->query("call addp('$pname','$price','$manuadd')");
         }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert manufacture</title>
    <!-- <style>
        /* Apply a soft pastel color background to the body */
body {
    background-color: #f8f0f6;
    font-family: 'Arial', sans-serif;
    color: #333;
    margin: 0;
    padding: 0;
}

/* Style the title */
h1 {
    text-align: center;
    color: #ff6b6b;
    font-size: 2em;
    margin-top: 30px;
}

/* Style the table container */
table {
    width: 60%;
    margin: 30px auto;
    border-collapse: collapse;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    background-color: #ffffff;
}

/* Style the table header */
thead {
    background-color: #ff9ff3;
}

thead td {
    padding: 15px;
    font-weight: bold;
    color: #fff;
    text-align: center;
}

/* Style the table rows and inputs */
tbody td {
    padding: 10px;
    text-align: center;
}

input[type="text"] {
    padding: 10px;
    width: 80%;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 1em;
    box-sizing: border-box;
}

input[type="text"]:focus {
    outline: none;
    border-color: #ff6b6b;
}

/* Style the button */
button {
    padding: 12px 20px;
    background-color: #ff6b6b;
    color: white;
    font-size: 1.2em;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Hover effect on button */
button:hover {
    background-color: #ff4d4d;
}

/* Style for the footer (message area) */
tfoot td {
    text-align: center;
    padding: 10px;
    font-size: 1em;
    background-color: #f8f0f6;
}

/* Message styling */
tfoot td button {
    margin-top: 10px;
}

/* Ensure good spacing and a rounded look for the table */
table, th, td {
    border-radius: 10px;
}

/* Add a subtle shadow to the form */
form {
    max-width: 800px;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

    </style> -->
</head>
<body>
        <h1>this is manufacture table</h1>
        <form action="" method="post">
                <table border="1" style="border-collapse:collapse">
                    <thead>
                        <tr>
                            <td>Manufacturer Name</td>
                            <td>Address</td>
                            <td>Contact</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="maNAME" id=""></td>
                            <td><input type="text" name="adNAME" id=""></td>
                            <td><input type="text" name="coNAME" id=""></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" style="text-align:center">
                                <button name="addManu">add</button>
                                    <?php
                                        if(isset($_POST["addManu"])){
                                            echo "data added";
                                        }else{
                                            echo "data not added.";
                                        }
                                    ?>
                                
                            </td>
                        </tr>
                    </tfoot>
                </table>

        </form>

        <section>
            <h1>this is product</h1>
            <form action="" method="post">
                <table border="1" style="border-collapse:collapse">
                    <thead>
                        <tr>
                            <td>Product Name</td>
                            <td>Price</td>
                            <td>Manufacture Name</td>
                            <td>Manufacture delete</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="pn" id=""></td>
                            <td><input type="text" name="pp" id=""></td>
                            <td>
                                <select name="manufactureadd" id="">
                                    <?php
                                        $product=$connect->query("select * from manufacturer");
                                        while(list($_mid,$_mname)=$product->fetch_row()){
                                            echo "<option value='$_mid'>$_mname</option>";
                                        }
                                    ?>
                                </select>
                            </td>
                            <td>
                                <select name="manufacturedlt" id="">
                                    <?php
                                        $product=$connect->query("select * from manufacturer");
                                        while(list($_mid,$_mname)=$product->fetch_row()){
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
                                <button name="add">Add product</button>
                                        <?php
                                        if(isset($_POST["add"])){
                                            echo "data added";
                                        }else{
                                            echo "data not added.";
                                        }
                                    ?>
                            </td>
                            <td>
                                <button name="dlt">Delete</button>
                                <?php
                                        if(isset($_POST['dlt'])){
                                            echo " data delete.";
                                        }else{
                                            echo "data not delete.";
                                        }
                                ?>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </section>

        <section>
            <table>
                <thead>
                    <tr>
                        <td>Serial</td>
                        <td>Product Name</td>
                        <td>Manufacture Name</td>
                        <td>Office Address</td>
                        <td>Contact No.</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $product=$connect->query("select * from tablename");
                        while(list($_id,$_pname,$_price,$_manuname,$_address,$_contact)=$product->fetch_row()){
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
        </section>

        <section>
            <table>
                <thead>
                    <tr>
                        <td>Serial</td>
                        <td>Product Name</td>
                        <td>Manufacture Name</td>
                        <td>Office Address</td>
                        <td>Contact No.</td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $product=$connect->query("select * from ");
                        while(list($_id,$_pname,$_price,$_manuname,$_address,$_contact)=$product->fetch_row()){
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
        </section>
</body>
</html>