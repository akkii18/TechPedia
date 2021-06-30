<?php

    include "DataBase.php";
    
    $db = new DataBase()/*Akash Nirantar Version 1.0 © 2016*/;
    
    $id = $_SESSION['id'];
    
    $updatedFirstname = $_POST['firstname'];
    $updatedLastname = $_POST['lastname'];
    $updatedEmail = $_POST['email'];
    $updatedUsername = $_POST['username'];
    $updatedAddress = $_POST['address'];
    $updatedSques = $_POST['sQues'];
    $updatedSans = $_POST['sAns'];
    
    $updateQuery = "update user_info set firstname = '$updatedFirstname',lastname = '$updatedLastname',email = '$updatedEmail',username = '$updatedUsername',address = '$updatedAddress',sques = '$updatedSques',sans = '$updatedSans' where id = '$id' ";
    
    
    $db -> fetchResult($updateQuery);
        
    header('Location:home.php');

?>
