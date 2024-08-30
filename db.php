<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "facebook";

    $conn = new mysqli($serverName, $userName, $password, $dbName);

    if ($conn -> connect_error){
        die("Failed Connection:" .$conn -> connect_error);
    }

?>