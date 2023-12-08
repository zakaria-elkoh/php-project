<?php

    require '../../../config/connection.php';
    session_start();

    if(isset($_GET['movie_id'])) {
        $user_id = $_SESSION['user_id'];
        $movie_id = $_GET['movie_id'];


        $sql = "DELETE FROM `to_watch` 
                WHERE user_id = $user_id and movie_id = $movie_id";

        $result = mysqli_query($connection, $sql);

        if($result) {
            echo '<script>alert("deleted succassfully!");</script>';
            if(isset($_GET['from'])) {
                header('location: ../../../views/user/to-watch.php');
            } else {
                header('location: ../../../index.php');
            }
        } else {
            echo '<script>alert("there is an error!");</script>';
            echo "there is an error";
            header('location: ../../../index.php');
        }

    }

?>