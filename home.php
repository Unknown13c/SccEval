<?php 
   include("config.php");
   $home_announce="SELECT * FROM announcements ORDER BY announcement_id DESC LIMIT 3";
   $home_announcements= mysqli_query($db,$home_announce);

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
      <!-- end of navbar -->
      <!-- end of navigation -->
      <!-- Header -->
      <header id="header" class="header" style="background-color: #BAB5B5;">
         <div class="header-content">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-xl-5">
                     <div class="text-container">
                        <h1 style="font-weight: bold;">SCC Faculty Evaluation System</h1>
                        <h2  style="color: #fff ;">St. Cecilia's College-Cebu, INC.</h2>
                     </div>
                     <!-- end of text-container -->
                  </div>
                  <!-- end of col -->
                  <div class="col-lg-6 col-xl-7">
                     <div class="image-container">
                        <div class="img-wrapper">
                           <img class="img-fluid" src="assets/images/cecilia.PNG" alt="alternative">
                        </div>
                        <!-- end of img-wrapper -->
                     </div>
                     <!-- end of image-container -->
                  </div>
                  <!-- end of col -->
               </div>
               <!-- end of row -->
            </div>
            <!-- end of container -->
         </div>
         <!-- end of header-content -->
      </header>
      <!-- end of header -->
      <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310">
         <defs>
            <style>.cls-1{fill:#EC0303 ;}</style>
         </defs>
         <title>header-frame</title>
         <path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/>
      </svg>
      <!-- end of header -->
      
      <br>
      <br>
      <br>
      <br>
      
      

    <!-- gallery -->
    <section class="swag text-center" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <br>
                    <br>
                    <div class="above-heading" style="font-size: 18px; color: #EC0303;">St. Cecilia's College-Cebu</div>
                    <h2 class="h2-heading">Announcements</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div>
    </div>
</section>


<!-- PORTFOLIO ITEM  -->
<div class="container" >
    <div class="col-lg-12">
            
        <?php
                $ann_index = "SELECT * FROM announcements ORDER BY announcement_id DESC LIMIT 3";
                $retrieve_ann_index = mysqli_query($db, $ann_index);
                 
                if (mysqli_num_rows($retrieve_ann_index)==0){
                      
                  echo "<center><img class='post_img' style='height: 300px; width: 70%; object-fit:cover;margin-top:5%; margin-left:auto; margin-right:auto;'src='assets/images/details.png' ></center>
                                             <p style='text-align:center;'> No announcement yet. Uploaded announcements can be seen here</p>";
                } 
                else{
                echo '<div class="card">';
                    echo '<div class=" row" style=" height:36rem; width: auto; margin:1rem; overflow:auto;">';
                    while ($row = mysqli_fetch_array($home_announcements)) {
                        echo "<div class='post_card' style='box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; margin: 2%; margin-bottom:1%;	width: 300px; height:550px; '>";
                        echo "<a target='_blank' href='assets/announce-images/".$row['announcement_img']."' style='height:100px; width:100px; padding: 5px;' data-lightbox='roadtrip' title='".$row['announcement_text']."'><img style='height:20%; width:50%; object-fit:cover; border: 2px solid #a1a1a1; margin-left:auto; margin-right:auto; display:flex; ' src='assets/announce-images/".$row['announcement_img']."' alt='".$row['announcement_text']."'></a>";
                        echo " <div class='post_container'>";
                        echo "<p>".$row['announcement_text']."</p> ";
                        echo "<p>".$row['announcement_venue']."</p> ";
                        echo "<p>From: ".$row['announcement_date']."</p> ";
                        echo "<p>To: ".$row['to_date']."</p> ";
                                    $text=substr($row['description'],0,50)."...";
                                             echo "<pre style='
                                             white-space: pre-wrap;
                                             white-space: -moz-pre-wrap;
                                             white-space: -pre-wrap;
                                             white-space: -o-pre-wrap;
                                             word-wrap: break-word;
                                             font-family: Open Sans, sans-serif;'>".$text."
                                             </pre>";
                        echo "<a href='read_announcement.php?announce=".$row['announcement_id']. "' ><strong>See More </strong></a>";
                        echo "</div>";
                        echo "</div>";
                    }
                }
        ?>
    </div>
            </div>
        </div>
        <!-- end of card -->
    </div>
</div>

<!-- PORTFOLIO ITEM END -->
<!-- end of gallery -->

 <section class="swag text-center" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <br>
                    <br>
                    <div class="above-heading" style="font-size: 18px; color: #EC0303;">St. Cecilia's College-Cebu</div>
                    <h2 class="h2-heading">Vision, Mission and Core Values</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div>
    </div>
</section>
      <!-- Description -->
      <div class="cards-1">
         <div class="container">
            <!-- end of row -->
            <div class="row">
               <div class="col-lg-12">
                  <!-- Card -->
                  <div class="card">
                     <div class="card-body">
                        <h4 class="card-title" style ="font-family:'Brush Script MT',cursive; background-color: #EC0303; color:white; ">Vision</h4>
                     </div>
                     <?php
                        $vision_retrieve= " SELECT * FROM vm WHERE `School`='SCC'";
                        $vision_display=mysqli_query($db,$vision_retrieve);
                        
                        while ($row1 = mysqli_fetch_array($vision_display)) {
                            ?>
                     <div style="height:auto; overflow:auto; ">
                        <p style="text-align: justify;"><?php echo $row1['Vision'];?></p>
                     </div>
                     <?php }?>
                  </div>
                  <!-- end of card -->
                  <!-- Card -->
                  <div class="card" >
                     <div class="card-body">
                        <h4 class="card-title" style ="font-family:'Brush Script MT',cursive; background-color: #EC0303; color:white;">Mission</h4>
                     </div>
                     <?php
                        $mission_retrieve= " SELECT * FROM vm WHERE `School`='SCC'";
                        $mission_display=mysqli_query($db,$mission_retrieve);
                        
                        while ($row2 = mysqli_fetch_array($mission_display)) {
                            ?>
                     <div style="height:auto; overflow:auto; ">
                        <p style="text-align: justify;"><?php echo $row2['Mission'];?></p>
                     </div>
                     <?php }?>
                  </div>
                  <!-- end of card -->
               </div>
               <!-- end of col -->
               <div class="col-lg-12" style="height: auto;">
                  <div class="card-body">
                     <h4 class="card-title" style="padding:10px; font-family:'Brush Script MT',cursive;  width: 100%;background-color: #0f7a80; color:white; background-color: #EC0303;">School Profile</h4>
                  </div>
                  <div>
                     <br>
                     <!-- Card -->
                     <div class="col-lg-12" >
                        <?php
                        $res_retrieve= " SELECT * FROM school_profile WHERE `ID`='1'";
                        $res_display=mysqli_query($db,$res_retrieve);
                        
                           while ($row3 = mysqli_fetch_array($res_display)) {
                               ?>
                        <div style="height:auto; overflow:auto; ">
                           <p style="text-align: justify;"><?php echo $row3['Description'];?></p>
                        </div>
                        <?php }?>
                     </div>
                     <!-- end of card -->
                  </div>
                  <!-- Card -->
               </div>
            </div>
            <!-- end of row -->
         </div>
         <!-- end of container -->
      </div>
      <!-- end of cards-1 -->
      <!-- end of description -->
      
      
          <!-- Video -->
    <div id="video" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading" style="font-size: 18px; color: #EC0303;">St. Cecilia's College-Cebu</div>
                    <h2 class="h2-heading">About</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=w1CrlY7oiZ8&feature=youtu.be" data-effect="fadeIn">
                                <img class="img-fluid" src="assets/images/scc-about2.jpg" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <div class="p-heading" style="text-align: ; ">St. Cecilia's College Cebu, Inc. (SCC - CI) is a private educational institution in Minglanilla, Cebu. It started out in 1999 as the St. Cecilia's Child Development Center, offering programs for preschool students.</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of video -->
      
      <br><br><br><br>
      <!-- Footer -->
      <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79">
         <defs>
            <style>.cls-2{fill:#BAB5B5;}</style>
         </defs>
         <title>footer-frame</title>
         <path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/>
      </svg>
      <div class="footer" style="background-color: #EC0303 ;">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="footer-col first">
                     <h4>About St. Cecilia's College-Cebu</h4>
                     <p class="p-small" style="color: white; text-align: justify;">
                     The technical training division of the parent organization, St. Cecilia's College - Cebu, Inc., is the St. Cecilia's College (SCC). The center was established on the premises of SCC to expand its service to humanity with the goal of offering affordable technical-vocational training and acting as a gateway to limitless potentials.
                     </p>
                  </div>
               </div>
               <!-- end of col -->
               <div class="col-md-4">
                  <div class="footer-col middle">
                     <h4>Important Links</h4>
                     <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                           <i class="fas fa-square"></i>
                           <div class="media-body">Visit official school website page : <a target='_blank' class="white" href="https://stcecilia.edu.ph/">SCC-CEBU</a></div>
                        </li>
                        <li class="media">
                           <i class="fas fa-square"></i>
                           <div class="media-body">TESDA : <a target='_blank' class="white" href="https://stcecilia.edu.ph/tesda.php">https://stcecilia.edu.ph/tesda.php</a></div>
                        </li>
                        <li class="media">
                           <i class="fas fa-square"></i>
                           <div class="media-body">Clinic Services: <a target='_blank' class="white" href="https://stcecilia.edu.ph/clinic.php">https://stcecilia.edu.ph/clinic.php</a></div>
                        </li>
                        <li class="media">
                           <i class="fas fa-square"></i>
                           <div class="media-body">Guidance Services : <a target='_blank' class="white" href="https://stcecilia.edu.ph/guidance-services.php">https://stcecilia.edu.ph/guidance-services.php</a></div>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- end of col -->
               <div class="col-md-4">
                  <div class="footer-col last">
                     <h4>Contact</h4>
                     <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                           <i class="fas fa-map-marker-alt"></i>
                           <div class="media-body">Poblacion Ward II Minglanilla, Cebu.</div>
                        </li>
                        <li class="media">
                           <i class="fas fa-envelope"></i>
                           <div class="media-body"><a target='_blank' class="white">Email: info.cecilian@gmail.com</a> <i class="fas fa-globe"></i></div>
                        </li>

                        <li class="media">
                           <i class="fas"></i>
                           <div class="media-body"><a target='_blank' class="white">326-3677 (Register's Office)
                           490-0767 (Accounting's Office)
                           (032) 512-8068 / 0919-0727108 / 0991-0727107 / 0991-0727109 / 0991-0727106</a> <i class="fas fa-globe"></i></div>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- end of col -->
            </div>
            <!-- end of row -->
         </div>
         <!-- end of container -->
      </div>
      <!-- end of footer -->
      <!-- end of footer -->
     
      <!-- Scripts -->
      <script src="js2/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
      <script src="js2/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
      <script src="js2/bootstrap.min.js"></script> <!-- Bootstrap framework -->
      <script src="js2/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
      <script src="js2/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
      <script src="js2/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
      <script src="js2/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
      <script src="js2/scripts.js"></script> <!-- Custom scripts -->
   </body>
</html>