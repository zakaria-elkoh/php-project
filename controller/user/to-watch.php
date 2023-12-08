<?php

    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM movie";
    $query = mysqli_query($connection, $sql);

    $rows = mysqli_fetch_assoc($query);


?>
