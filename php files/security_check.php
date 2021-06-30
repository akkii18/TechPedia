<?php

    include "DataBase.php";
    
    $db = new DataBase();
    
    $user_id = $_SESSION['sec_id'];
    
    $securityQuestion = $_POST['sQues'];
    $securityAnswer = $_POST['sans'];

    $fetchSecurityQuery /*Akash Nirantar Version 1.0 © 2016*/= "select username,sques,sans,password from user_info where id = '$user_id'";
    
    $resultSet = $db -> executeQuery($fetchSecurityQuery);
    
    if($resultSet['sans'] != $securityAnswer || $resultSet['sques'] != $securityQuestion)
    {
        echo "Security Question Answers do not match";exit;
    }   
    else
    {
        echo "Your username is : ",$resultSet['username'],"<br><br>";
        echo "Your password is : ",$resultSet['password'],"<br><br>";
    }
?>

<html>

    <body>
    <a href = "login.html">Login<!--Akash Nirantar Version 1.0 © 2016 --></a>
    </body>

</html>
