
<?php

    require '../../config/connection.php';

    require '../../controller/admin/movies.php';
    require '../../controller/fetch-movies/index.php';
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
    
    <link rel="stylesheet" href="../../css/dashboard.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <style>
        .favorite-icon {
            cursor: pointer;
            color: gray;
        }
        .favorite:checked + label .favorite-icon {
            color: red;
        }
    </style>

</head>

<body class=" bg-black">

    <section class="container">

        <div class="row flex-nowrap">
            <!-- side nav -->
            <?php include '../../includs/admin-aside.php'; ?>

            <!-- content -->
            <div class="content m-1 p-md-4 col-md-9 col-9 min-vh-100">
                <div class="doughnut  p-3 rounded-4 d-flex flex-column gap-5">
                    <div class="col-lg-11">
                    <h1 class="title fs-4">Movies</h1>
                    <p class="text-white">
                        Your To Watch List is where you keep upcoming must-sees. Explore the latest
                        and greatest in film and TV, ensuring you never miss out on what's next.
                    </p>
                </div>
                <div class='mx-auto'>
                    <a href='movies/add.php' class="btn btn-outline-light">Add A Movie</a>
                </div>
                <div class="container row g-4 mx-auto">
                    <?php while ($rows = mysqli_fetch_assoc($query)) : ?>
                        <div class="card col-md-6 col-lg-4">
                            <img class="card-img-top" src="../../<?php echo $rows['image']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $rows['title']; ?></h5>
                                <p class="card-text text-black"><?php echo $rows['description']; ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../js/charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js"
        integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>