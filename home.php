<?php
include('path.php');
require_once(ROOT_PATH .'/app/database/connect.php');
include(ROOT_PATH .'/app/controllers/users.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link  rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<style>
		 ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
		 }
		 
		</style>
       
	</head>
	<body>
    <?php
      include(ROOT_PATH  ."/app/include/header.php");
    ?>
  
		
		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="assets/images/banner.jpg" alt="" />
					<div class="inner">
						<header>
							<p>What we priotise as a school</p>
							<h4> Academic Success</h4>
						</header>
					</div>
				</article>
				<article>
                <img src="assets/images/banner.jpg" alt="" />
					<div class="inner">
						<header>
                            <p>What we priotise as a school</p>
							<h4> Co-curiculum Activities </h4>
						</header>
					</div>
				</article>
				<article>
                <img src="assets/images/school1.jpg" alt="" />
					<div class="inner">
						<header>
                            <p>What we priotise as a school</p>
							<h4>Transformational Education</h4>
						</header>
					</div>
				</article>
				<article>
                <img src="assets/images/school2.jpg" alt="" />
					<div class="inner">
						<header>
                            <p>What we priotise as a school</p> 
							<h4>Social-culture cultivation</h4>
						</header>
					</div>
				</article>
				<article>
                <img src="assets/images/school3.jpg" alt="" />
					<div class="inner">
						<header>
                            <p>What we priotise as a school</p>
							<h4>Self displine</h4>
						</header>
					</div>
				</article>
			</section>

	<!--contact us-->
	<div class="contact  text-center text-white"style="background-color: #333333;">
		<h5>Let us know how best we can serve you.</h5>
		<ul class="">
			<li>+222 000 798 </li>
			<li>nirmala@gmail.com </li>
			<li>P.O.Box 356 -00300.</li>
			<li>Nairobi,Kenya.</li>
		</ul>
	</div>		
			
	<!-- Footer -->
	<?php
      include(ROOT_PATH  ."/app/include/footer.php");
    ?>
  

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>