<?php

include('path.php');
require_once(ROOT_PATH .'/app/database/connect.php');
include(ROOT_PATH  ."/app/database/db.php"); 

if(isset($_POST['btn_submit'])){
	$email =$_SESSION['email'];
	$query1 = "SELECT * from application where Email=?";
	$stmt4 = $conn->prepare($query1);
	$stmt4->bind_param("s",$email);
	$stmt4->execute();
	$result =$stmt4->get_result();
	$row1 = $result->fetch_assoc();
	$email1= $row1['Email'];
	
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname  = $_POST['lastname'];
	$BirthCert  = $_POST['BirthCert'];
	$level = $_POST['level'];
	$gender = $_POST['gender'];
	$DOB = $_POST['DOB'];
	$grade = $_POST['grade'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$ProfileImageName = time(). '_'. $_FILES['ProfileImage']['name'];
	$target = 'assets/images/'.$ProfileImageName;
	move_uploaded_file($_FILES['ProfileImage']['tmp_name'], $target);

	if($email==$email1){
	echo "<p class='alert alert-danger'>You already applied.</p>";
}else{
$sqlApply = "INSERT INTO dirtyapplication values(?,?,?,?,?,?,?,?,?,?,?,?)";
$insertion = $conn->prepare($sqlApply);
$insertion->bind_param("ssssssssssss",$firstname ,$middlename,$lastname,$BirthCert,$level,$gender,$DOB,$grade,$email,$phone,$address,$ProfileImageName);
 $success=$insertion->execute();
if(!$success){
	header('location: ' .BASE_URL .'/home.php');
    echo " <div class = 'alert alert-success'>Application successful</div> ";
    exit();
}else{
    header('location: ' .BASE_URL .'/home.php');
    echo " <div class = 'alert alert-success'>Application successful</div> ";
    exit();
}

}


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply </title>
    <link  rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link  rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script scr="bootstrap.min.js"></script>
    <script scr="bootstrap.js"></script> 
    <style type="text/css">
    	#second,#third,#forth,#result{
    		display: none;
    	}
    </style>
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	

</head>
<body>

	<!-- Start header -->
	<?php
      include(ROOT_PATH  ."/app/include/header.php");
    ?>
	<!-- End header -->

<body>
	<div container>
		<div class="row justify-content-center">
			<div class="col-md-6 bg-light p-4 rounded mt-5">
				<h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">Hello message</h5>
				<div class="progress mb-3" style="height: 40px;">
					<div class="progress-bar bg-danger " role="progressbar" style="width: 20%;" id="ProgressBar">
					<b class="lead"id="ProgressText">Step-1</b>
				</div>
				</div>
				
				<form action="apply.php" method="POST" id="form-data"enctype="multipart/form-data">
					<div id="first">
						<h4 class="text-center bg-primary text-light p-1 rounded">Personal information</h4>
						<div class="form-group">
							<label for="firstname">First Name</label>
							<input type="text" name="firstname"  class="form-control requires"placeholder="First Name">
						</div>
						<div class="form-group">
							<label for="middlename">Middle Name</label>
							<input type="text" name="middlename"  class="form-control required"placeholder="Middle Name">
						</div>
						<div class="form-group">
							<label for="lastname">Last Name</label>
							<input type="text" name="lastname"  class="form-control required"placeholder="Last Name">
						</div>
						<div class="form-group">
							<a href="#" class="btn btn-danger" id="next-1">Next</a>
						</div>
					</div>


					<div id="second">
					  <h4 class="text-center bg-primary text-light p-1 rounded">Personal information</h4>
					  
					  <div class="form-group col-4 offset-md-4 text-center">
						<img src="assets/images/placeholder.png" onclick="triggerClick()" id="ProfileDisplay">
						<label for="ProfileImage">Choose a Profile Image</label>
						<input type="file" name="ProfileImage" onchange="DisplayImage(this)" id="ProfileImage" style="display:none;">
					 </div>

						<div class="form-group">
							<label for="level">Enrolment Level</label>
							<input type="text" name="level"  class="form-control required"placeholder="Enrolment Level">
						</div>
						<div class="form-group">
							<label for="BCN">Birth Certificate No.</label>
							<input type="number" name="BirthCert"  class="form-control required"placeholder="Birth Certificate No">
						</div>
						<div class="form-group">
							<a href="#" class="btn btn-danger" id="prev-2">Previous</a>
							<a href="#" class="btn btn-danger" id="next-2">Next</a>
						</div>
                      
					</div>


					<div id="third">
						<h4 class="text-center bg-primary text-light p-1 rounded">Personal details</h4>		
						<div class="form-group">
							<label for="gender">Gender</label>
							<input type="text" name="gender"  class="form-control required"placeholder="Gender">
						</div>
						<div class="form-group">
							<label for="dob">D.O.B</label>
							<input type="date" name="DOB"  class="form-control required"placeholder="Date of birth">
						</div>
						<div class="form-group">
							<label for="gender">Grade</label>
							<input type="text" name="grade"  class="form-control required"placeholder="Grade">
						</div>
						
						<div class="form-group">
							<a href="#" class="btn btn-danger" id="prev-3">Previous</a>
							<a href="#" class="btn btn-danger" id="next-3">Next</a>
						</div>
                    </div>


						<div id="forth">
						<h4 class="text-center bg-primary text-light p-1 rounded">Contact information</h4>
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" name="email"  class="form-control required"placeholder="E-mail">
						</div>
						<div class="form-group">
							<label for="phone">Phone number</label>
							<input type="tel" name="phone"  class="form-control required"placeholder="Parent's phone number">
						</div>
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" name="address"  class="form-control required"placeholder="Home address">
						</div>
						<div class="form-group">
							<a href="#" class="btn btn-danger" id="prev-4">Previous</a>
							<button class="btn btn-success "id="btn_submit" name="btn_submit" value="btn_submit">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
 


</body>
</html>