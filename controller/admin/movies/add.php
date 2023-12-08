
<?php

    require '../../../config/connection.php';

    if(isset($_POST['submit'])) {

        $title = $_POST['title'];
        $trailer = $_POST['trailer'];
        $duration = $_POST['duration'];
        $description = $_POST['description'];
        $category = $_POST['category'];

        $sql = "INSERT INTO movie (title, trailer, duration, description, category_id) 
        VALUES ('$title', '$trailer', '$duration', '$description', '$category')";

        $result = mysqli_query($connection, $sql); // execute the query

        if ($result) {
            header("Location: ../movies.php");
        } else {
            echo "<script>alert('Movie Not Added')</script>";
        }

    }

?>