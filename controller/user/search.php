<?php

    require '../../config/connection.php';

    if(isset($_GET['search'])) {
        $search = $_GET['search'];
        $data = array();
        $sql = "SELECT * FROM movie WHERE title LIKE '%$search%'";
        $result = mysqli_query($connection, $sql);
        $num = mysqli_num_rows($result);
        
        if($num > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                array_push($data, $row);
            }
        }
    }
                
    echo json_encode($data);

?>