

<?php

    require '../../../controller/admin/movies/add.php';

?>




<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Discover and curate your all-time favorites here. These are the films and
            shows
            that have left a mark on you">
        <title>Movie Mingle</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    </head>

    <body class=" bg-black">
        <section>
    
            <div class="container text-white pt-5">
                <!-- the form -->
                <form class='w-50 mx-auto' method="POST" action="">
                    <div class="mb-3">
                        <label class="col-form-label">Title:</label>
                        <input type="text" name="title" class="form-control bg-black text-white" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Trailer:</label>
                        <input type="text" name="trailer" class="form-control bg-black text-white" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Duration:</label>
                        <input type="text" name="duration" class="form-control bg-black text-white" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Description:</label>
                        <textarea name="description" class="form-control bg-black text-white" id="message-text"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Category:</label>
                        <select name="category" id="">
                            <option value="1">Action</option>
                            <option value="2">Romance</option>
                            <option value="3">Horror</option>
                            <option value="4">Comedy</option>
                        </select>
                    </div>
                    <div class="modal-footer bg-black mt-5">
                        <a href="../movies.php" class='btn btn-secondary'>Close</a>
                        <button type="submit" name="submit" class="btn btn-primary px-3 ms-3">
                            Add
                        </button>
                    </div>
                </form>
            </div>

        </section>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- <script src="../../../public/js/main.js"></script> -->

    </body>

</html>