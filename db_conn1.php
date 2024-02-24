<?php
$sName = "127.0.0.1:3306";
$uName = "u507360145_root_mymp3";
$pass = "mymp3_rootPass";
$db_name = "u507360145_mymp3_db";
try {
   $conn = new PDO("mysql:host=$sName; dbname=$db_name", $uName, $pass);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    catch (PDOException $e) {
     echo "Connection Failed:". $e->getMessage();
     }