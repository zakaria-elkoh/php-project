<?php

    require '../../../config/connection.php';
    session_start();



    if(isset($_GET['movie_id'])) {
        $user_id = $_SESSION['user_id'];
        $movie_id = $_GET['movie_id'];

        $sql = "INSERT INTO `favorite`(`user_id`, `movie_id`) 
        VALUES ('$user_id', '$movie_id')";

        $result = mysqli_query($connection, $sql);

        if($result) {
            echo '<script>alert("added to favorite!");</script>';
            header('location: ../../../index.php');
        } else {
            echo '<script>alert("there is an error!");</script>';
            header('location: ../../../index.php');
        }
    }
?>