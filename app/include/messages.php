<?php if(isset($_SESSION['message'])): ?>
      <div class ="alert alert-success text center">
        <h6> <?php echo $_SESSION['message']?></h6>
      </div>
   <?php endif; ?>
  
  <!--Destroy messages-->
  <?php 
   unset($_SESSION['message']);
  ?>