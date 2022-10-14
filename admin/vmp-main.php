
<?php include('../config.php');

$v_disabled = "disabled";
$m_disabled = "disabled";
$selected = "";

$assign_hidden = "";
$update_hidden = "hidden";

$add_corev_hidden = "";
$update_corev_hidden = "hidden";

// ========================= VISION MISSION =========================
if(isset($_POST['assign_vm_btn'])){ 
    $vision = mysqli_real_escape_string($db,$_POST['vision']);
    $mission = mysqli_real_escape_string($db,$_POST['mission']); 

    $sql = "INSERT INTO vm (`School`,`Vision`, `Mission`)
    VALUES ('CALAUAN', '$vision', '$mission')";
    if (mysqli_query($db, $sql)) {
        echo '<script>alert("Vision and Mision assigned successfully!");</script>';
    } else {
        $error = "Invalid";
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}

if(isset($_POST['update_vm_btn'])){ 
    $vision = mysqli_real_escape_string($db,$_POST['vision']);
    $mission = mysqli_real_escape_string($db,$_POST['mission']); 

    $sql = "UPDATE vm SET Vision='$vision', Mission='$mission' WHERE `School`='SCC' ";
    if (mysqli_query($db, $sql)) {
        echo '<script>alert("Vision and Mision updated successfully!");</script>';
    } else {
        $error = "Invalid";
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}

// ========================= CORE VALUES =========================
if(isset($_POST['add_corev_btn'])){ 
    $description = mysqli_real_escape_string($db,$_POST['description']);

    $sql = "INSERT INTO municipal_profile (`Description`)
    VALUES ('$description')";
    if (mysqli_query($db, $sql)) {
        echo '<script>alert("Municipal Profile added successfully!");</script>';
    } else {
        $error = "Invalid";
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}

if(isset($_POST['update_corev_btn'])){ 
    $description = mysqli_real_escape_string($db,$_POST['description']);

    $sql = "UPDATE school_profile SET `Description`='$description' WHERE ID='1' ";
    if (mysqli_query($db, $sql)) {
        echo '<script>alert("School Profile updated successfully!");</script>';
    } else {
        $error = "Invalid";
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>VMP - ADMIN - SCC-CEBU </title>
<link rel="icon" type="image/png" href="../assets/images/cecilia.PNG"/>
<!-- BOOTSTRAP STYLES-->
<link href="../assets2/css/bootstrap.css" rel="stylesheet" />
 <!-- FONTAWESOME STYLES-->
<link href="../assets2/css/font-awesome.css" rel="stylesheet" />
 <!-- MORRIS CHART STYLES-->
<link href="../assets2/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
<link href="../assets2/css/custom.css" rel="stylesheet" />
 <!-- GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<style>
/* The Modal (background) */
.modal {
display: none; /* Hidden by default */
position: fixed; /* Stay in place */
z-index: 10000000; /* Sit on top */
padding-top: 100px; /* Location of the box */
left: 0;
top: 0;
width: 100%; /* Full width */
height: 100%; /* Full height */
overflow: auto; /* Enable scroll if needed */
background-color: rgb(0,0,0); /* Fallback color */
background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
background-color: #fefefe;
margin: auto;
padding: 20px;
border: 1px solid #888;
width: 80%;
}

/* The Close Button */
.close {
color: #aaaaaa;
float: right;
font-size: 28px;
font-weight: bold;
}

.close:hover,
.close:focus {
color: #000;
text-decoration: none;
cursor: pointer;
}
</style>

</head>
<body>
        <div id="page-inner" style="min-height: 30px; padding: 10px;">
                
             <!-- /. ROW  -->
              <hr />
        <form id="my-form" method="post">
        <?php // Attempt select query execution
            $gen_vision = "";
            $gen_mission = "";
            $sql = "SELECT * FROM vm WHERE `School`='SCC'";
            if($result = $db->query($sql)){
                if($result->num_rows > 0){
                    while($row = $result->fetch_array()){
                        $gen_vision = $row['Vision'];
                        $gen_mission = $row['Mission'];
                    }
                    $assign_hidden = "hidden";
                    $update_hidden = "";
                }
                else{
                    $assign_hidden = "";
                    $update_hidden = "hidden";
                }
            }
            ?>
            <div class="row" style="margin-left: 16px; width: 100%;">
              <select class="field input" style="width: 250px; border-color: white; border-radius: 5px; background-color: white; border: 2px solid #b90505; height: 40px; font-size: 17px; margin-top: 5px; padding:5px;" required>
                        <option value="MINSU" selected>SCC</option>
                            <!-- Fetch the list of usertype in usertype table from database -->
                    </select>
                    <b><button type="submit" name="assign_vm_btn" class="login100-form-btn" style="background-color: #b90505; color: white; float: right; margin-right: 30px; padding-right:20px; padding-left: 20px; padding-top:10px; padding-bottom: 10px; border: none; border-radius: 25px; font-family: Arial;" <?php echo $assign_hidden?>>Assign <img src="../assets2/img//add_icon.png" style="width: 22px; height: 17px; margin-top: -5px;"></button></b>
            <b><button type="submit" name="update_vm_btn" class="login100-form-btn" style="background-color: #b90505; color: white; float: right; margin-right: 30px; padding-right:20px; padding-left: 20px; padding-top:10px; padding-bottom: 10px; border: none; border-radius: 25px; font-family: Arial;" <?php echo $update_hidden?>>Update <img src="../assets2/img/update.png" style="width: 23px; height: 21px; margin-top: -5px;"></button></b>
                </div><br>
            <div class="row" style="margin-left: 1px; width: 100%;">
            <div class="col-md-6 col-sm-6 col-xs-6">         
        <div class="panel panel-back noti-box" style="background-color:  #D4CBC9; border-radius: 10px;">   
        <center><div class="text-box">
            <h3 style="margin-top: -5px; font-weight: bold;">Vision</h3>
            <b><textarea name="vision" placeholder="Input some text here..." style="text-align: center; color: black; width: 100%; height: 250px; padding: 15px; border-radius: 10px; resize: none;"required><?php echo $gen_vision; ?></textarea></b>
            </div></center>
         </div>
         </div>

         <div class="col-md-6 col-sm-6 col-xs-6">             
        <div class="panel panel-back noti-box" style="background-color:  #D4CBC9; border-radius: 10px;">   
        <center><div class="text-box">
            <h3 style="margin-top: -5px; font-weight: bold;">Mission</h3>
            <b><textarea name="mission" placeholder="Input some text here..." style="text-align: center; color: black; width: 100%; height: 250px; padding: 15px; border-radius: 10px; resize: none;" required><?php echo $gen_mission; ?></textarea></b>
            </div></center>
         </div>
         </div>
        </div>
        </form>
        <hr>

        <!------------------------------ CORE VALUES ------------------------------>
        <form method="post">
        <?php // Attempt select query execution
            $gen_profile = "";
            $sql = "SELECT * FROM school_profile WHERE `ID`='1'";
            if($result = $db->query($sql)){
                if($result->num_rows > 0){
                    while($row = $result->fetch_array()){
                        $gen_profile = $row['Description'];
                    }
                    $add_corev_hidden = "hidden";
                    $update_corev_hidden = "";
                }
                else{
                    $add_corev_hidden = "";
                    $update_corev_hidden = "hidden";
                }
            }
            ?>

        <b><button type="submit" name="add_corev_btn" class="login100-form-btn" style="background-color: #36892f; color: white; float: right; margin-right: 20px; margin-top: -8px; padding-right:20px; padding-left: 20px; padding-top:10px; padding-bottom: 10px; border: none; border-radius: 25px; font-family: Arial;" <?php echo $add_corev_hidden?>>Add <img src="../assets2/img/add_icon.png" style="width: 22px; height: 17px; margin-top: -5px;"></button></b>
            <b><button type="submit" name="update_corev_btn" class="login100-form-btn" style="background-color: #b90505; color: white; float: right; margin-top: -8px; margin-right: 20px; padding-right:20px; padding-left: 20px; padding-top:10px; padding-bottom: 10px; border: none; border-radius: 25px; font-family: Arial;" <?php echo $update_corev_hidden?>>Update <img src="../assets2/img/update.png" style="width: 23px; height: 21px; margin-top: -5px;"></button></b>
        <center><h3 style="color: #312F2E ; font-weight: bold;">SCHOOL PROFILE</h3></center>
        <hr>
        
         <div class="row" style="margin-left: 1px; width: 100%;">
        
         <div class="col-md-12 col-sm-12 col-xs-12">            
        <div class="panel panel-back noti-box" style="background-color: #D4CBC9; border-radius: 10px;">   
        <center><div class="text-box">
            <h3 style="margin-top: -5px; font-weight: bold;">Description</h3>
            <b><textarea name="description" placeholder="Input some text here..." style="text-align: center; color: black; width: 100%; height: 300px; padding: 25px; border-radius: 10px; resize: none;" required><?php echo $gen_profile?></textarea></b>
            </div></center>
         </div>
         </div>
        </form>
        
             <!-- /. ROW  -->                                               
                    
    </div>
             <!-- /. ROW  -->
            <div class="row">
                
        </div>
     <!-- /. PAGE WRAPPER  -->
    </div>
 <!-- /. WRAPPER  -->

 
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
  var ctx = document.getElementById("chartjs_bar").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels:<?php echo json_encode($barangay); ?>,
                    datasets: [{
                        backgroundColor: [
                           "#5969ff",
                            "#ff407b",
                            "#25d5f2",
                            "#ffc750",
                            "#2ec551",
                            "#7040fa",
                            "#ff004e"
                        ],
                        data:<?php echo json_encode($area); ?>,
                    }]
                },
                options: {
                       legend: {
                    display: false,
                    position: 'bottom',

                    labels: {
                        fontColor: '#71748d',
                        fontFamily: 'Circular Std Book',
                        fontSize: 14,
                    }
                },


            }
            });
</script>
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
 <!-- MORRIS CHART SCRIPTS -->
 <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
  <!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>

    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}
</script>

<script>
    function sort_file_status(){
        document.getElementById("my-form").submit();
    }
</script>

</body>
</html>
