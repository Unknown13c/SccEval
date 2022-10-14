<?php include('display_full_post.php') ?>
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
      <link href="css2/bootstrap.css" rel="stylesheet">
      <link href="css2/fontawesome-all.css" rel="stylesheet">
      <link href="css2/swiper.css" rel="stylesheet">
      <link href="css2/magnific-popup.css" rel="stylesheet">
      <link href="css2/sstyle.css" rel="stylesheet">
      <link href="css2/pme_style.css" rel="stylesheet">
      <link href="css2/mystyle.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!-- Favicon  -->
      <link rel="icon" type="image/png" href="assets/images/cecilia.PNG"/>
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
      <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" style="background-color: 	#EC0303; ">
         <div class="container">
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->
            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="home.php"><img src="assets/images/cecilia.PNG" alt="alternative" style="height:50px; width: 60px; "></a>
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link page-scroll active" href="home.php">HOME <span class="sr-only">(current)</span></a>
                  </li>
                  <!-- <li class="nav-item">
                     <a class="nav-link page-scroll" href="profile.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFILE</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link page-scroll" href="announcements.php">ANNOUNCEMENT</a>
                  </li> -->
                  <li class="nav-item">
                     <a class="nav-link page-scroll" href="index.php">EVALUATION</a>
                  </li>
               </ul>
               <span class="nav-item">
               <a class="btn-outline-sm" href="logout.php">LOG OUT</a>
               </span>
            </div>
         </div>
         <!-- end of container -->
      </nav>
 <!-- post -->

    <div class="main"style="width:auto; margin-left: ; margin-right: ;">
        <!-- here will be all the recent posts -->
        <div class="main-row">
            <div class="col-md-12"  style="background-color: #f2f2f2; padding: 40px; border-radius: 10px;">
                <input type='hidden' name='id' value="<?php echo $id; ?>">
                <a href="assets/announce-images/<?php echo $name; ?>"><img src='assets/announce-images/<?php echo $name; ?>'  style="width:300px; height:250px; margin:auto; float:center;"alt=""></a>
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
                             text-align: justify;
                             white-space: pre-wrap;
                             white-space: -moz-pre-wrap;
                             white-space: -pre-wrap;
                             white-space: -o-pre-wrap;
                             word-wrap: break-word;
                             font-family: Open Sans, sans-serif;'><?php echo $desc;?>
                             </pre>
             </div>

             
         </div>
         <br><br>
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