<?php

    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM movie";
    // WHERE user_id = $user_id
    $query = mysqli_query($connection, $sql);

    $rows = mysqli_fetch_assoc($query);


?>
