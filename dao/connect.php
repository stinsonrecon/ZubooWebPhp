<?php
    $hn = "localhost";
    $db = "ZubooDB";
    $pw ="";
    $un = "root";
    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_errno){
        die($conn->connect_errno);
    }
?>
