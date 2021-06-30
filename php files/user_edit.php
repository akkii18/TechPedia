
<?php

    include "DataBase.php";
    
    $id = $_GET['id'];
    
    
    $db = new DataBase();
 
    $_SESSION['id'] = $id;
    
    $UserInfoQuery = "select * from user_info where id = '$id' ";    
    
    $resultSet = $db -> executeQuery($UserInfoQuery);
    
?>

<html><head><title>Edit</title></head>

    <body>
        <form action = "update.php" method = "POST">
            Firstname : <input type = "text" value = "<?php echo $resultSet['firstname']?>" name  = "firstname"><br><br>
            LastName : <input type = "text" value = "<?php echo $resultSet['lastname']?>" name  = "lastname"><br><br>
            Email : <input type = "email" value = "<?php echo $resultSet['email']?>" name  = "email"><br><br>
            Contact : <input type = "number" name = "<?php echo $resultSet['contact']?>"><br><br>
            Username : <input type = "text" value = "<?php echo $resultSet['username']?>" name  = "username"><br><br>
             <!--Akash Nirantar Version 1.0 © 2016 -->
            Address : <textarea name = "address"> <?php echo $resultSet['address']?></textarea><br><br>
            Security Questions : 
                <select name = "sQues">
                    <option> What is your nick name?</option>
                    <option> What is your first school's name?</option>
                    <option> Where you were born?</option>
                </select><br><br>
            Security Answer : <input type = "text" value = "<?php echo $resultSet['sans']?>" name  = "sAns"><br><br>
            <input type = "submit" value = "Update" >
        </form>
    </body>
</html>
