<?php
    // Include the database configuration file
    include 'config.php';
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
  $target = "new_announcements/".basename($announcement_img);

  $sql_announce = "INSERT INTO announcements (announcement_img, announcement_text, announcement_venue, announcement_date, to_date,description, date_announced, profile_pic) VALUES ('$announcement_img', '$announcement_text', '$announcement_venue', '$announcement_date','$to_date','$desc','$date_announced', '$pro_pic')";
    // execute query
  mysqli_query($db, $sql_announce);

  if (move_uploaded_file($_FILES['announcement_img']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";

    header("Location: announcements-main.php");
  }else{
    $msg = "Failed to upload image";
  }
}

$home_announce="SELECT * FROM announcements ORDER BY announcement_id DESC LIMIT 3";
$home_announcements= mysqli_query($db,$home_announce);

$retrieve_announce="SELECT * FROM announcements WHERE `email`='$my_email' ORDER BY announcement_id DESC";
$retrieve_announcements= mysqli_query($db,$retrieve_announce);

$announce="SELECT * FROM announcements ORDER BY announcement_id DESC LIMIT 1";
$announcements_SQL= mysqli_query($db,$announce);

$announce_sql1="SELECT * FROM (SELECT * FROM announcements ORDER BY announcement_id DESC LIMIT 2) announcement1 ORDER BY announcement_id ASC LIMIT 1";
$announcements_SQL1= mysqli_query($db,$announce_sql1);

$announce_sql2="SELECT * FROM (SELECT * FROM announcements ORDER BY announcement_id DESC LIMIT 3) announcement1 ORDER BY announcement_id ASC LIMIT 1";
$announcements_SQL2= mysqli_query($db,$announce_sql2);

$announce_sql3="SELECT * FROM (SELECT * FROM announcements ORDER BY announcement_id DESC LIMIT 4) announcement1 ORDER BY announcement_id ASC LIMIT 1";
$announcements_SQL3= mysqli_query($db,$announce_sql3);

?>