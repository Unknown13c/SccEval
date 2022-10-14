<?php
   include("config.php");
   session_start();
   
   if(isset($_SESSION['login_user'])){
       $my_email = $_SESSION['login_user'];
       $sql5 = "SELECT * FROM members WHERE `Email` = '$my_email'"; 
       $result5 = mysqli_query($db,$sql5);
	   while($row5 = $result5->fetch_array()){
		    $my_type = $row5['Usertype'];
	   }
	   if($my_type == "admin"){
		header("location: Client/home.php");
	   }
	//    else if($my_type == "member"){
	//        header("location: Client/home.php");
	//    }
	   else if($my_type == "Super User (SU)"){
	       header("location: accounts-su.php");
	   }
   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Select Usertype</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="cecilia.PNG"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/images/scc-about2.jpg'); background-size: cover;">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

			<form name="send_camp" class="login100-form validate-form" action="user-registration.php" method="post">
				<img src="assets/images/scc-login-logo.png" alt="SCC-Logo" width="505" height="100" style="margin-top: -65px; margin-left: -57px; background-color: #EC0303;">
				<br><br>
				
				<center><h3 style="font-weight: bold;">REGISTER AS:</h3></center>
		        <br><br>
                    <select name="usertype" class="field input" style="color: black; width: 392px; border-color: white; border-radius: 5px; border: 2px solid #aca6a6; height: 40px; font-size: 18px; margin-top: 20px; padding:5px;" required>
                        <option value="">Select Usertype :</option>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>

                    </select>
						<br><br>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" style="background-color: #EC0303;">
								Next
							</button>
						</div>
					</div>
				</form>
                <center>
				<p style="font-size: 16px; font-weight: ;">or</p>
				<a href="index.php"><button style="background-color: ; width: 100%; padding: 12px; border-radius: 25px; color: ; font-size: 16px;">Sign-in</button></a></center>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
    </script>

</body>
</html>