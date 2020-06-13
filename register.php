<?php
	include('path.php');
	include(ROOT_PATH .'/app/controllers/users.php');
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link  rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link  rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link  rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="bg-light">

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
    					<h2 >Sign up</h2>
    				</div>
					<!--form errors-->
					<?php include(ROOT_PATH ."/app/helpers/formErrors.php");?>
					<!--form errors-->
    				<div class="card-body">
    					<form method="POST" action="register.php">
    						<input type="text" name="username" placeholder="Username" value="<?php echo $username;?>" class="form-control mb-2" >
    						<input type="email" name="email" placeholder="Email" value="<?php echo $email;?>" class="form-control mb-2" >
    						<input type="password" name="password" placeholder="Password" value="<?php echo $password;?>" class="form-control mb-2" >
							<input type="password" name="Cpassword" placeholder="Confirm password" value="<?php echo $Cpassword;?>" class="form-control mb-2">
    		
    				</div>		
    				<div class="card-footer">
    					<button type="submit" class="btn btn-success" name="btn_register">Register</button>
						<small><a class="nav-link text-ptimary text-right" href="login.php">Sign in</a> </small>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
	</div><br><br>
	
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