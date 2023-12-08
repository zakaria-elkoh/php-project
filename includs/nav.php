<?php 
    $nav_link = '<a href="views/auth/log-in.php" class="fw-bold text-white d-none d-md-block">logIn</a>
                <a href="views/auth/sign-up.php" class="fw-bold text-white d-none d-md-block">signIn</a>';
    if(isset($_SESSION['is_admin'])) {
        $link = 'user';
        $link2 = 'user/dashboard.php';
        $_SESSION['is_admin'] == 'true' ? $link = 'admin' : '' ;
        $_SESSION['is_admin'] == 'true' ? $link2 = 'admin/' : 'user/dashboard.php' ;
        $nav_link = "<a href='views/$link/to-watch.php' class='fw-semibold text-white d-none d-md-block'> Watchlist</a>
                     <a href='views/$link2' class='fw-bold text-white d-none d-md-block'>dashboard</a>";
    } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
        <div class="container d-flex justify-content-between gap-md-3 gap-lg-5 align-items-center position-relative">
            <div class="d-flex w-sm-100 align-items-center justify-content-between gap-3">
                <div class="logo"><img class="img-fluid" src="./public/assets/logo.png" alt="logo"></div>
                <div class="menu"><i class="fa-solid fa-bars burger-menu fs-3 text-white"></i></div>
            </div>


            <div class="sub-menu d-flex w-25   justify-content-center">
                <ul class="">
                    <li><a class="text-capitalize" href="#">contact</a></li>
                    <li><a class="text-capitalize" href="#">dashbord</a></li>
                    <li><a class="text-capitalize" href="#">about</a></li>
                    <li><a class="text-capitalize" href="./sign-in.html">sign in</a></li>
                    <li><a class="text-capitalize" href="#">sign up</a></li>
                </ul>
            </div>


            <div class="search-wrapper flex-grow-1">
                <input class="py-2 px-3 rounded-2 w-100 border-0 d-none d-md-block" type="text" placeholder="Search">
            </div>
            <div class="sign-in-wrapper d-flex align-items-center gap-3">
                
                <?php echo $nav_link; ?>
                
                <select class="form-select d-none d-md-block" aria-label="Default select example">
                    <option selected>En</option>
                    <option value="2">Fr</option>
                    <option value="3">Sp</option>
                </select>
            </div>
        </div>
    </nav>
</body>
</html>