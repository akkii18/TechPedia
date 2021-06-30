<?php

    include "DataBase.php";

    $firstname = $_POST['user_firstname'];
    $lastname = $_POST['user_lastname'];
    $email = $_POST['user_email'];
    $contact = $_POST['user_contact'];
    $address = $_POST['user_address'];
    $gender = $_POST['user_gender'];
    $username = $_POST['user_name'];
    $password = $_POST['user_password'];
    $cpassword = $_POST['c_user_password'];
    $sQues = $_POST['sQues'];
    $sAns = $_POST['sAns'];
    
    
    if($password == $cpassword)
    {
        
        $db = new DataBase();
        
        if($db)
        {
            $id = $db -> getNextPrimaryKey("user_info");
            
            if(!$id)
                $id = 1;

            $sqlInsertUser = "insert into user_info values
                              ($id,'$firstname','$lastname','$email','$contact','$address','$gender','$password','$sQues','$sAns','$username')";
           
            $result = $db->fetchResult($sqlInsertUser);//function from DataBase class.
            
            if($result/*Akash Nirantar Version 1.0 © 2016*/)
            {
                echo "User created successfully";
                header("Location:login.html");
            }
            else
                echo "Error creating user.";exit;
        
        }
        else
            echo "Error in connection";exit;
    }
    else
        echo "Password and confirmed password doesn't match";exit;
    

?>
