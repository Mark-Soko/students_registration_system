<!DOCTYPE html>
<body>
    <header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg bg-primary ">
            <div class="container">
            <div class="text-left text-white">
               <!-- Header -->
			<header id="header" class="alt">
				<div class="logo text-white"><h4><b>Nirmala</b> <span>Higher Secondary School</span></h4></div>
			</header>
            </div>

            <?php if(isset($_SESSION['id'])): ?>
                        <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <?php if($_SESSION['admin']): ?>
                        <ul  class="navbar-nav  text-white"  style="list-style: none;">
                            <li><a class="nav-link active text-white" href=<?php echo BASE_URL ."/home.php"?>>Home</a></li>
                            <li><a class="nav-link text-white" href=<?php echo BASE_URL ."/about.php"?>>About us</a></li>
                            <li><a class="nav-link text-white" href=<?php echo BASE_URL ."/apply.php"?>>Assist Applicant</a></li>
                            <li><a class="nav-link text-white" href=<?php echo BASE_URL ."/students.php"?>>Students</a></li>
                            <li><a class="nav-link active text-white" href=<?php echo BASE_URL ."/processapplications.php"?>>Process Applications</a></li>
                            <li><a class="nav-link text-white"><?php echo $_SESSION['username']?></a></li>
                            <li><a class="nav-link text-white" href=<?php echo BASE_URL ."/logout.php"?>>Logout</a></li>
                        </ul>
                        </div>
                    <?php else: ?>
                                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                                    <ul  class="navbar-nav  text-white"  style="list-style: none;">
                                        <li><a class="nav-link active text-white" href=<?php echo BASE_URL ."/home.php"?>>Home</a></li>
                                        <li><a class="nav-link text-white" href=<?php echo BASE_URL ."/about.php"?>>About us</a></li>
                                        <li><a class="nav-link text-white" href=<?php echo BASE_URL ."/profile.php"?>>Profile</a></li>
                                        <li><a class="nav-link text-white" href=<?php echo BASE_URL ."/apply.php"?>>Apply now</a></li>
                                        <li><a class="nav-link text-white"><?php echo $_SESSION['username']?></a></li>
                                        <li><a class="nav-link text-white"></a></li>
                                        <li><a class="nav-link text-white" href=<?php echo BASE_URL ."/logout.php"?>>Logout</a></li>
                                    </ul>
                                </div>
                    <?php endif;?>
            <?php else: ?>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav  text-white" style="list-style: none;">
                        <li><a class="nav-link active text-white" href=<?php echo BASE_URL ."/home.php"?>>Home</a></li>
                        <li><a class="nav-link text-white" href=<?php echo BASE_URL ."/about.php"?>>About us</a></li>
                        <li><a class="nav-link text-white" href=<?php echo BASE_URL ."/login.php"?>>Login</a></li>
                        <li><a class="nav-link text-white" href=<?php echo BASE_URL ."/register.php"?>>Register</a></li>
                    </ul>
                    
                </div>
            <?php endif; ?>
        </nav>
    </header>

</body>
</html>
