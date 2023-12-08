
<?php
    session_start();
    // if(!isset($_SESSION['id'])){
    //     header('Location: ../../index.php');
    // }
    require '../../config/connection.php';
    require '../../controller/user/favorite.php';


    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM `favorite` 
            INNER JOIN movie ON favorite.movie_id = movie.id
            WHERE favorite.user_id = $user_id";
    $result = mysqli_query($connection, $sql);

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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="../../public/css/dashboard.css">
    <link rel="stylesheet" href="../../public/css/home.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    
</head>

<body class=" bg-black">

    <section class="">

        <div class="container mx-auto row flex-nowrap">
            <!-- side nav -->
            <?php include '../../includs/user-aside.php'; ?>

            <!-- content -->
            <div class="content d-flex flex-column align-items-center gap-5 m-1 col-md-9 col-9 min-vh-100 p-2 p-md-5">
                <div class="col-lg-11">
                    <h1 class="title fs-5">Favorite</h1>
                    <p class="text-white">Discover and curate your all-time favorites here. These are the films and
                        shows
                        that have left a mark on you. Share your top picks with friends, and enjoy a personalized
                        collection
                        that reflects your unique cinematic taste.
                    </p>
                </div>
                
                <div class="container row mx-auto">
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <div class="card col-4">
                            <img class="card-img-top" src="../../<?php echo $row['image']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                <p class="card-text text-black"><?php echo $row['description']; ?></p>
                                <input class='favorite-input' checked id='favorite-<?php echo $row['id']; ?>' type='checkbox' data-movie-id='<?php echo $row['movie_id']; ?>'>
                                <label for="favorite-<?php echo $row['id']; ?>"><i class="fa-solid fa-heart fs-3 favorite-icon"></i></label>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../public/js/charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js"
        integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../../public/js/main.js"></script>
    <script>
        const faveBoxes = document.querySelectorAll(".favorite-input");
        faveBoxes.forEach(element => {
            element.addEventListener("click", (e) => {
                let movie_id = e.target.getAttribute("data-movie-id");
                window.location = `../../controller/user/favorite/delete.php?movie_id=${movie_id}&from='dash'`;
            });
        });
    </script>

</body>

</html>