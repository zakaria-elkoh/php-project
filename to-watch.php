
<?php

  include './connection.php';
  session_start();

   if(isset($_POST['submit'])) {
      $title = $_POST['title'];
      $day = $_POST['day'];
      $user_id = $_SESSION['user_id'];

      $sql = "INSERT INTO `to_watch`(`title`, `day`, `user_id`)
      VALUES ('$title','$day','$user_id')";
            
      $query = mysqli_query($conn, $sql);

      if(isset($query)) {
          header("location: to-watch.php");
      } else {
          echo "<h1>an error</h1>"; 
      }
   }

   if(isset($_POST['edit'])) {
    $target_id = $_GET['id'];
    $title = $_POST['title'];
    $day = $_POST['day'];
    // $user_id = $_POST['user_id'];

    $sql = "  UPDATE `to_watch` 
            SET `title`='$title',`day`='$day' 
            WHERE id = $target_id;
        ";
            
      $query = mysqli_query($conn, $sql);

      if(isset($query)) {
          header("location: to-watch.php");
      } else {
          echo "<h1>an error</h1>"; 
      }
   }

   $user_id = $_SESSION['user_id'];
   $sql = "SELECT * FROM to_watch WHERE user_id = '$user_id'";
   $query = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover and curate your all-time favorites here. These are the films and
        shows
        that have left a mark on you">
    <title>dashboard</title>
    <link rel="stylesheet" href="./css/dashboard.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body class=" bg-black">
    <section class="container">
        <div class="row flex-nowrap">


            <!-- side nav -->
            <?php include './aside.php'; ?>
 
            <!-- content -->
            <div class="content d-flex flex-column align-items-center gap-5 m-1 col-md-9 col-9 min-vh-100 p-2 p-md-5">
                <div class="col-lg-11">
                    <h1 class="title fs-5">To-watch</h1>
                    <p class="text-white">Your To Watch List is where you keep upcoming must-sees. Explore the latest
                        and greatest in film and TV, ensuring you never miss out on what's next.</p>
                </div>
                <a href='./to-watch/add.php' class="btn btn-outline-light">Add To Watch</a>
                <!-- the table -->
                <table class="table table-striped table-hover">
                        <tr>
                            <td>Id</td>
                            <td>Title</td>
                            <td>Day</td>
                            <td>Operations</td>
                        </tr>
                        <?php 
                            while($rows = mysqli_fetch_assoc($query)) {
                                    echo "<tr>";
                                        echo "<td class='bg-dark text-white'>" . $rows['id'] . "</td>";
                                        echo "<td class='bg-dark text-white'>" . $rows['title'] . "</td>";
                                        echo "<td class='bg-dark text-white'>" . $rows['day'] . "</td>";
                                        // echo "<td class='bg-dark text-white'>" . $rows['user_id'] . "</td>";
                                        echo "<td class='bg-dark text-white' class='fs-4'>
                                                <a href='to-watch/edit.php?id=". $rows['id'] . "'><i class='fa-regular fa-pen-to-square text-white fs-5'></i></a>
                                                <a href='to-watch/delete.php?id=". $rows['id'] . "' class='ms-3'><i class='fa-solid fa-trash text-white fs-5'></i></a>
                                            </td>";                                    
                                        echo "</tr>";
                                }
                        ?>
                    </table>

            </div>
    </section>
</body>

</html>