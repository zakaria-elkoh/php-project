<?php 
    require '../../config/connection.php';
    session_start();

    $sql = "SELECT * FROM review";
    $query = mysqli_query($connection, $sql);
?>