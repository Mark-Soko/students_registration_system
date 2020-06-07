<?php

include('path.php');
include(ROOT_PATH .'/app/database/connect.php');
include(ROOT_PATH  ."/app/database/db.php"); 



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link  rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link  rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
			#footer {
  position: relative;
  min-height: 150px;
  padding: 4rem 0 2rem 0 ;
		background: #000;
		text-align: center;
		bottom: 0;
}

#copyright{
	color: #bbb;
  font-size: 0.9rem;
  margin: 0 0 2rem 0;
  padding: 0;
  text-align: center;
}


	</style>
</head>
<body  >
<?php

include(ROOT_PATH  ."/app/include/header.php");
 ?>
 <div style="font-size: 30px; "class = "bg-info display-4 ml-auto text-light p-2"><span style= " margin-left: 500px;">Current Applications</span></div>
 <div class = "container">
   <div class = "row">
     
       <?php
       $applicationQuery = "select * from dirtyapplication";
       $stmt = $conn->query($applicationQuery);
   
     

        

       ?>
       <div class = "col-sm-12">
       <?php  if($stmt->num_rows >0)
       { ?>
         <table class = "table table-hover mt-2 data  table-responsive" style = "">
      

         <thead >
         <th>Birth Cerificate No.</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Mobile No</th>
         <th>Home Address</th>
         <th>Class Applied</th>
         <th>Previous Marks</th>
         <th>Action</th>
         </thead>
         <tbody >
         <?php 
          
          while($row = $stmt->fetch_assoc()){
         ?>
         <tr id = "stud">
         <td><?php echo $row['BirthCert']?></td>
         <td><?php echo $row['FirstName']?></td>
         <td><?php echo $row['LastName']?></td>
         <td><?php echo $row['Phone']?></td>
         <td><?php echo $row['Address']."-". $row['Email'].", "?></td>
         <td><?php echo $row['Level']?></td>
         <td><?php echo $row['Grade']?></td>
          <form action = "processapplications.php" method = "POST">
         <input type = "hidden" value = <?php echo $row['BirthCert']?> name = "reference">
         <td><button id="success" class = "btn btn-success" name = "Approval" onclick="()=>alert('button clicked')">Approve</button></td>
         <td><button id = "fail" class = "btn btn-danger" name = "DisApprov">Disapprove</button></td>
         </form>
        
         
         
         </tr>
        <?php }
        //closed Applications
       }
       else{
         echo '<div class="alert alert-danger"> No current applications </div>';

        ?>

        <?Php
       }
        $stmt->close();

        ?>
         </tbody>
         </table>

         </tbody>
         </table>

         <!-- Now fetching the data from the approved-->
         <?php
         $squery = "SELECT * from approved";
         $stmt1 = $conn->query($squery);
            
         ?>
         <div style = "font-size: 34px; " class = "text-light bg-info display-4"><span style = "margin-left: 400px;">Approved Applications</div>
         <?php     if($stmt1->num_rows > 0)
       { ?>
         <table class = "table table-hover mt-2 data top-margin data ">
           
         <thead>
         <th>Application No.</th>
         

         <th>Class Applied</th>
        
         <th>Date</th>
         </thead>
         <tbody >
         <?php 
        
          while($row2 = $stmt1->fetch_assoc()){
         ?>
         <tr>
         <td><?php echo $row2['Application_ID']?></td>
         
         <td><?php echo $row2['ClassA']?></td>
         <td><?php echo $row2['DateApplied']?></td>
        
          
        
         
         
         </tr>
        <?php }
         }
        else{
          echo '<div class="alert alert-danger"> No approved applications </div>';
        }
      
        $stmt1->close();

        ?>
         </tbody>
         </table>

         
         <!-- Now fetching the data from the disapproved-->
         <?php
         $dquery = "SELECT * from disapproved";
         $stmt2 = $conn->query($dquery);
            
         ?>

<div style = "font-size: 34px; " class = "text-light bg-info display-4"><span style = "margin-left: 400px;">Disapproved applications</div>
<?php     if($stmt2->num_rows >0)
       {?>
<table class = "table table-hover mt-2 data top-margin data  ">
<thead>
<th>Application No.</th>


<th>Class Applied</th>

<th>Date</th>
</thead>
<tbody >
<?php 

 while($row3 = $stmt2->fetch_assoc()){
?>
<tr>
<td><?php echo $row3['Application_ID']?></td>

<td><?php echo $row3['ClassApplied']?></td>
<td><?php echo $row3['Date_Disapproved']?></td>

 



</tr>
<?php }
}
else{
  echo '<div class="alert alert-danger"> No disapproved applications </div>';
}

$stmt2->close();

?>
</tbody>
</table>
       </div>
   </div>
   
 </div>
 <!-- Footer -->
 <?php
      include(ROOT_PATH  ."/app/include/footer.php");
    ?>

</body>
</html>

<!--This section approves  and disapproves and is taken to the respective table -->
<?php
   if (isset($_POST['Approval']) || isset($_POST['DisApprov'])){

      $name = $_POST['reference'];
      
      $query1 = "SELECT * from dirtyapplication where BirthCert = ?";
      $stmt4 = $conn->prepare($query1);
      $stmt4->bind_param("s",$name);
      $stmt4->execute();
      $result =$stmt4->get_result();
      $row1 = $result->fetch_assoc();
      //Now that we have all the data, lets insert it into approval table
      if(isset($_POST['Approval'])){
        $approved = "INSERT into approved (Application_ID,ClassA)values(?,?)";
        $stmt5 = $conn->prepare($approved);
        $stmt5->bind_param("ss", $row1['BirthCert'],$row1['Level']);
      $updated =  $stmt5->execute();  
          ?>
          <?php
        ?>  
        <?php
      }
      else if(isset($_POST['DisApprov'])){
           
        $approved = "INSERT into disapproved (Application_ID,ClassApplied)values(?,?)";
        $stmt6 = $conn->prepare($approved);
        $stmt6->bind_param("ss", $row1['BirthCert'],$row1['Level']);
          $stmt6->execute();
         if($stmt6->close()){
         echo 'success'; // header("Location: processapplications.php");
         }
          
      }
      //Inserting into Completed Applications
      $sqlComplete = "insert into application values (?,?,?,?,?,?,?,?,?,?,?,?)";
      $sqlstate = $conn->prepare($sqlComplete);
      $sqlstate->bind_param("ssssssssssss",$row1['FirstName'],$row1['MiddleName'],$row1['LastName'],$row1['BirthCert'],
      $row1['Level'],$row1['Gender'],$row1['DOB'],$row1['Grade'],$row1['Email'],$row1['Phone'],
      $row1['Address'],$row1['Image']);
      $sqlstate->execute();
      echo $row1['Grade'];
   //deleting from processed applications
      $sql = "delete from dirtyapplication where BirthCert = ?";
      $statement = $conn->prepare($sql);
      $statement->bind_param("s", $name);
      $statement->execute();
      $state = $statement->close();
      if($state){
        header("Location: processapplications.php");
        exit();
      }
       
   }

  
?>
