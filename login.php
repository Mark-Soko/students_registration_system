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
	<link  rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link  rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body class="bg-light">

	<!-- Start header -->
	<?php
      include(ROOT_PATH  ."/app/include/header.php");
    ?>
	<!-- End header -->
    <div class="container">
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
                        <small><a class="nav-link text-ptimary text-right" href=<?php echo BASE_URL ."/register.php"?>>Register now</a> </small>
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
</body>

</html>