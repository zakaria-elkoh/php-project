
<?php

    session_start();

    require '../../config/connection.php';
    $sql = "SELECT * FROM user";
    $query = mysqli_query($connection, $sql);


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
</head>

<body class=" bg-black">

    <section class="container">

        <div class="row flex-nowrap">
            <!-- side nav -->
            <?php include '../../includs/admin-aside.php'; ?>

            <!-- content -->
            <div class="content m-1 p-md-4 col-md-9 col-9 min-vh-100">
                <div class="doughnut  p-3 rounded-4 d-flex flex-column gap-5">
                    <h1 class="title fs-3">All Users</h1>
                    <table class='table table-dark table-hover'>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>User name</th>
                                <th>Email</th>
                                <th>Is Admin</th>
                                <th>Operations</th>
                            </tr>
                        </thead>

                        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                        <tbody>
                            <tr>
                                <th><?php echo $row['id']; ?></th>
                                <th><?php echo $row['name']; ?></th>
                                <th><?php echo $row['user_name']; ?></th>
                                <th><?php echo $row['email']; ?></th>
                                <th><?php echo $row['is_admin']; ?></th>
                                <th class='fs-5'>
                                    <a href=""><i class="fa-solid fa-pen-to-square text-white me-2 ms-2"></i></a>
                                    <a href="./users/delete.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash text-white"></i></a>
                                </th>
                            </tr>
                        </tbody>
                        <?php endwhile; ?>
                    </table>



                    
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