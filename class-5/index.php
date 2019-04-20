<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<?php
        if(isset($_POST['Submit'])){
            if(strlen($_POST['username']) < 5 || (strlen($_POST['username']) > 10)){
                echo "<p style='color:red;'>User name must be between 5 to 10 Caracter</p>";
            }
        }
    
    ?>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="User Name"><br>
        <input type="submit" name="Submit" value="submit">
    </form>

    
</body>
</html>
