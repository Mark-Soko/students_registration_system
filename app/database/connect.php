<?php
   $host='pqxt96p7ysz6rn1f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
   $user ='jqb2qn6bhob3ohyw';
   $pass ='vj4ppfms4x9n3d6s';
   $db_name ='gibge6sk3u3w8x4r';

   $conn = new MySQLi($host,$user,$pass,$db_name);

   if($conn->connect_error){
       die('Connection failed' .$conn->connect_error);
   }

?>
