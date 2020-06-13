<header class="site-header">
    <nav class="navbar navbar-expand-md navbar-dark bg-steel fixed-top">
        <div class="container">
            <a class="navbar-brand mr-4" href="#">Nirmala School</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle"
                aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarToggle">
          <div class="navbar-nav mr-auto">          
                <a class="nav-item nav-link" href="home.php">Home</a>
                <a class="nav-item nav-link" href="about.php">About</a>
          </div>
            <!-- Navbar Right Side -->
        <?php if(isset($_SESSION['id'])): ?> 
          <?php if($_SESSION['admin']): ?>
            <div class="navbar-nav">
             <a class="nav-item nav-link" href="apply.php" style="color: White">Apply</a>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['username']?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="processapplications.php"style="color: blue">Dashboard</a>
                    <a class="dropdown-item" href="students.php"style="color: blue">Students</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"style="color: red">Log Out</a>
                   
                </div>
                </li>
            </div>
          <?php else: ?> 
                <a class="nav-item nav-link" href="apply.php" style="color: White">Apply</a>
                <li class="nav-item dropdown" style="color:lightgrey">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"style="color: white">
                    <?php echo $_SESSION['username']?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php"style="color: blue">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php" style="color: red">Log Out</a>
                </div>
                </li>
            </div>
       
        <?php endif;?>
        <?php else: ?> 
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="login.php">Login</a>
                <a class="nav-item nav-link" href="register.php">Sign up</a>
            </div>
        <?php endif;?>
        </div>
    </nav>
  </header>