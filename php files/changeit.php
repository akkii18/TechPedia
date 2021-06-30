<?php
    
    include "DataBase.php";
    
    $oldPassword = $_POST['old'];//retriving data from change_password.php
    $password = $_POST['password'];
    $confirmPassword = $_POST['c_password'];
    
    $db = new DataBase();
    
    $id = $_SESSION['current_id'];
    
    $getPasswordQuery = "select password from user_info where id = '$id'";    
    
    $resultSet = $db -> executeQuery($getPasswordQuery);
    
    if($oldPassword == $resultSet['password'])
    {
        if($password == $confirmPassword)
        {
            $updatePassword = "update user_info set password = '$password' where id = '$id';" ;
            
            if($db -> fetchResult($updatePassword))
            {
                echo "Password changed succesfully changed.";
                header("Location:home.php");
            }
            else
                echo "Problem changing password";
        }
        else
            echo "Password and confirm password do not match.";
    }
    else
        echo "Old password not correct.";
?>
