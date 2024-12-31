<?php
        $connect=mysqli_connect("localhost","root","","apex");
        if(!$connect){
            echo "not connect.";
        }else{
            echo "connect.";
        }
?>