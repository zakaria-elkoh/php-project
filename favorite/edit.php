

<?php

  include '../connection.php';

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `fave_movie` WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($query);

    $title = $rows['title'];
    $duration = $rows['duration'];
    $user_id = $rows['user_id'];
    $description = $rows['description'];
  }

//    if(isset($_POST['submit'])) {
//       $title = $_POST['title'];
//       $duration = $_POST['duration'];
//       $description = $_POST['description'];
//       $user_id = $_POST['user_id'];

//       $sql = "UPDATE `fave_movie` SET `title`='$title',`duration`='$duration',`description`='$description',`user_id`='$user_id' where id = $tareget_id";
      
//       $query = mysqli_query($conn, $sql);

//       if(isset($query)) {
//           header('location: favorite.php');
//       } else {
//           echo '<h1>an error</h1>'; 
//       }
//    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover and curate your all-time favorites here. These are the films and
        shows
        that have left a mark on you">
    <title>Favorite</title>
    <link rel="stylesheet" href="css/favorite.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>
<body class='bg-black'>
    
    <div class="container py-5">
        <div class="modal-body text-white w-50 mx-auto">
            <!-- the form -->
            <form method="POST" action="../favorite.php?id=<?php echo $id; ?>">
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Title:</label>
                    <input type="text" name="title" value='<?php if(isset($_GET['id'])) { echo $title; } ?>' class="form-control bg-black text-white" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Duration:</label>
                    <input type="text" name="duration" value='<?php if(isset($_GET['id'])) { echo $duration; } ?>'  class="form-control bg-black text-white" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">urser id:</label>
                    <input type="text" name="user_id" value='<?php if(isset($_GET['id'])) { echo $user_id; } ?>'  class="form-control bg-black text-white" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Description:</label>
                    <textarea name="description"  class="form-control bg-black text-white" id="message-text"><?php if(isset($_GET['id'])) { echo $description; } ?></textarea>
                </div>
                <div class="modal-footer bg-black ">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Send message</button> -->
                    <button type="submit" name="edit" class="btn btn-primary ms-3 px-4">Edit</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/favorite.js"></script>

</body>
</html>