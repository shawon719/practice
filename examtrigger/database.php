<?php
        $connect=mysqli_connect("localhost","root","","");
        if(!$connect){
            echo "not connect.";
        }else{
            echo "connect.";
        }
?>