php<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover and curate your all-time favorites here. These are the films and
        shows
        that have left a mark on you">
    <title>dashboard</title>
    <link rel="stylesheet" href="./css/history.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body class=" bg-black">
    <header>
        <img src="img-dash/logo.png" alt="">

        <div class="d-flex align-items-center gap-2">
            <i class="text-white fa-solid fa-bars"></i>
            <span class="text-white">Menu</span>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" placeholder="Search" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-sm">
        </div>
        <span class="text-white">watchList</span>
    </header>
    <section class="container">
        <div class="row flex-nowrap">
            <!-- side nav -->
            <div class="sidebar col-auto col-md-3 min-vh-100 ">
                <div class="side-content d-flex flex-column align-items-center  ">
                    <div class="profil d-flex flex-column align-items-center gap-3">
                        <img src="img-dash/user.png" alt="">
                        <span class="d-none d-md-inline">user name</span>
                    </div>
                    <ul class="nav d-flex flex-column">
                        <li><a href="dashboard.php" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-solid fa-border-all"></i>
                                <span class="d-none d-md-inline">Dashboard</span></a></li>
                        <li><a href="favorite.php" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-regular fa-heart"></i> <span
                                    class="d-none d-md-inline">Favorite</span></a>
                        </li>
                        <li><a href="to-watch.php" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-regular fa-bookmark"></i>
                                <span class="d-none d-md-inline ">To-watch</span></a></li>
                        <li><a href="watch-history.php" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-regular fa-compass"></i> <span
                                    class="d-none d-md-inline">Watch-history</span></a></li>
                        <li><a href="#" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-regular fa-user"></i> <span class="d-none d-md-inline">Account</span></a>
                        </li>
                        <li><a href="#" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-solid fa-arrow-right-from-bracket"></i> <span
                                    class="d-none d-md-inline">Log
                                    out</span></a></li>
                    </ul>
                </div>
            </div>

            <!-- content -->
            <div class="content d-flex flex-column align-items-center gap-5 m-1 col-md-9 col-9 min-vh-100 p-2 p-md-5">
                <div class="col-lg-11">
                    <h1 class="title fs-5">Watch-history</h1>
                    <p class="text-white">Your Watch History is a personal record of your cinematic journey. It captures
                        the films and shows that have made an impact on you, creating a timeline of your movie
                        experiences. Revisit your history, relive those moments, and explore your unique cinematic
                        adventure in one place.</p>
                </div>

                <div id="carouselExample" class="carousel slide w-100">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-lg-11 d-flex align-items-center gap-3">
                                <div class="col-4 d-flex flex-column gap-2">
                                    <div>
                                        <img src="img-dash/417.jpeg" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Past Lives</span>
                                        <div>
                                            <i class="fa-solid fa-heart"></i>
                                            <i class="fa-solid fa-bookmark"></i>
                                            <i class="text-warning fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column gap-2">
                                    <div>
                                        <img src="img-dash/419.jpeg" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>No one will save you</span>
                                        <div>
                                            <i class="fa-solid fa-heart"></i>
                                            <i class="fa-solid fa-bookmark"></i>
                                            <i class="text-warning fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column gap-2">
                                    <div>
                                        <img src="img-dash/418.jpeg" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Old Dads</span>
                                        <div>
                                            <i class="fa-solid fa-heart"></i>
                                            <i class="fa-solid fa-bookmark"></i>
                                            <i class="text-warning fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-lg-11 d-flex align-items-center gap-3">
                                <div class="col-4 d-flex flex-column gap-2">
                                    <div>
                                        <img src="img-dash/black.png" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Black pinter</span>
                                        <div>
                                            <i class="fa-solid fa-heart"></i>
                                            <i class="fa-solid fa-bookmark"></i>
                                            <i class="text-warning fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column gap-2">
                                    <div>
                                        <img src="img-dash/avatar.png" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Avatar 2</span>
                                        <div>
                                            <i class="fa-solid fa-heart"></i>
                                            <i class="fa-solid fa-bookmark"></i>
                                            <i class="text-warning fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column gap-2">
                                    <div>
                                        <img src="img-dash/Greatest.png" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Greatest Show man</span>
                                        <div>
                                            <i class="fa-solid fa-heart"></i>
                                            <i class="fa-solid fa-bookmark"></i>
                                            <i class="text-warning fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-lg-11 d-flex align-items-center gap-3">
                                <div class="col-4 d-flex flex-column gap-2">
                                    <div>
                                        <img src="img-dash/it.jpg" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>it</span>
                                        <div>
                                            <i class="fa-solid fa-heart"></i>
                                            <i class="fa-solid fa-bookmark"></i>
                                            <i class="text-warning fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column gap-2">
                                    <div>
                                        <img src="img-dash/291819-1944x2952-mobile-hd-black-panther-movie-background-photo.jpg"
                                            width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Black pinter</span>
                                        <div>
                                            <i class="fa-solid fa-heart"></i>
                                            <i class="fa-solid fa-bookmark"></i>
                                            <i class="text-warning fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column gap-2">
                                    <div>
                                        <img src="img-dash/stranger.jpg" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Stranger things</span>
                                        <div>
                                            <i class="fa-solid fa-heart"></i>
                                            <i class="fa-solid fa-bookmark"></i>
                                            <i class="text-warning fa-solid fa-star"></i>
                                        </div>
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
                </div>

                <div class="pt-5 col-12 d-flex flex-wrap justify-content-center gap-5">
                    <div class="container1 d-flex flex-column">
                        <div class=card>
                            <div class=image>
                                <img href="#" src="img-dash/squid1.png">
                            </div>
                            <div class=content>
                                <p>a group of desperate and poor people from all backgrounds and ages are invited to
                                    participate in a game with a top prize of 45.6 billion Won (around USD 35 million).
                                    However, when the games begin the players realize that those who are eliminated are
                                    actually killed.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-5">
                            <i class="text-white fa-solid fa-heart"></i>
                            <i class="text-white fa-solid fa-bookmark"></i>
                            <i class="text-warning fa-solid fa-star"></i>
                        </div>
                    </div>
                    <div class="container1 d-flex flex-column">
                        <div class=card>
                            <div class=image>
                                <img href="#" src="img-dash/knight.png">
                            </div>
                            <div class=content>
                                <p>The plot follows the vigilante Batman, police lieutenant James Gordon, and district
                                    attorney Harvey Dent, who form an alliance to dismantle organized crime in Gotham
                                    City.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-5">
                            <i class="text-white fa-solid fa-heart"></i>
                            <i class="text-white fa-solid fa-bookmark"></i>
                            <i class="text-warning fa-solid fa-star"></i>
                        </div>
                    </div>
                    <div class="container1 d-flex flex-column">
                        <div class=card>
                            <div class=image>
                                <img href="#" src="img-dash/brave.png">
                            </div>
                            <div class=content>
                                <p>Merida is a Princess by birth and an adventurer by spirit. She spends her days
                                    practicing archery, riding her horse Angus, and exploring the world around her. She
                                    loves her family, but she wants to control her own destiny.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-5">
                            <i class="text-white fa-solid fa-heart"></i>
                            <i class="text-white fa-solid fa-bookmark"></i>
                            <i class="text-warning fa-solid fa-star"></i>
                        </div>
                    </div>
                    <div class="container1 d-flex flex-column">
                        <div class=card>
                            <div class=image>
                                <img href="#" src="img-dash/Oppenheimer-film 1.png">
                            </div>
                            <div class=content>
                                <p>As you might expect, the movie tells the story of J.Robert Oppenheimer (played by
                                    Cillian Murphy),the visionary physicist who led the Manhattan Project to create the
                                    atomic bomb that would be used against Japan in the final days of World War II.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-5">
                            <i class="text-white fa-solid fa-heart"></i>
                            <i class="text-white fa-solid fa-bookmark"></i>
                            <i class="text-warning fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>


            </div>
    </section>
</body>

</html>