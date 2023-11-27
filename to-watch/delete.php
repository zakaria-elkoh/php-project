<?php 

    include '../connection.php';

    $target_id = $_GET['id'];

    $sql = "DELETE FROM `to_watch` WHERE id = $target_id;";

    $query = mysqli_query($conn, $sql);

    header('location: ../to-watch.php');

?>