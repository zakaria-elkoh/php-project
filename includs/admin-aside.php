
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

</head>
<body>
    <!-- side nav -->
    <div class="sidebar col-auto col-md-3 min-vh-100 ">
        <div class="side-content d-flex flex-column align-items-center">
            <div class="profil d-flex flex-column align-items-center gap-3">
                <img src="img-dash/user.png" alt="">
                <span class="d-none d-md-inline"><?php echo $_SESSION['user_name']; ?></span>
            </div>
            <ul class="nav d-flex flex-column">
                <li>
                    <a href="index.php" class="text-decoration-none px-4 py-2">
                        <i class="fa-solid fa-house text-warning"></i>
                        <span class="d-none d-md-inline text-warning">Home</span>
                    </a>
                </li>
                <li>
                    <a href="users.php" class="text-decoration-none px-4 py-2">
                        <i class=" fa-solid fa-border-all text-white"></i>
                        <span class="d-none d-md-inline">Users</span>
                    </a>
                </li>
                <li><a href="movies.php" class="text-decoration-none text-white px-4 py-2"><i
                            class=" fa-regular fa-heart"></i> <span
                            class="d-none d-md-inline">Movies</span></a>
                </li>
                <li><a href="review.php" class="text-decoration-none text-white px-4 py-2"><i
                            class=" fa-regular fa-compass"></i> <span
                            class="d-none d-md-inline">Reviews</span></a></li>
                <li><a href="#" class="text-decoration-none text-white px-4 py-2"><i
                            class=" fa-regular fa-user"></i> <span class="d-none d-md-inline">Account</span></a>
                </li>
                <li><a href="../../controller/auth/log-out.php" class="text-decoration-none text-white px-4 py-2"><i
                            class=" fa-solid fa-arrow-right-from-bracket"></i> <span
                            class="d-none d-md-inline">Log
                            out</span></a></li>
            </ul>
        </div>
    </div>


    <script src="../public/js/aside.js"></script>

</body>
</html>