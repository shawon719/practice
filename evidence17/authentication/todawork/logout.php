<?php
    session_start();
    unset($_SESSION["sname"]);
    session_destroy();
    //header("location:login.php");
    echo "<h1>this is log out page.</h1>";
    echo "<a href='login.php'><button>log out</button></a>";

?>