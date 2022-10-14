<?php
	include("config.php");
	session_start();
	$error = "";
	$check = "";
	
	//fetch members from database 	
	$sql_students = mysqli_query($db, "SELECT * FROM student_list");
	$sql_classes = mysqli_query($db, "SELECT * FROM class_list");
	
	if(isset($_POST['school_id'])) {

		$school_id = mysqli_real_escape_string($db,$_POST['school_id']);
		$lname = mysqli_real_escape_string($db,$_POST['lname']);
		$fname = mysqli_real_escape_string($db,$_POST['fname']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password = mysqli_real_escape_string($db,$_POST['pass']);
	    $usertype2 = mysqli_real_escape_string($db,$_POST['usertype2']);

		if($usertype2 == "student"){
			$class_id = mysqli_real_escape_string($db,$_POST['class_id']);
		}
		
		//Encrypt the password of the user
		$encrypted_pwd = md5($password);
		
		        // Generate emails and check duplicates
        $email_existed = false;
        while($row_mem = mysqli_fetch_array($sql_students)) {
            $members_email = $row_mem['email'];
            if($members_email == $email){
                $email_existed = true;
            }
        }
        
            if($email_existed == false){
					if(isset($_FILES['image'])){
						$img_name = $_FILES['image']['name'];
						$img_type = $_FILES['image']['type'];
						$tmp_name = $_FILES['image']['tmp_name'];
						
						$img_explode = explode('.',$img_name);
						$img_ext = end($img_explode);
		
						$extensions = ["jpeg", "png", "jpg"];
						if(in_array($img_ext, $extensions) === true){
							$types = ["image/jpeg", "image/jpg", "image/png"];
							if(in_array($img_type, $types) === true){
								$time = time();
								$new_img_name = $time.$img_name;
								if(move_uploaded_file($tmp_name,"assets/uploads/".$new_img_name)){
                                    
									if($usertype2 == "student"){
										// INSERT student
										$sql_reg_student = "INSERT INTO student_list (`school_id`, `firstname`, `lastname`, `email`, `password`, `class_id`, `avatar`)
										VALUES ('$school_id', '$fname', '$lname', '$email', '$encrypted_pwd', '$class_id', '$new_img_name')";
									}
									else if($usertype2 == "teacher"){
										// INSERT teacher
										$sql_reg_teacher = "INSERT INTO faculty_list (`school_id`, `firstname`, `lastname`, `email`, `password`, `avatar`)
										VALUES ('$school_id', '$fname', '$lname', '$email', '$encrypted_pwd', '$new_img_name')";
									}
								}
								if (mysqli_query($db, $sql_reg_student) == true || mysqli_query($db, $sql_reg_teacher) == true) {
								    // ==========================EMAIL VERIFICATION====================================
								    // $to = $email;
								    // $from = "scc@gmail.com";
                                    // $subject = "St. Cecilia's College-Cebu INC. - EVALUATION WEB BASED SYSTEM";
                                    // $full_name = "".$fname. " " .$middle_in. " " .$lname."";
                                    
                                    // $message = 'Good Day! '.$full_name.',<br>';
                                    // $message .= "Here is your account for SCC - EVALUATION WEB BASED SYSTEM<br><br>";
                                    // $message .= "===============================<br>";
                                    // $message .= "Email: ".$email."<br>";
                                    // $message .= "Password: ".$password."<br>";
                                    // $message .= "===============================<br><br>";
                                    // $message .= "You may now login through this website link:<br>";
                                    // $message .= "http://localhost/EVALUATION-WEB/login.php<br>";
                                    
                                    
                                    // // Always set content-type when sending HTML email
                                    // $headers = "";
                                    // $headers .= 'From: ' . $from . "\r\n";
                                    // $headers .= "MIME-Version: 1.0" . "\r\n";
                                    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                    
                                    // mail($to,$subject,$message,$headers);
                                    
                                    // ============================END=================================
                                    
								    echo '<script>alert("You are registered succesfully!")</script>';
									echo "<script>top.window.location = 'index.php'</script>";
								} else {
									$error = "Invalid";
									echo "Error: " . $sql_reg_teacher . "<br>" . mysqli_error($db);
									echo "Error: " . $sql_reg_student . "<br>" . mysqli_error($db);
								}
							}
							else{
								echo '<script>alert("Invalid image format! Please try again.")</script>';
								echo "<script>top.window.location = 'select_usertype.php'</script>";
							}
						}
						else{
							echo '<script>alert("Invalid image format! Please try again.")</script>';
							echo "<script>top.window.location = 'select_usertype.php'</script>";
						}
					}
            }
            else{
				echo '<script>alert("Invalid image format! Please try again.")</script>';
				echo "<script>top.window.location = 'select_usertype.php'</script>";
            }
	}
	else{
		$error = "";
	}

	// ACCESS
	if(isset($_POST['usertype'])){  
		$usertype = mysqli_real_escape_string($db,$_POST['usertype']);
	}
	else{
		header("Location: select_usertype.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign up</title>
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
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/images/scc-about2.jpg'); background-size: cover;">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

				<form name="register" class="login100-form validate-form" action="" method="POST" enctype="multipart/form-data">
				<img src="assets/images/scc-login-logo.png" alt="SCC-Logo" width="510px" height="100px" style="margin-top: -65px; margin-left: -59px; background-color: #EC0303;">
				<br><br>

				<input name="usertype2" value="<?php echo $usertype; ?>" type="hidden">
		
				<div class="wrap-input100 validate-input m-b-23" data-validate = "ID is required" >
						<span class="label-input100">School ID</span>
						<input class="input100" type="text" name="school_id" placeholder="Input your id" maxlength = "50">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "First Name is required">
						<span class="label-input100">First Name</span>
						<input class="input100" type="text" name="fname" placeholder="Type your first name" maxlength = "50">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Lastname is required" >
						<span class="label-input100">Lastname</span>
						<input class="input100" type="text" name="lname" placeholder="Type your last name" maxlength = "50">
						<span class="focus-input100"></span>
					</div>

					<?php
					if($usertype == "student"){
					?>
					<select name="class_id" class="field input" style="width: 392px; border-color: white; border-radius: 5px; background-color: white; border: 2px solid #e8e8e8; height: 40px; font-size: 14px; margin-top: -20px; padding:5px;" required>
							<option value="">Select Your Class :</option>
								<!-- Fetch the list of usertype in usertype table from database -->
								<?php
									$i=0;
									while($DB_ROW = mysqli_fetch_array($sql_classes)) {
									?>
									<option value="<?php echo $DB_ROW["id"]; ?>">
									<?php echo $DB_ROW["curriculum"]; echo " " .$DB_ROW["level"]; echo " - " .$DB_ROW["section"];?></option>
									<?php
									$i++;
									}
									?>
					</select>
					<br><br>
					<?php
					}
					?>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<br>
					
					<div class="wrap-input100 validate-input" data-validate="Profile picture is required">
					<br><span class="label-input100">Upload Profile Picture</span><br>
						<input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" style="margin-top: 10px;" required>
					</div>

					<div class="container-login100-form-btn m-t-20" style="color:red;">
						<?php echo $error?> <hr>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" style="background-color: #EC0303;">
								Register
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

	<!--<script> 
	function add(bd){ 
    //calculate month difference from current date in time  
    var month_diff = Date.now() - dob.getTime();  
    //convert the calculated difference in date format  
    var age_dt = new Date(month_diff);   
    //extract year from date      
    var year = age_dt.getUTCFullYear();
	var my_year = dob.getUTCFullYear();  
    //now calculate the age of the user  
    var age = Math.abs(year - my_year);
	
	if(age < 18)
	{
		alert("Invalid birthdate!");
	}
	} 

</script> -->  

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

</body>
</html>