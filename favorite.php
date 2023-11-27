<?php

  include './connection.php';

  session_start();

  echo $_SESSION['user_id'];

   if(isset($_POST['submit'])) {
      $title = $_POST['title'];
      $duration = $_POST['duration'];
      $description = $_POST['description'];
      $user_id = $_SESSION['user_id'];

      $insertSql = "INSERT INTO `fave_movie`(`title`, `duration`, `description`, `user_id`)
      VALUES ('$title','$duration','$description','$user_id')";
            
      $query = mysqli_query($conn, $insertSql);

      if(isset($query)) {
          echo "<h1>Added </h1>";
          header("location: favorite.php");
      } else {
          echo "<h1>an error</h1>"; 
      }
   }

   if(isset($_POST['edit'])) {
      $target_id = $_GET['id'];
      $title = $_POST['title'];
      $duration = $_POST['duration'];
      $description = $_POST['description'];
      $user_id = $_POST['user_id'];

      $sql = "  UPDATE `fave_movie` 
                SET `title`='$title',`duration`='$duration',`description`='$description' 
                WHERE id = $target_id;
            ";
            
      $query = mysqli_query($conn, $sql);

      if(isset($query)) {
          header("location: favorite.php");
      } else {
          echo "<h1>an error</h1>"; 
      }
   }

   $user_id = $_SESSION['user_id'];
   $sql = "SELECT * FROM fave_movie WHERE user_id = $user_id";
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
        <title>Favorite</title>
        <link rel="stylesheet" href="./css/favorite.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    </head>

    <body class=" bg-black">
        <section class="container">
            <div class="row flex-nowrap">
                <!-- pop up -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog text-white">
                        <div class="modal-content">
                        <div class="modal-header bg-black">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Movie To Favorite:</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-black">
                            <!-- the form -->
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Title:</label>
                                    <input type="text" name="title" class="form-control bg-black text-white" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Duration:</label>
                                    <input type="text" name="duration" class="form-control bg-black text-white" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Description:</label>
                                    <textarea name="description" class="form-control bg-black text-white" id="message-text"></textarea>
                                </div>
                                <div class="modal-footer bg-black ">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        Add
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

                <!-- side nav -->
                <?php include './aside.php'; ?>
                
                <!-- content -->
                <div class="content d-flex flex-column align-items-center gap-5 m-1 col-md-9 col-9 min-vh-100 p-2 p-md-5">
                    <div class="col-lg-11">
                        <h1 class="title fs-5">Favorite</h1>
                        <p class="text-white">Discover and curate your all-time favorites here. These are the films and
                            shows
                            that have left a mark on you. Share your top picks with friends, and enjoy a personalized
                            collection
                            that reflects your unique cinematic taste.</p>
                    </div>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="img-dash/417.jpeg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="img-dash/open.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="img-dash/stranger.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="img-dash/raya.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="img-dash/418.jpeg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="img-dash/Greatest.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="img-dash/avatar.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="img-dash/kingdom.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="img-dash/419.jpeg" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <button type="button" class="btn btn-outline-light mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add to favorite</button>
                
                    <table class="table table-striped table-hover">
                        <tr>
                            <td>id</td>
                            <td>title</td>
                            <td>duration</td>
                            <td>description</td>
                            <td>operations</td> 
                        </tr>
                        <?php 
                            while($rows = mysqli_fetch_assoc($query)) {
                                    echo "<tr>";
                                        echo "<td class='bg-dark text-white'>" . $rows['id'] . "</td>";
                                        echo "<td class='bg-dark text-white'>" . $rows['title'] . "</td>";
                                        echo "<td class='bg-dark text-white'>" . $rows['duration'] . "</td>";
                                        echo "<td class='bg-dark text-white'>" . $rows['description'] . "</td>";
                                        echo "<td class='bg-dark text-white' class='fs-4'>
                                                <a href='favorite/edit.php?id=". $rows['id'] . "'><i class='fa-regular fa-pen-to-square text-white fs-5'></i></a>
                                                <a href='favorite/delete.php?id=". $rows['id'] . "' class='ms-3'><i class='fa-solid fa-trash text-white fs-5'></i></a>
                                            </td>";                                    
                                        echo "</tr>";
                                }
                        ?>
                    </table>
                    

                    <!-- <div id="carouselExample" class="carousel slide w-100">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-lg-11 col-12 d-flex align-items-center">
                                    <div class="col-4  d-flex flex-column gap-2">
                                        <div>
                                            <img class="image"  src="img-dash/sweet-home-netflix-official-poster-v6u2gphttdtpyt5p.jpg"
                                                width="270" height="400" alt="">
                                        </div>
                                        <div class="text-white d-flex justify-content-around">
                                            <span>Sweet home</span>
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex flex-column gap-2">
                                        <div>
                                            <img  src="img-dash/anne.jpg" width="270" height="400" alt="">
                                        </div>
                                        <div class="text-white d-flex justify-content-around">
                                            <span>Anne With An E</span>
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex flex-column gap-2">
                                        <div>
                                            <img class="image" src="img-dash/kingdom.jpg" width="270" height="400" alt="">
                                        </div>
                                        <div class="text-white d-flex justify-content-around">
                                            <span>Kingdom</span>
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="carousel-item">
                                <div class="col-lg-11 col-12 d-flex align-items-center">
                                    <div class="col-4 d-flex flex-column gap-2">
                                        <div>
                                            <img  src="img-dash/black.png" width="270" height="400" alt="">
                                        </div>
                                        <div class="text-white d-flex justify-content-around">
                                            <span>Black Panther</span>
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex flex-column gap-2">
                                        <div>
                                            <img src="img-dash/raya.jpg" width="270" height="400" alt="">
                                        </div>
                                        <div class="text-white d-flex justify-content-around">
                                            <span>Raya</span>
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex flex-column gap-2">
                                        <div>
                                            <img src="img-dash/squid.png" width="270" height="400" alt="">
                                        </div>
                                        <div class="text-white d-flex justify-content-around">
                                            <span>Squid game</span>
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-11 d-flex align-items-center">
                                    <div class="col-4 d-flex flex-column gap-2">
                                        <div>
                                            <img src="img-dash/chernobyl.jpg" width="270" height="400" alt="">
                                        </div>
                                        <div class="text-white d-flex justify-content-around">
                                            <span>Chernobyl</span>
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex flex-column gap-2">
                                        <div>
                                            <img src="img-dash/stranger.jpg" width="270" height="400" alt="">
                                        </div>
                                        <div class="text-white d-flex justify-content-around">
                                            <span>Stranger things</span>
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex flex-column gap-2">
                                        <div>
                                            <img src="img-dash/417.jpeg" width="270" height="400" alt="">
                                        </div>
                                        <div class="text-white d-flex justify-content-around">
                                            <span>Past Lives</span>
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon border" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon border" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div> -->
                </div>

            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="./js/favorite.js"></script>

    </body>

</html>