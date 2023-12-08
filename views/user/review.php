
<?php

    require '../../controller/user/review.php';

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body class=" bg-black">

    <section class="container">

        <div class="row flex-nowrap">
            <!-- side nav -->
            <?php include '../../includs/user-aside.php'; ?>

            <!-- content -->
            <div class="content m-1 p-md-4 col-md-9 col-9 min-vh-100">

                <div id="carouselExampleFade" class="carousel slide">
                    <div class="carousel-inner">

                        <?php while($rows = mysqli_fetch_assoc($query)) : ?>
                            "<div class='carousel-item'>"
                                "<div id='feed' class='feedback bg-white d-flex flex-column rounded p-3 w-50 mx-auto'>"
                                    "<div class='d-flex gap-2'>"
                                        "<img src='img-dash/user.png' alt=''>"
                                        "<div>"
                                            "<span> <?php $rows['user_name'] ?><br></span>"
                                            "<i class='fa-solid fa-star'></i>"
                                            "<i class='fa-solid fa-star'></i>"
                                            "<i class='fa-solid fa-star'></i>"
                                            "<i class='fa-solid fa-star'></i>"
                                            "<i class='fa-solid fa-star'></i>"
                                        "</div>"
                                        "</div>"
                                    "<div>"
                                        "<p class='fs-4 fw-5 mt-3'><?php $rows['movie_name'] ?></p>"
                                    "</div>"
                                    "<div>"
                                        "<p><?php $rows['description'] ?></p>"
                                    "</div>"
                                "</div>"
                            "</div>"
                        <?php endwhile ?>

                        <div class="carousel-item active">
                            <div id="feed" class="feedback bg-white d-flex flex-column rounded p-3 w-50 mx-auto">
                                <div class="d-flex gap-2">
                                    <img src="img-dash/user.png" alt="">
                                    <div>
                                        <span>user name<br></span>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div>
                                    <p class='fs-4 fw-5 mt-3'>Old dad's</p>
                                </div>
                                <div>
                                    <p>“Christopher Nolan's complex, vivid portrait of J. Robert Oppenheimer, the
                                        “father
                                        of the atomic bomb,” is a brilliant achievement in formal and conceptual terms”
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class='text-center'>
                    <a href="./review/edit.php" class="btn btn-outline-light mt-5">Add A Review</a>
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
</body>

</html>