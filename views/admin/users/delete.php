<?php

    require '../../../config/connection.php';

    if (isset($_GET['id'])) {
        $target_id = $_GET['id'];
        $sql = "DELETE FROM `user` WHERE `id` = '$target_id'";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            echo "<script>alert('Delete Successfully');</script>";
            echo "<script>window.location.href='../users.php'</script>";
        } else {
            echo "<script>alert('Delete Failed');</script>";
            echo "<script>window.location.href='../users.php'</script>";
        }
    }

?>