<?php
include('path.php');
require_once(ROOT_PATH .'/app/database/connect.php');
include(ROOT_PATH .'/app/controllers/users.php');




$query1 = "SELECT * from application";
$stmt1 = $conn->query($query1);

?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link  rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link  rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link  rel="stylesheet" type="text/css" href="assets/css/style.css">
    
</head>
<body class>

<!-- Start header -->
<?php
      include(ROOT_PATH  ."/app/include/header.php");
    ?>
  <!-- End header -->

    <div class="container">
    	<div class="row mt-4">
        <div class="col">
        	<div class="card mt-5 ">
        		<div class="card-header bg-primary">
        			<h2 class="text-center text-white">Students Record</h2>	
        		</div>
        		<div class="card-body">
                
        			<table class="table table-stripped">
        				<tr class="bg-warning text-white">
        					<td style="width: 20%;">First Name</td>
        					<td style="width: 20%;">Last Name</td>
        					<td style="width: 20%;">Gender</td>
                            <td style="width: 20%;">level</td>
                            <td style="width: 20%;">Phone</td>
                            <td style="width: 20%;">Email</td>
                            <td style="width: 20%;" colspan="3">operations</td>
        				</tr>
                        <tr>
                            <?php 
                               while($data = $stmt1->fetch_assoc()){
                            ?>  
                               <td><?php echo $data['FirstName'] ?></td>
                               <td><?php echo $data['LastName'] ?></td>
                               <td><?php echo $data['Gender'] ?></td>
                               <td><?php echo $data['Level'] ?></td> 
                               <td><?php echo $data['Phone'] ?></td>
                               <td><?php echo $data['Email'] ?></td>
                               <td><a href="AdminProfileView.php?V_id=<?php echo $data['BirthCert']?>" class="btn btn-primary">View</a></td>
                               <td><a href="edit.php?U_id=<?php echo $data['BirthCert']?>" class="btn btn-success">Edit</a></td>
                               <td><a href="delete.php?D_id=<?php echo $data['BirthCert']?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php     
                               }              
                            ?>
        			</table>
        			
        		</div>
        	</div>
        </div>	
    	</div>
    </div><br>
    
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