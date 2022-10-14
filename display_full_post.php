<!-- use to display full post where the see more button is clicked -->
<?php
// Include the database configuration file
include 'config.php';

if (isset($_GET['display'])) {
  $id = $_GET['display'];
  $update = true;
  $record = mysqli_query($db, "SELECT * FROM image_upload WHERE id=$id");

 
  while  ($n = mysqli_fetch_array($record))
  {
    $name = $n['image'];
    $address = $n['image_text'];
  }
}

if (isset($_GET['announce'])) {
  $id = $_GET['announce'];
  $update = true;
  $record = mysqli_query($db, "SELECT * FROM announcements WHERE announcement_id=$id");

 
  while  ($n = mysqli_fetch_array($record))
  {
    $name = $n['announcement_img'];
    $address = $n['announcement_text'];
    $venue= $n['announcement_venue'];
    $due_date=$n['announcement_date'];
    $to_date=$n['to_date'];
    $desc=$n['description'];
  }
}


?>
