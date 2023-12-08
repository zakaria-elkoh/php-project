<?php 
    include '../../config/connection.php';

    echo $_SESSION['is_admin'];


    if (!($_SESSION['is_admin'] == 'true')) {
        header('Location: ../../index.php');
        exit(); 
    }


    $sql = "SELECT * FROM user";
    $query = mysqli_query($connection, $sql);
?>
