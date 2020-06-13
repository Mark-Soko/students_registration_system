<?php 
include('path.php');
require_once(ROOT_PATH .'/app/database/connect.php');
include(ROOT_PATH .'/app/controllers/users.php');	


  // sql to delete a record
 
$id=$_GET['D_id'];
$sql= "DELETE FROM  application WHERE BirthCert='$id'";
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('location: students.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>