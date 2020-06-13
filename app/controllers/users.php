<?php
include(ROOT_PATH .'/app/database/db.php');
include(ROOT_PATH  ."/app/helpers/validateUser.php"); 


$username='';
$email='';
$password='';
$Cpassword='';

$table ='users';

$errors=array();

function loginUser($user){
    $_SESSION['id'] = $user['Id'];
    $_SESSION['username'] = $user['Username'];
    $_SESSION['email'] = $user['Email'];
    $_SESSION['admin'] = $user['Admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'alert alert-success';
    
    if($_SESSION['admin']){
        header('location: ' .BASE_URL .'/processapplications.php');
    }else{
         header('location: '.BASE_URL .'/home.php');
    }

    exit();
}


if(isset($_POST['btn_register'])){
    
    $errors=validateUser($_POST);

    if(count($errors)==0){
        unset($_POST['btn_register'],$_POST['Cpassword']);
        $_POST['Admin']=0;
        $_POST['password']= password_hash($_POST['password'],PASSWORD_DEFAULT);
        $user_id=create($table,$_POST);
        $user= SelectOne($table,['id'=>$user_id]);
         //log user in
         loginUser($user);

    }else{
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $Cpassword=$_POST['Cpassword'];
    }     
}


if(isset($_POST['btn_login'])){
    $errors= validateLogin($_POST);

    if(count($errors)===0){
        $user=selectOne($table,['Email'=>$_POST['email']]);

        if($user && password_verify($_POST['password'],$user['Password'])){
            loginUser($user);
        }else{
            array_push($errors,'Wrong credentials');
            $email=$_POST['email'];
            $password=$_POST['password'];
        }


    }else{
        $email=$_POST['email'];
        $password=$_POST['password'];
    }
}


?>