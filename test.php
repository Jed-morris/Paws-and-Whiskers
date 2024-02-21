<?php

$sname = 'localhost'; //servername
$user = 'root'; //server username ninyo
$pass = ''; //password ng server ninyo
$db = 'test1'; //name ng database ninyo

$db = new mysqli ('localhost', $user, $pass, $db) or die ("unable to connect");
echo "Successfully Connected";

?>