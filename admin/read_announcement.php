<?php 
    include('../config.php');
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

 <!-- post -->

    <div class="main"style="width:auto; margin-left: 5%; margin-right: 5%;">
        <!-- here will be all the recent posts -->
        <div class="main-row" style="margin: auto;width:auto;height:auto;">
            <div class="col-md-12"  >
                <input type='hidden' name='id' value="<?php echo $id; ?>">
                <br><br>
                <a href="../assets/announce-images/<?php echo $name; ?>"><img src='../assets/announce-images/<?php echo $name; ?>'  style="width:80%; height:80%; margin:auto; float:center;"alt=""></a>
                <div class="main-content" style=" width: auto;height:auto">
                 <hr>
                 <p>
                     <?php echo $address; ?>
                 </p>
                 <p>
                     <?php echo $venue; ?>
                 </p>
                 <p>
                     From: <?php echo $due_date; ?>
                 </p>
                 <p>
                     To: <?php echo $to_date; ?>
                 </p>
                 <pre style='
                             white-space: pre-wrap;
                             white-space: -moz-pre-wrap;
                             white-space: -pre-wrap;
                             white-space: -o-pre-wrap;
                             word-wrap: break-word;
                             font-family: Open Sans, sans-serif;'><?php echo $desc;?>
                             </pre>
             </div>

             
         </div>
     </div>
     
 </div>

 <!-- end post -->
     
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