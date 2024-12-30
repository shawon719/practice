<?php
        include("config.php");
        echo "database connected.";
        if(isset($_POST["maSub"])){
            $mName=$_POST["maName"];
            $address=$_POST["adName"];
            $contact=$_POST["coName"];
            $db->query("call manuf('$mName','$address','$contact')");
            //echo "added.";
        }else{
            //echo "not added;";
        }

        if(isset($_POST["proSub"])){
            $pname=$_POST["ame"];
            $price=$_POST["pp"];
            $mid=$_POST["manufact"];
            $db->query("call prod('$pname','$price','$mid')");
           // echo "product added;";
        }else{
            //echo "not added.";
        }


        //trigger part

        if(isset($_POST["dltManu"])){
            $dlt=$_POST["delma"];
            $db->query("delete from manufacturer where id= $dlt "); 
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
                        <th>Manufacture Name</th>
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
                        <td colspan="3" style="text-align:center"><button name="maSub">Add into Manufacture</button>

                        <button>
                                <?php
                                    if(isset($_POST["maSub"])){
                                                echo "added.";
                                    }else{
                                        echo "not added.";
                                    }        
                                ?>
                        </button>
                    
                    </td>
                        
                    </tr>
                </tfoot>
                
            </table>
        </form>
    </section> 

    <section>
        <h1>this is product table.</h1>
            <form action="" method="post">
            <table border="1" style="border-collapse:collapse">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price<br></th>
                        <th>Manufacture Name<br></th> 
                        <th>Manufacture delete</th> 
                    </tr>
                   
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="ame"></td>
                        <td><input type="text" name="pp" id=""></td>
                        <td>
                            <select name="manufact" id="">
                                <?php
                                    $manuName=$db->query("select * from manufacturer");
                                     while(list($_mid,$_mNm)=$manuName->fetch_row()){
                                        echo "<option value='$_mid'>$_mNm</option>";
                                    }       
                                ?>
                            </select>
                        </td>

                        <td>
                            <select name="delma" id="">
                                <?php
                                    $manuName=$db->query("select * from manufacturer");
                                     while(list($_mid,$_mNm)=$manuName->fetch_row()){
                                        echo "<option value='$_mid'>$_mNm</option>";
                                    }       
                                ?>
                            </select>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr >
                        <td colspan="3" style="text-align:center"><button name="proSub">Add into product</button>
                                    <button>
                                        <?php
                    if(isset($_POST["proSub"])){
                                echo "added.";
                    }else{
                        echo "not added.";
                    }  
                ?>     
                                    </button>
                    </td>
                        <td  style="text-align:center"><button name="dltManu">delete Manufacture</button>
                               <button><?php
                                    if(isset($_POST["dltManu"])){
                                                echo "deleted.";
                                    }else{
                                        echo "not deleted.";
                                    }        
                            ?> </button>
                    </td>
                        
                    </tr>
                     
                </tfoot>
                <?php
                    // if(isset($_POST["proSub"])){
                    //             echo "added.";
                    // }else{
                    //     echo "not added.";
                    // }  
                ?>     
            </table>
        </form>

        <form action="" method="post">
            <!-- <h1>delete</h1> -->

            <table border="1" style="border-collapse:collapse">
                    <thead>
                        <!-- <tr>
                            <th>Manufacture delete</th>  
                        </tr> -->
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td>
                                <select name="delma" id="">
                                <?php
                                    // $manuName=$db->query("select * from manufacturer");
                                    //  while(list($_mid,$_mNm)=$manuName->fetch_row()){
                                    //     echo "<option value='$_mid'>$_mNm</option>";
                                    // }       
                                ?>
                            </select>
                            </td> -->
                        </tr>
                    </tbody>
                    <tfoot>
                        <!-- <tr>
                            <td colspan="3" style="text-align:center"><button name="dltManu">delete Manufacture</button></td>
                            
                        </tr> -->
                    </tfoot>
                    <?php
                        // if(isset($_POST["dltManu"])){
                        //             echo "deleted.";
                        // }else{
                        //     echo "not deleted.";
                        // }        
                    ?> 
                </table>

        </form>
    </section>

   
</body>
</html>