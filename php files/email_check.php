<?php
    
    include "DataBase.php";
    
    $db = /*Akash Nirantar Version 1.0 © 2016*/new DataBase();
    
    $email = $_POST['email'];
    
    $getIdQuery = "select id from user_info where email = '$email'";
    
    $getId = $db -> executeQuery($getIdQuery);
    
    if($getId)
    {
        $id = $getId['id'];
        $_SESSION['sec_id'] = $id;
    }   
    else
    {    
        echo "Email not found";
        exit;
    }
?>
<html><head><title>Forgot Password!</title></head>

    <body>
        <form action = "security_check.php" method = "POST">
        <center>Select Security Question 
         <select name = "sQues"><!--Akash Nirantar Version 1.0 © 2016 -->
                    <option> What is your nick name?</option>
                    <option> Where you were born?</option>
                    <option>Whhere do you belong?</option>
                </select><br><br>
        Security Answer : <input type = "text" name = "sans"><br><br> 
        <input type = "submit" value = "Submit">
        </center>
        </form>
    </body>

</html>
