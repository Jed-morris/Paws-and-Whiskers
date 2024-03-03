<?php 
    require __DIR__."./../model/admin.php";
    $_SESSION = [];
    session_unset();
    session_destroy();
    header ("Location: login.php");
?>