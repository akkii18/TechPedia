<?php

    include "DataBase.php";
    
    $db = new DataBase();

    $Name = $_SESSION['UN'];
    
    $strSqlUserInfo = "select * from user_info where username = '$Name'; ";
    
    $row = $db -> executeQuery($strSqlUserInfo);

    $UserInfoQuery = "select * from user_info;";
    
    $admin_id = $row['id'];

    $UserInfo = $db -> fetchResult($UserInfoQuery);
    
    
?>

<html><head><title> Home </title></head>
    
    <body>
        Hello <?php echo $row['firstname'];?><br><br>
        <a href = "login.html" style = "float:right"> Logout </a><br><br>
        <a href = "settings.php?id=<?php echo $row['id']; ?>" style = "float:right"> Settings </a><br><br>
        <table border = 4 >
        <th>Id</th>
        <th>Firstname<!--Akash Nirantar Version 1.0 © 2016 --></th>
        <th>Lastname</th>
        <th>Username</th>
        <th>E-mail</th>
        <th>Edit Link</th>
        <th>Delete Link</th>
        <?php
            while($row = pg_fetch_array($UserInfo))
            {
                if($row['id'] != $admin_id)
                {
                    echo "<tr><td>",$row['id'],"</td>";
                    echo "<td>",$row['firstname'],"</td>";
                    echo "<td>",$row['lastname'],"</td>";
                    echo "<td>",$row['username'],"</td>";
                    echo "<td>",$row['email'],"</td>";
                    echo "<td>","<a href =","edit.php?id=",$row['id'],">Edit</a>","</td>";
                    echo "<td>","<a href=","delete.php?id=",$row['id'],">Delete</a>","</td>";
                }
            }
        
        
        ?>    
    </body>

</html>
