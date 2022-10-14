<?php
    // Include the database configuration file
    include '../config.php';
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    $usertype = $_SESSION['usertype'];
    $my_email = $_SESSION['login_user'];
    
    // Initialize message variable
    $msg = "";

  // If upload button is clicked ...
if (isset($_POST['upload'])) {
  
    // Get image name
  $announcement_img = $_FILES['announcement_img']['name'];
    // Get text
  $announcement_text = mysqli_real_escape_string($db, $_POST['event']);
  $announcement_venue = mysqli_real_escape_string($db, $_POST['venue']);
  $announcement_date = mysqli_real_escape_string($db, $_POST['due_date']);
  $to_date = mysqli_real_escape_string($db, $_POST['to_date']);
  $desc = mysqli_real_escape_string($db, $_POST['description']);
  

  $date_announced = mysqli_real_escape_string($db, $_POST['date_announced']);

    // image file directory
  $target = "../assets/announce-images/".basename($announcement_img);

  $sql_announce = "INSERT INTO announcements (announcement_img, announcement_text, announcement_venue, announcement_date, to_date,description, date_announced) VALUES ('$announcement_img', '$announcement_text', '$announcement_venue', '$announcement_date','$to_date','$desc','$date_announced')";
    // execute query
  mysqli_query($db, $sql_announce);

  if (move_uploaded_file($_FILES['announcement_img']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";

    header("Location: announcements-main.php");
  }else{
    $msg = "Failed to upload image";
  }
}
?>