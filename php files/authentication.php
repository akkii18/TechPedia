<?php

    include "DataBase.php";
    
    $username = $_POST['UN'];
    $password = $_POST['PWD'];

    $db = new DataBase();
    
    $authenticateQuery = "select * from user_info where username = '$username' and password = '$password'";
    
   $resultSet = $db -> executeQuery(/*Akash Nirantar Version 1.0 © 2016*/$authenticateQuery);
    
    if($resultSet)
    {
        $_SESSION['UN'] = $resultSet['username'];
        header('Location:home.php');
    }
    else
        echo "User do not exist";
    
?>
