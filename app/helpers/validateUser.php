<?php
function validateUser($user){
    $errors=array();
   if(empty($user['username'])){
        array_push($errors,'Username required!');
    }
   if(empty($user['email'])){
        array_push($errors,'Email required!');
    }
    if(empty($user['password'])){
        array_push($errors,'Password required!');
    }
     if($user['Cpassword'] != $user['password']){
        array_push($errors,'Passwords did not match!');
    } 

    $existingUser= selectOne('users',['Email'=>$user['email']]);

    if(isset($existingUser)){
        array_push($errors,'Email already exists!');
    }
    return $errors;         
 }
  
 function validateLogin($user){
    $errors=array();

   if(empty($user['email'])){
        array_push($errors,'Email required!');
    }
    if(empty($user['password'])){
        array_push($errors,'Password required!');
    }
  
    return $errors;         
 } 