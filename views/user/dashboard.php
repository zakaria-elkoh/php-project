
<?php

    require '../../controller/user/dashboard.php';

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
                <div class="doughnut  p-3 rounded-4 d-flex flex-column gap-5">
                    <h1 class="title fs-5">Most Watched-genre</h1>
                    <div class="row d-flex flex-wrap">
                        <div class="col-md-3 pb-1">
                            <canvas id="myChart"></canvas>
                        </div>
                        <div class="col-md-3  pb-2">
                            <canvas id="myChart1"></canvas>
                        </div>
                        <div class="col-md-3 pb-1">
                            <canvas id="myChart2"></canvas>
                        </div>
                        <div class="col-md-3 pb-3">
                            <canvas id="myChart3"></canvas>
                        </div>
                    </div>
                </div>
                <div class="row p-3 d-flex gap-3 justify-content-between">
                    <div class="linech rounded-4 col-lg-6">
                        <canvas id="lineChart"></canvas>
                    </div>
                    <div class="linech rounded-4 col-lg-5">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
                <!-- <div class="swiper mySwiper p-2 rounded-4">
                    <h1 class="title p-2 fs-5">Your reviews</h1>
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide bg-">
                            <div id="feed" class="feedback bg-white d-flex flex-column rounded p-3 w-50 mx-auto">
                                <div class="d-flex gap-2">
                                    <img src="img-dash/user.png" alt="">
                                    <div>
                                        <span>user name<br></span>
                                        <i class=" fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div>
                                    <p>“I have no idea why Rob Reiner, or anyone else, wanted to make this story into a
                                        movie, and close examination of the film itself is no help.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-">
                            <div id="feed" class="feedback bg-white d-flex flex-column rounded p-3 w-50 mx-auto">
                                <div class="d-flex gap-2">
                                    <img src="img-dash/user.png" alt="">
                                    <div>
                                        <span>user name<br></span>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div>
                                    <p>“Honestly, the worst thing about Black Panther is that it had to be released in
                                        2018
                                        and not during the term of America’s first black president.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-">
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
                                    <p>“Christopher Nolan's complex, vivid portrait of J. Robert Oppenheimer, the
                                        “father
                                        of the atomic bomb,” is a brilliant achievement in formal and conceptual terms”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="swipers" class="swiper-button-next text-white"></div>
                    <div id="swipers" class="swiper-button-prev text-white "></div>
                    <div class="swiper-pagination "></div>
                </div> -->
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