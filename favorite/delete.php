<?php 

    include '../connection.php';

    $target_id = $_GET['id'];

    $sql = "DELETE FROM `fave_movie` WHERE id = $target_id;";

    $query = mysqli_query($conn, $sql);

    header('location: ../favorite.php');

?>