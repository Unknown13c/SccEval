<?php
// Include the database configuration file
include '../config.php';

if (isset($_GET['ID'])) {
  $id = $_GET['ID'];
  $update = true;
  $record = mysqli_query($db, "SELECT * FROM announcements WHERE announcement_id=$id");

  while  ($n = mysqli_fetch_array($record))
  {
    $ann_img = $n['announcement_img'];
    $ann_event = $n['announcement_text'];
    $ann_venue = $n['announcement_venue'];
    $ann_from = $n['announcement_date'];
    $ann_to = $n['to_date'];
    $ann_descript = $n['description'];
  }
    //DATE FROM   
    $dt_from = date('Y-m-d', strtotime(str_replace('-', '/', $ann_from)));
    $date_value_from = date('Y-m-d', strtotime($dt_from));
    //DATE TO 
    $dt_to = date('Y-m-d', strtotime(str_replace('-', '/', $ann_to)));
    $date_value_to = date('Y-m-d', strtotime($dt_to));
}

// =============================================================================================
// UPDATE PROFILE
if (isset($_POST['update_announcement'])) {
    $ann_id = mysqli_real_escape_string($db, $_POST['my_id']);
    if(isset($_FILES['image']['name'])){
        if($_FILES['image']['name'] != ""){
            $ann_pic = $_FILES['image']['name'];
            $sql_add = "`announcement_img`='$ann_pic',";
            //=============================DELETE RECENT IMAGE===============================================
            $record1 = mysqli_query($db, "SELECT * FROM announcements WHERE announcement_id=$ann_id");
              while  ($n1 = mysqli_fetch_array($record1))
              {
                $img_name = $n1['announcement_img'];
              }
              unlink('../assets/announce-images/'.$img_name);
            //================================================================================================
          
        }
        else{
            $sql_add = "";
        }
    }
    else{
        $sql_add = "";
    }
    $my_img = mysqli_real_escape_string($db, $_POST['image']);
    $my_event = mysqli_real_escape_string($db, $_POST['event']);
    $my_venue = mysqli_real_escape_string($db, $_POST['venue']);
    $my_date_from = mysqli_real_escape_string($db, $_POST['date_from']);
    $my_date_to = mysqli_real_escape_string($db, $_POST['date_to']);
    $my_description = mysqli_real_escape_string($db, $_POST['my_description']);
    
    // Set the new timezone
    date_default_timezone_set('Asia/Manila');
    $date_announced = date('d-m-y h:i:s A');
    
    // image file directory
    $target = "../assets/announce-images/".basename($ann_pic);

    $sql_updt1 = "UPDATE announcements SET $sql_add `announcement_text`='$my_event', `announcement_venue`='$my_venue', `announcement_date`='$my_date_from', `to_date`='$my_date_to', `description`='$my_description', `date_announced`='$date_announced' WHERE `announcement_id`='$ann_id'";
    // execute query
    $result_updt1 = mysqli_query($db, $sql_updt1);
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target) == true || $result_updt1 == true) {
        echo '<script>alert("Post updated successfully")</script>';
        header("Location: announcements-main.php");
    }else{
        echo '<script>alert("Failed to update!")</script>';
        header("Location: announcements-main.php");
    }
}



?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- SEO Meta Tags -->
      <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
      <meta name="author" content="Inovatik">
      <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
      <meta property="og:site_name" content="" />
      <!-- website name -->
      <meta property="og:site" content="" />
      <!-- website link -->
      <meta property="og:title" content=""/>
      <!-- title shown in the actual shared post -->
      <meta property="og:description" content="" />
      <!-- description shown in the actual shared post -->
      <meta property="og:image" content="" />
      <!-- image link, make sure it's jpg -->
      <meta property="og:url" content="" />
      <!-- where do you want your post to link to -->
      <meta property="og:type" content="article" />
      <!-- Website Title -->
      <title>Home - St. Cecilia's College-Cebu </title>
      <!-- Styles -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/fontawesome-all.css" rel="stylesheet">
      <link href="css/swiper.css" rel="stylesheet">
      <link href="css/magnific-popup.css" rel="stylesheet">
      <link href="css/sstyle.css" rel="stylesheet">
      <link href="css/pme_style.css" rel="stylesheet">
      <link href="css/mystyle.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!-- Favicon  -->
      <link rel="icon" href="images/cecilia.png">
   </head>
   <body data-spy="scroll" data-target=".fixed-top">
      <!-- Preloader -->
      <!--<div class="spinner-wrapper">-->
      <!--   <div class="spinner">-->
      <!--      <div class="bounce1"></div>-->
      <!--      <div class="bounce2"></div>-->
      <!--      <div class="bounce3"></div>-->
      <!--   </div>-->
      <!--</div>-->
      <!-- end of preloader -->
      <!-- Navigation -->

    <div class="main"style="width:auto; margin-left:10%; margin-right:10%;">
        <!-- here will be all the recent posts -->
        <div class="main-row" style="margin: auto;width:auto;height:auto;">
            <div class="col-md-12" style="margin: auto;">
                <input type='hidden' name='id' value="<?php echo $id; ?>">
                <br><br>
                <center><a href="../assets/announce-images/<?php echo $ann_img; ?>" target="_blank"><img src='../assets/announce-images/<?php echo $ann_img; ?>' style="width:80%; height:80%; margin:auto; border-radius: 5px;"alt=""></a></center>
                <div class="main-content" style=" width: auto;height:auto">
                        <!--Change Photo-->
                        <br>
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="image-upload">
                            <label for="file-input">
                                    <img id="previewImg" src="../assets/images/photo.svg" style="width: 50px; height: 50px; cursor:pointer;"/>
                                    <strong><label >Change Photo</label></strong>
                                </label>

                            <input id="file-input" type="file" accept="image/*" onchange="previewFile(this);" style="display: none;"  name="image"/>
                            <input type="hidden" name="my_id" value="<?php echo $_GET['ID']; ?>">
                        </div>
                        <script>
                            function previewFile(input){
                                var file = $("input[type=file]").get(0).files[0];

                                if(file){
                                    var reader = new FileReader();

                                    reader.onload = function(){
                                        $("#previewImg").attr("src", reader.result);
                                    }

                                    reader.readAsDataURL(file);
                                }
                            }
                        </script>
                        
                 <hr>
                <input type="text" name="event" style="border-radius: 5px; border-color: gray; border-width: thin; padding: 8px; ; width: 100%; height: auto; margin-top:auto;" value="<?php echo $ann_event; ?>" placeholder="Name of the Event" required>
                <br>
                <input type="text" name="venue"  style="margin-top: 5px; border-radius: 5px; border-color: gray; border-width: thin; padding: 8px; width: 100%; height: auto; " value="<?php echo $ann_venue; ?>" placeholder="Venue of the Event" required>
                <hr>
                <label for="date_from"> From:
                <input name="date_from" class="textbox-n" type="date" value="<?php echo $date_value_from; ?>" id="date" style="width:auto; height: auto; margin-top:auto;cursor: pointer; padding: 8px; border-style: solid; border-radius: 10px; border-width: thin;" required>
                </label>
                <label for="date_to"> To:    
                 <input name="date_to" class="textbox-n" type="date" value="<?php echo $date_value_to; ?>" id="date" style="width:auto; height: auto; margin-top:auto;cursor: pointer; padding: 8px; border-style: solid; border-radius: 10px; border-width: thin;" required>
                </label>
                <hr>
                 <textarea name="my_description" class="textarea resize-ta" style="
                 white-space: pre-wrap;
                 white-space: -moz-pre-wrap;
                 white-space: -pre-wrap;
                 word-wrap: break-word;
                 white-space: -o-pre-wrap;
                 border-radius: 5px;
                 font-family: Open Sans, sans-serif; width:100%; height: 280px; padding: 20px; border-color: gray;"><?php echo $ann_descript; ?></textarea>
                
                    <button name="update_announcement" type="submit" style="border: none; background-color: #2243b6; color: white; border-radius: 3px; padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px;">Update</button>
                    <a href="announcements-main.php" style="border: none; background-color: #464646; color: white; border-radius: 3px; padding-left: 23px; padding-right: 23px; padding-top: 12px; padding-bottom: 12px; text-decoration: none;">Cancel</a>
             </div>
             </form>
         </div>
     </div>
     
 </div>

 <!-- end post -->

      <!-- end screen division -->
     
      <!-- Scripts -->
      <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
      <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
      <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
      <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
      <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
      <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
      <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
      <script src="js/scripts.js"></script> <!-- Custom scripts -->
   </body>
</html>