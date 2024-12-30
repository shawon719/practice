<?php 
        $db=mysqli_connect('localhost','root','','bata');
        if($db){
            echo "connected.";
        }else{
            echo "not connected";
        }
?>