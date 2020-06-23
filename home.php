<?php
include('path.php');
require_once(ROOT_PATH .'/app/database/connect.php');
include(ROOT_PATH .'/app/controllers/users.php');	
?>
<!DOCTYPE html>
<html>

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="assets\css\main.css">
  <link  rel="stylesheet" type="text/css" href="assets/css/style.css">
  <title>Nirmala -Home</title>


</head>

<body>

	<!-- Start header -->
	<?php
      include(ROOT_PATH  ."/app/include/header.php");
    ?>
  <!-- End header -->
  
  <!-- Banner -->
  <section class="banner full">
    <article>
      <img src="images\slider01.jpg"  />
      <div class="inner">
        <header>
          <p>What we priotise as a school</p>
          <h4>Self displine</h4>
        </header>
      </div>
    </article>
    <article>
      <img src="images\slider02.png" alt="" />
      <div class="inner">
        <header>
          <p>What we priotise as a school</p>
          <h4> Academic Success</h4>
        </header>
      </div>
    </article>
    <article>
      <img src="images\slider03.jpg" alt="" />
      <div class="inner">
        <header>
          <p>What we priotise as a school</p>
          <h4> Co-curiculum Activities </h4>
        </header>
      </div>
    </article>
    <article>
      <img src="images\slider04.jpg" />
      <div class="inner">
        <header>
          <p>What we priotise as a school</p>
          <h4>Transformational Education</h4>
        </header>
      </div>
    </article>
  </section>



<!--section 2 -->
   <section class="container-fluid p-0">
   <div class="cover">
       <div class="content text-center">
           <h1>Student Enrolment progress.</h1>
           <p>
               We have vacancy position for the following number of students.
           </p>
       </div>
   </div>
   <div class="container-fluid text-center">
       <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
           <div class="rect">
               <h1>250</h1>
               <h4>Form 1</h4>
           </div>
           <div class="rect">
               <h1>74</h1>
               <h4>Form 2</h4>
           </div>
           <div class="rect">
               <h1>62</h1>
               <h4>Form 3</h4>
           </div>
           <div class="rect">
               <h1>23</h1>
               <h4>Form 4</h4>
           </div>
       </div>
   </div>


   <div class="modal fade" role="dialog" id="loginmodal">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h3 class="modal-title">Login</h3>
           <button type="button"class="close" data-dismis="modal">&times;</button>
          </div>
          <div class="modal-body">
          <form method="POST" action="login.php">
            <div class="form-group">
    						<input type="email" name="email" placeholder="Email"  value="<?php echo $email;?>" class="form-control mb-2 required">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password"  value="<?php echo $password ;?>" class="form-control mb-2 required">
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success" name="btn_login">Login</button>
          </div>
       </div>
     </div>
   </div>









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