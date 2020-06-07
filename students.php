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
                               <td><a href="profile.php?V_id=<?php echo $data['BirthCert']?>" class="btn btn-primary">View</a></td>
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
</body>
</html>