<?php

  include '../../config/connection.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['user_name'];
    $password = $_POST['password'];

    $sql = "SELECT `user_name`, `password` FROM `user` WHERE user_name = '$username'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result)>0) {

    $rows = mysqli_fetch_assoc($result);

    if(password_verify($password, $rows['password'])){
      $newsSql = "SELECT * FROM user WHERE user_name = '$username'";
      $newqQuery = mysqli_query($connection, $newsSql);
      $rows = mysqli_fetch_assoc($newqQuery);

      session_start();

      $_SESSION['user_name'] = $username;
      $_SESSION['user_id'] = $rows['id'];
      $_SESSION['is_admin'] = $rows['is_admin'];
      $is_admin = $rows['is_admin'];

      if($is_admin == 'true'){
          header('Location: http://localhost/movie_mingle/views/admin');
      }else{
          header('Location: http://localhost/movie_mingle/');
      }
    }else{
      echo '<p class="text-center text-danger mt-4">user name or password is incorrect!</p>';
    }

    }
  }

?>