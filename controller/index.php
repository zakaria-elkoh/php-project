
<?php

    $to_watch_arr = array();
    $favo_movies_arr = array();

    if(isset($_SESSION['user_id'])) {

        $user_id = $_SESSION['user_id'];

        // bring the favorite movies data
        $sql = "SELECT * FROM favorite WHERE user_id = $user_id";
        $result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            array_push($favo_movies_arr, $row['movie_id']);
        }

        // bring the to watch list data
        $to_watch_sql = "SELECT * FROM to_watch WHERE user_id = $user_id";
        $result = mysqli_query($connection, $to_watch_sql);
        while($row = mysqli_fetch_assoc($result)) {
            array_push($to_watch_arr, $row['movie_id']);
        }
    }

?>