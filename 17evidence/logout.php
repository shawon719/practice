<?php
    session_start();
    unset($_SESSION["shname"]);
    session_destroy();
    echo "this is log out page.";
    echo "<br><a href='login.php'><button>log out</button></a>";
?>