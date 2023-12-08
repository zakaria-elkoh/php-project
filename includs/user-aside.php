
<!-- side nav -->
<div class="sidebar col-auto col-md-3 min-vh-100 ">
    <div class="side-content d-flex flex-column align-items-center">
        <div class="profil d-flex flex-column align-items-center gap-3">
            <img src="img-dash/user.png" alt="">
            <span class="d-none d-md-inline"><?php echo $_SESSION['user_name']; ?></span>
        </div>
        <ul class="nav d-flex flex-column">
            <li><a href="dashboard.php" class="text-decoration-none px-4 py-2"><i
                        class=" fa-solid fa-border-all text-warning"></i>
                    <span class="d-none d-md-inline active text-warning">Dashboard</span></a></li>
            <li><a href="favorite.php" class="text-decoration-none text-white px-4 py-2"><i
                        class=" fa-regular fa-heart"></i> <span
                        class="d-none d-md-inline">Favorite</span></a>
            </li>
            <li><a href="to-watch.php" class="text-decoration-none text-white px-4 py-2"><i
                        class=" fa-regular fa-bookmark"></i>
                    <span class="d-none d-md-inline ">To-watch</span></a></li>
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
