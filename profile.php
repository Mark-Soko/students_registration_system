<?php 
   include('path.php');
   require_once(ROOT_PATH .'/app/database/connect.php');
   include(ROOT_PATH .'/app/controllers/users.php');
  
    /* Validate student
    $Admission= '0003'. '/'.'2020';
    $BCN= $data['BirthCertificateNo'];
    $Email= $data['Email'];
    if(isset($_POST['btn_validate'])){
      $sql="INSERT INTO verified_students(Admission,BirthcertNo,Email) VALUES('$Admission','$BCN','$Email')";
      $result = mysqli_query($db->connection,$sql);
    }

*/
 //profile
 $email =$_SESSION['email'];

 $query3 = "SELECT * from application where Email = ?";
 $stmt4 = $conn->prepare($query3);
 $stmt4->bind_param("s",$email);
 $stmt4->execute();
 $result =$stmt4->get_result();
 $data = $result->fetch_assoc();
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile</title>
    <link  rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link  rel="stylesheet" type="text/css" href="assets/css/style.css">
    
</head>
<body class="bg-light">

	<!-- Start header -->
	<?php
      include("app/include/header.php");
    ?>
	<!-- End header -->
          

<div class="container">    
    <div class="row"> 
       <div class="col-md-4 col-xs-6">
     </div>
  </div>
</div>


    <?php if($_SESSION['email']==$data['Email']): ?>
      <div class="container">
    	<div class="row mt-5">
    		<div class="col-4 offset-md-4">
              <div class=" text-center">
                      <img src="assets/images/<?php echo $data['Image'];?>" onclick="triggerClick()" id="ProfileDisplay">
                      <label for="ProfileImage">Profile Image</label>
                      <input type="file" name="ProfileImage" onchange="DisplayImage(this)" id="ProfileImage" style="display:none;">
      
              </div>
              </div><br>
              <div class="col-8 offset-md-2">
              <ul class="list-stripped">                
                 <li class="list-group-item active text-white">My profile</li>
                 <li class="list-group-item"><?php echo "Registration No.         J17/MNU/5917/2018"?></li>
                 <li class="list-group-item">Name:  <?php echo $data['FirstName'];?>  <?php echo'  '?>       <?php echo $data['MiddleName'];?>  <?php echo"\t"?>      <?php echo $data['LastName'];?>  </li>
                 <li class="list-group-item">Level:  <?php echo $data['Level'];?> </li>
                 <li class="list-group-item">Birth Certificate No:  <?php echo $data['BirthCert'];?></li>
                 <li class="list-group-item">DOB: <?php echo $data['DOB'];?></li>
                 <li class="list-group-item">Gender:  <?php echo $data['Gender'];?></li>
                 <li class="list-group-item">Previous Grade:  <?php echo $data['Grade'];?></li>
                 <li class="list-group-item">Email:  <?php echo $data['Email'];?></li>
                 <li class="list-group-item">Phone:+<?php echo $data['Phone'];?></li>
                 <li class="list-group-item">HomeAddress: <?php echo $data['Address'];?></li>
                 <li class="list-group-item bg-warning">Congratulation you are one of us now</li>          
               </ul>
               </div>
        </div>
      </div>	
    	</div>
    </div>
                        
          <?php else: ?>
            <div class="container">
      	<div class="row mt-5">
    		<div class="col-4 offset-md-4">
              
              </div><br>
              <div class="col-8 offset-md-2">
              <h4 class="alert alert-danger">Waiting for approval</h4>
              <li class="list-group-item active text-white">Your profile appears here on application and approval.</li>
                 <li class="list-group-item">First make your application.</li>
                 <li class="list-group-item">Then wait for feedback from us. </li>
                 <li class="list-group-item">We enrol students as per their academic performance.</li>
                 <li class="list-group-item">On approval you will have your profile set.</li>
                 <li class="list-group-item">For any queries reach us via our hotline contacts</li>
                 <li class="list-group-item">Reporting dates will be communicated via our website</li>
                 <li class="list-group-item bg-warning">Note that without submition of your original supportive documents on reporting day,you will be dismissed!</li>          
               </ul>
               </div>
        </div>
        <?php endif;?>
      </div>	
    	</div>
    </div>
<!-- Footer -->
<?php
      include(ROOT_PATH  ."/app/include/footer.php");
    ?>
   
</body>
</html>