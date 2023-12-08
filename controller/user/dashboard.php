<?php 

    include '../../config/connection.php';
    session_start();

    $sql = "SELECT * FROM user";
    $query = mysqli_query($connection, $sql);

?>

