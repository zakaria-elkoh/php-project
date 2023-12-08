<?php

  require '../../config/connection.php';

  session_start();

   if(isset($_POST['submit'])) {
      $name = $_POST['name'];
      $user_name = $_POST['user_name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO `user`(`name`, `user_name`, `email`, `password`) 
      VALUES ('$name','$user_name','$email','$hashedPassword')";
            
      $query = mysqli_query($connection, $sql);

      if(isset($query)) {

          echo "<h1>Added </h1> <br>";

          $newsSql = "SELECT * FROM user WHERE user_name = '$user_name'";
          $newqQuery = mysqli_query($connection, $newsSql);
          $rows = mysqli_fetch_assoc($newqQuery);

          $_SESSION['user_name'] = $user_name;
          $_SESSION['user_id'] = $rows['id'];

          header('Location: http://localhost/movie_mingle');
    } else {
          echo "<h1>an error</h1>";
    }
   }

?>