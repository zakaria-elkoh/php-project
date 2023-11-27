<?php 

    include '../connection.php';

    $target_id = $_GET['id'];

    $sql = "DELETE FROM `review` WHERE id = $target_id;";

    $query = mysqli_query($conn, $sql);

    header('location: ../review.php');

?>