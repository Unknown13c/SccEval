<?php
    include "../config.php";
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
      <link rel="icon" type="image/png" href="images/cecilia.png"/>
   </head>
   <body data-spy="scroll" data-target=".fixed-top">

    <!-- uploaded pics of events and programs or projects -->
    <!-- this should be from all the uploaded pics and will be from the database -->

    <div class="container" >
        <div class="row">
            <div class="col-lg-12">

                <!-- Card -->
                <div class="card"  style="border: 0px solid #fff; width: 100%">
                    <div style="float:left; margin-top: 20px; width: 100%; ">
                        <form method="POST" action="../admin/upload_announcement.php" enctype="multipart/form-data">
                            <input type="hidden" name="size" value="1000000">
                            <div >
                                <input type="text" name="event" style="border-radius: 5px; border-color: gray; border-width: thin; padding: 8px; ; width: 100%; height: auto; margin-top:auto;" value="Event: " placeholder="Name of the Event" required>
                                <br>
                                <input type="text" name="venue"  style="margin-top: 5px; border-radius: 5px; border-color: gray; border-width: thin; padding: 8px; width: 100%; height: auto; " value="Venue: " placeholder="Venue of the Event" required>
                                <hr>
                                <label for="due_date"> From: 
                                <input name="due_date" class="textbox-n" type="date"  id="date" style="width:auto; height: auto; margin-top:auto;cursor: pointer; padding: 8px; border-style: solid; border-radius: 10px; border-width: thin;" required>
                                </label>
                                <label for="to_date"> To:     
                                 <input name="to_date" class="textbox-n" type="date"  id="date" style="width:auto; height: auto; margin-top:auto;cursor: pointer; padding: 8px; border-style: solid; border-radius: 10px; border-width: thin;" required>
                                </label>
                                <hr>
                                <textarea 
                                id="text" 
                                cols="40" 
                                rows="4" 
                                name="description" 
                                placeholder="Say something about the event..." 
                                style="border-radius: 5px; width:100%; border:0.01rem solid #dddddd; background-color:	#dddddd; padding:10px; 	resize: none;" required></textarea>
                            </div>
                            
                            <div>
                                <input type="hidden" name="date_announced" value="<?php
                                                // Set the new timezone
                                date_default_timezone_set('Asia/Manila');
                                $date = date('d-m-y h:i:s A');
                                echo $date;
                            ?>">
                        </div>
                        <div>
                            <div class="image-upload">
                                <label for="file-input">
                                    <img id="previewImg" src="../assets/images/photo.svg" style="width: 40px; height: 40px; cursor:pointer;"/>
                                    <label >Upload photo</label>
                                </label>

                                <input id="file-input" type="file" onchange="previewFile(this);" style="opacity: 0; margin-left: -120px;"  name="announcement_img" required>
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

                            
                        </div>
                        <br>
                        <div style="float:right; margin-top:auto;">
                            <button type="submit" name="upload" style=" width:10rem; background-color:#CB0101 ; color: white; border: none; padding: 7px;" >POST</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end of card -->
        </div>
    </div>
</div>
<hr>
<h2 style="text-align: center;">Announcements List</h2>                        
<!-- announcement panel -->
    <?php
        
         $ann="SELECT * FROM announcements ORDER BY announcement_id DESC";
         $retrieve_ann= mysqli_query($db,$ann);
     
        if (mysqli_num_rows($retrieve_ann)==0){
          
          echo "<center><img class='post_img' style='height: 300px; width: 65%; object-fit:cover;margin-top:5%; margin-left:auto; margin-right:auto;'src='../assets/images/details.png' ></center>
                                                     <p style='text-align:center;'> No post yet. Uploaded posts can be seen here</p>";
         } 
        else{
            echo '<div class=" row" style=" height:37rem; width: auto; margin:1rem; overflow:auto;">';
            while ($row = mysqli_fetch_array($retrieve_ann)) {
                echo "<div class='post_card' style='box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; margin: 1%; 	width: 290px; height:450px; padding:20px;'>";
                echo "<a href='../admin/update_announcements.php?ID=".$row['announcement_id']. "' style='float:right;'><image src='../assets/images/edit.svg'  style=' height: 20px;width: 20px;'></a>";
                echo "<a href='../admin/announce_edit_delete.php?delete_announcement=".$row['announcement_id']. "&img_ann=".$row['announcement_img']. "' style='float:right;'><image src='../assets/images/trash-solid.svg'  style=' height: 20px;width: 20px;'></a>";
                echo "<a href='../assets/announce-images/".$row['announcement_img']."' target='_blank' style='height:100px; width:100px; padding: 5px;' data-lightbox='roadtrip' title='".$row['announcement_text']."'><img style='height:20%; width:50%; object-fit:cover; border: 2px solid #a1a1a1; margin-left:auto; margin-right:auto; display:flex; ' src='../assets/announce-images/".$row['announcement_img']."' alt='".$row['announcement_text']."'></a>";
                echo " <div class='post_container'>";
                echo "<p>".$row['announcement_text']."</p> ";
                echo "<p>".$row['announcement_venue']."</p> ";
                echo "<p>From: ".$row['announcement_date']."</p> ";
                echo "<p>To: ".$row['to_date']."</p> ";
                                             $text=substr($row['description'],0,20)."...";
                                     echo "<pre style='
                                     white-space: pre-wrap;
                                     white-space: -moz-pre-wrap;
                                     white-space: -pre-wrap;
                                     white-space: -o-pre-wrap;
                                     word-wrap: break-word;
                                     font-family: Open Sans, sans-serif;'>".$text."
                                     </pre>";
                echo "<a href='../admin/read_announcement.php?announce=".$row['announcement_id']. "' ><strong>See More </strong></a>";
                echo "</div>";
                echo "</div>";
            }
        }
    ?>
</div>                  
<!-- end announcement panel -->
     
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