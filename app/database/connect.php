<?php
   $host='localhost';
   $user ='root';
   $pass ='';
   $db_name ='test2';

   $conn = new MySQLi($host,$user,$pass,$db_name);

   if($conn->connect_error){
       die('Connection failed' .$conn->connect_error);
   }

?>