
<?php

  include 'connection.php';

  session_start();

   if(isset($_POST['submit'])) {
      $name = $_POST['name'];
      $user_name = $_POST['user_name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "INSERT INTO `user`(`name`, `user_name`, `email`, `password`) 
      VALUES ('$name','$user_name','$email','$password')";
            
      $query = mysqli_query($conn, $sql);

      if(isset($query)) {
          echo "<h1>Added </h1>";

          $newsSql = "SELECT * FROM user WHERE user_name = '$user_name'";
          $newqQuery = mysqli_query($conn, $newsSql);
          $rows = mysqli_fetch_assoc($newqQuery);

          $_SESSION['user_name'] = $user_name;
          $_SESSION['user_id'] = $rows['id'];
          header('Location: http://localhost/movie_mingle_dashboard/dashboard.php');
      } else {
          echo "<h1>an error</h1>";
      }
   }

  //  if(isset($_POST['submit'])){

  //      $name = $_POST['name'];
     
  //     $query = "INSERT INTO `user`(`name`) VALUES ('$name')";

  //     $result = mysqli_query($conn , $query); 

  //  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Mingle </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-black text-white">
   
    <form class="container w-25 py-5 mt-5" action="" method="post" >
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Full name:</label>
          <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputUser" class="form-label">User name:</label>
          <input name="user_name" type="text" class="form-control" id="exampleInputUser" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address:</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password:</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  </body>
</html>