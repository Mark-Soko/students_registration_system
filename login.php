<?php
include('path.php');
require_once(ROOT_PATH .'/app/database/connect.php');
include(ROOT_PATH .'/app/controllers/users.php');	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	  <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <link rel="stylesheet" type="text/css" href="assets\css\main.css">
   <link  rel="stylesheet" type="text/css" href="assets/css/style.css">
	

</head>
<body >


	<!-- Start header -->
	<?php
      include(ROOT_PATH  ."/app/include/header.php");
    ?>
	<!-- End header -->

    <div class="container mt-5">
    	<div class="row">
    		<div class="col-lg-6 m-auto">
    			<div class="card mt-5">
    				<div class="card-header text-center bg-primary text-white">
    					<h2>Login</h2>
    				</div>

					<!--form errors-->
					<?php include(ROOT_PATH ."/app/helpers/formErrors.php");?>
					<!--form errors-->	

    				<div class="card-body">
    					<form method="POST" action="login.php">
    						<input type="email" name="email" placeholder="Email"  value="<?php echo $email;?>" class="form-control mb-2 required">
    						<input type="password" name="password" placeholder="Password"  value="<?php echo $password ;?>" class="form-control mb-2 required">
    				</div>		
    				<div class="card-footer">
    					<button class="btn btn-success" name="btn_login">Login</button>
                        <small><a class="nav-link text-ptimary text-right" href="register.php">Register now</a> </small>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div><br><br><br><br><br><br>


	<!-- Footer -->
	<?php
      include(ROOT_PATH  ."/app/include/footer.php");
	?>
	

	 <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>


  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.scrollex.min.js"></script>
  <script src="assets/js/skel.min.js"></script>
  <script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>