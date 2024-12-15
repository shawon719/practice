<?php
session_start();
unset($_SESSION['rnam']);
session_destroy();
header("location:login.php");
?>