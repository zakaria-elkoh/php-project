<?php

    // config
    require __DIR__ . '/../vendor/autoload.php';
    $dotenv=\Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();

    $servername = $_ENV['DB_SERVERNAME'];
    $username = $_ENV['DB_USERNAME'];
    $password = $_ENV['DB_PASSWORD'];
    $dbname = $_ENV['DB_NAME'];
    $connection = mysqli_connect($servername,$username,$password,$dbname);

    if(!$connection) {
        echo "there is an error";
    } 
 
?>