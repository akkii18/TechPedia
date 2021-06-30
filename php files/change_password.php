<?php
    
    include "DataBase.php";

    $db = new DataBase();
    $id = $_GET['id'];
    
    $_SESSION['current_id'] = $id;//creating session variable 'id'
    
    
?>

<html>
    <head><title>Change Password</title></head>
    <body>
        <form action = "changeit.php" method = "POST">
            Old Password : <input type = "password" name = "old"><br><br>
            New Password : <input type = "password" name = "password"><br><br>
            Confirm new Password : <input type = "password" name = "c_password"><br><br>
            <input type = "submit" value = "Change">
        </form>
    </body>
</html>
