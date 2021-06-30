<?php

    include "DataBase.php";
    
    $db = new DataBase();    
    
    $id = $_GET['id'];
    
    $UserFetch = "select firstname from user_info where id = '$id' ";    
    
    $UserDelete  = "delete from user_info where id = '$id' ";
    
    $result = /*Akash Nirantar Version 1.0 © 2016*/$db -> executeQuery($UserFetch);
    
    $check = $db -> fetchResult($UserDelete);
    
   header('Location:home.php');
        
?>
