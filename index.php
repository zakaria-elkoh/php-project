<?php 

    session_start();
    require 'config/connection.php';
    require 'controller/fetch-movies/index.php';
    require 'controller/index.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieMingle</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/home.css">
</head>

<body>


    <?php require './includs/nav.php'; ?>

    <section class="movies py-5">
        <div class="container mx-auto">

            <?php while ($rows = mysqli_fetch_assoc($query)) : ?>
                <div class="card">
                    <img class="card-img-top" src="<?php echo $rows['image']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['title']; ?></h5>
                        <p class="card-text text-black"><?php echo $rows['description']; ?></p>
                        <div class='d-flex px-5 py-3'>
                            <input class='favorite-input' <?php if(in_array($rows['id'], $favo_movies_arr)) { echo 'checked'; } ?> id='favorite-<?php echo $rows['id']; ?>' type='checkbox' data-movie-id='<?php echo $rows['id']; ?>'>
                            <label for="favorite-<?php echo $rows['id']; ?>"><i class="fa-<?php echo in_array($rows['id'], $favo_movies_arr)? 'solid' : 'regular'; ?> fa-heart fs-3 favorite-icon"></i></label>
                            <input class='to-watch-input flex-grow-1' <?php if(in_array($rows['id'], $to_watch_arr)) { echo 'checked'; } ?> id='to-watch-<?php echo $rows['id']; ?>' type='checkbox' data-movie-id='<?php echo $rows['id']; ?>'>
                            <label for="to-watch-<?php echo $rows['id']; ?>"><i class="fa-<?php echo in_array($rows['id'], $to_watch_arr)? 'solid' : 'regular'; ?> fa-bookmark fs-3 to-watch-icon"></i></label>
                        </div>
                        <a href="./views/user/review.php?movie_id=<?php echo $rows['id']; ?>" class='mt-3'>show reviews</a>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">
            <a href="#" class="d-inline-block rounded fw-bold py-2 px-5 fs-7 bg-main text-black">Sign in for more
                access</a>
        </div>
    </section>

    <footer class="py-5">
        <div class="container">
            <div class="social-media text-white fs-1 d-flex justify-content-center gap-4 mb-5">
                <i class="fa-brands fa-tiktok"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
            <div class="mt-5 row">
                <div class="col-sm-12 col-lg-3 d-flex d-lg-block flex-column align-items-center">
                    <div>
                        <img src="./public/assets/logo.png" alt="logo" style="min-width: 100px;">
                    </div>
                    <p class="opacity-75 fs-7">Terms of use | Privacy</p>
                    <p class="opacity-75 fs-7">Copyright by 2019 MovieMingle, Inc</p>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 text-center text-lg-start">
                    <ul class="text-white p-0">
                        <li class="fw-bold mb-3">About Us</li>
                        <li><a href="#">Support Center</a></li>
                        <li><a href="#">Customer Support</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Copyright</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 text-center text-lg-start">
                    <ul class="text-white p-0">
                        <li class="fw-bold mb-3">Our Information</li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Site Map</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mt-3 d-none d-lg-block">
                    <ul class="text-white">
                        <li class="fw-bold mb-3">The Privacy</li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Site Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- bootstrap -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    
    <script>
        const faveBoxes = document.querySelectorAll(".favorite-input");
        const toWatchBoxes = document.querySelectorAll(".to-watch-input");
        
        toWatchBoxes.forEach(element => {
            element.addEventListener("click", (e) => {
                let movie_id = e.target.getAttribute("data-movie-id");
                if (e.target.checked) {
                    window.location = `./controller/user/to-watch/add.php?movie_id=${movie_id}`;
                } else {
                    window.location = `./controller/user/to-watch/delete.php?movie_id=${movie_id}`;
                }
            });
        });

        faveBoxes.forEach(element => {
            element.addEventListener("click", (e) => {
                let movie_id = e.target.getAttribute("data-movie-id");
                if (e.target.checked) {
                    window.location = `./controller/user/favorite/add.php?movie_id=${movie_id}`;
                } else {
                    window.location = `./controller/user/favorite/delete.php?movie_id=${movie_id}`;
                }
            });
        });

        const searchInput = document.querySelector(".search-wrapper input");
        searchInput.addEventListener("keyup", (e) => {
            console.log(searchInput.value);
            const moviesWrapper = document.querySelector('.movies .container');
            const url = `http://localhost/movie_mingle/controller/user/search.php?search=${searchInput.value}`;

            fetch(url)
            .then(response => response.json())
            .then (movies => {
                    moviesWrapper.innerHTML = '';
                    for(movie of movies) {
                        moviesWrapper.innerHTML += `
                                                        <div class="card">
                                                            <img class="card-img-top" src="${movie.image}" alt="Card image cap">
                                                            <div class="card-body">
                                                                <h5 class="card-title">${movie.title}</h5>
                                                                <p class="card-text text-black">${movie.description}</p>
                                                                
                                                                <a href="./views/user/review.php?movie_id=${movie.id}" class='mt-3'>show reviews</a>
                                                            </div>
                                                        </div>
                                                    `
                    }
            })
            .catch(error => {
                console.log(error);
            })
        });

    </script>

    

</body>

</html>