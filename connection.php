<?php

    // config
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "movie";

    // establishing a connection to Mysql server
    $conn = mysqli_connect($server, $user, $password , $db);

    if(!$conn) {
        echo "there is an error";
    } else {
        echo "connected!";
    }
 
?>