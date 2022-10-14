<!-- use to display full post where the see more button is clicked -->
<?php
// Include the database configuration file
include '../config.php';
// Initialize message variable
$msg = "";
// If upload button is clicked ...


if (isset($_GET['delete_announcement'])) {
    $id = $_GET['delete_announcement'];
    $img_ann = $_GET['img_ann'];
    $update = true;
    unlink('../assets/announce-images/'.$img_ann);
    $record = mysqli_query($db, "DELETE FROM announcements WHERE announcement_id=$id");
    

    
    header("Location: announcements-main.php");

}
?>
