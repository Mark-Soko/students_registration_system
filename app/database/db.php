<?php
session_start();
require('connect.php');


function dd($values){   // to be deleted . This function is made for development purposes.
    echo '<pre>',print_r($values,true),'</pre>';
    die();
}

function executeQuery($sql,$data){
    global $conn;
    $stmt=$conn->prepare($sql);
    $values= array_values($data);    //extracting all values
    $type= str_repeat('s',count($values));
    $stmt->bind_param($type, ...$values);
    $stmt->execute();
    return $stmt;
}



/*
---------------------------------------------------------------------------------------------------------------
 For security purposes we are going to use prepared statements. That is to avoid sql injections from our database.
--------------------------------------------------------------------------------------------------------------
*/

function selectall($table,$conditions= []){
    global $conn;
    $sql= "SELECT * FROM $table";
    if(empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $record;
    }else{
        // This will return records that match the conditions
        $i=0;  
        foreach($conditions as $key =>$value){  //looping through the conditions
            if($i==0){
                $sql = $sql ." WHERE $key=?";
            }else{
                $sql = $sql ." AND $key=?";
            }
            $i++;
        }
        $stmt =executeQuery($sql,$conditions);
        $record = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $record;
    }   
}


function selectOne($table,$conditions){
    global $conn;
    $sql= "SELECT * FROM $table";
        // This will return records that match the conditions
    $i=0;  
    foreach($conditions as $key =>$value){  //looping through the conditions
        if($i==0){
            $sql = $sql ." WHERE $key=?";
        }else{
             $sql = $sql ." AND $key=?";
         }
          $i++;
    }
    
    $sql =$sql ." LIMIT 1";
    $stmt =executeQuery($sql,$conditions);
    $record = $stmt->get_result()->fetch_assoc();
    return $record;  
}

function create($table,$data){
    global $conn;
    //INSERT INTO users SET username="",Admin="";
    $sql ="INSERT INTO $table SET";
    $i=0;  
    foreach($data as $key =>$values){  //looping through the conditions
        if($i==0){
            $sql = $sql ." $key=?";
        }else{
            $sql = $sql ." , $key=?";
        }
        $i++;
    }
     $stmt =executeQuery($sql,$data);
     $id =$stmt->insert_id;
     return $id;
 }

 function update($table,$id,$data){
    global $conn;
    //UPDATE users SET username="",Admin="";
    $sql ="UPDATE $table SET";
    $i=0;  
    foreach($data as $key =>$values){  //looping through the conditions
        if($i==0){
            $sql = $sql ." $key=?";
        }else{
            $sql = $sql ." , $key=?";
        }
        $i++;
    }
    $sql = $sql ." WHERE id=?";
    $data['id']=$id;
     $stmt =executeQuery($sql,$data);
     return $stmt->affected_rows;
 }

 function delete($table,$id){
    global $conn;
    //DELETE FROM users WHERE id=?;
    $sql ="DELETE FROM $table WHERE id=?";
    $stmt =executeQuery($sql,['id'=>$id]);
    return $stmt->affected_rows;
 }

 

 























?>