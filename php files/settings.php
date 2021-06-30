<?php

    session_start()/*Akash Nirantar Version 1.0 © 2016*/;
    
    $id = $_GET['id'];

?>

<html><head><title>Settings</title></head>
    <body>

        <a href = "edit.php?id=<?php echo $id; ?>">Edit Profile</a><br><br>
        <a href = "change_password.php?id=<?php echo $id; ?>">Change Password</a>

    </body>
</html>
