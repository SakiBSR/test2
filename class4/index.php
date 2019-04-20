<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <!-- <form action="form.php" method="GET">
        <input type="text" name="firstname" class="form-cotrol"><br>
        <input type="text" name="lastname" class="form-cotrol"><br>
        <input type="text" name="phone" class="form-cotrol"><br>
        <input type="text" name="fax" class="form-cotrol"><br>
        <input type="submit" name="Submit" value="go">
    </form> -->
    <!-- <form action="form.php" method="POST">
        <input type="text" name="firstname" class="form-cotrol"><br>
        <input type="text" name="lastname" class="form-cotrol"><br>
        <input type="text" name="phone" class="form-cotrol"><br>
        <input type="text" name="fax" class="form-cotrol"><br>
        <input type="submit" name="Submit" value="go">
    </form> -->

    <!-- <?php
    if(isset($_POST['Submit'])){
        if($_POST['password'] == $_POST['password_confirm']){
            echo "Password Matched";
        }else{
            echo "Go to Hell";
        }
    }
    
    ?>
    <form action="" method="POST">
        <input type="text" name="firstname" class="form-cotrol"><br>
        <input type="text" name="lastname" class="form-cotrol"><br>
        <input type="password" name="password" class="form-cotrol"><br>
        <input type="password" name="password_confirm" class="form-cotrol"><br>
        <input type="submit" name="Submit" value="go">
    </form> -->
    <!-- <?php
    $name = "Sakib";
    $pass = "abc123";
    if(isset($_POST['Submit'])){
        if( $_POST['firstname'] == $name && $_POST['password'] == $pass){
            echo "Logged in";
        }else{
            echo "You just Go to Hell";
        }
    }
    
    ?>
    <form action="" method="POST">
        <input type="text" name="firstname" class="form-cotrol"><br>
        <input type="password" name="password" class="form-cotrol"><br>
        <input type="submit" name="Submit" value="go">
    </form> -->

    <?php
    // $user = array('Sakib','Rakib','Hasan');
    // if(isset($_POST['Submit'])){
    //    for($i = 0; $i <count($user);$i++){
    //        if($_POST['username'] == $user[$i]){
    //            echo "User name Already Exist";
    //        }
    //    }
    // }
    // $check = 0;
    // if (isset($_POST['Submit'])){
    //     foreach($user as $u){
    //         if($u == $_POST['username']){
    //             $check = 1;
    //             break;
    //         }else{
    //             $check = 0;
    //         }
    //     }

    //     if($check == 1){
    //         echo "matched";
    //     }else{
    //         echo "Not matched";
    //     }
    // }
    
    
    ?>
    <!-- <form action="" method="POST">
        <input type="text" name="username" class="form-cotrol"><br>
        <input type="submit" name="Submit" value="go">
    </form> -->

        <?php
        
        // if(isset($_POST['Submit'])){
        //     if(!empty($_POST['firstname'] && $_POST['lastname'])){
        //         echo "Everything is OKay!";
        //     }else{
        //         echo "All fields Required";
        //     }
        // }
        
        ?>


    <!-- <form action="" method="POST">
        <input type="text" name="firstname" class="form-cotrol"><br>
        <input type="text" name="lastname" class="form-cotrol"><br>
        <input type="submit" name="Submit" value="go">
    </form> -->

    <?php
    
    //     if(isset($_POST['submit'])){
    //         $username = "SakiBSR";
    //         $password = "abc123456";

    //         if(!empty($username) && !empty($password) && strlen($password) >= 6){
    //             echo "Username is $username <br>";
    //             echo "Password is $password <br>";
    //         }else{
    //             echo "Username is Required. <br>";
    //             echo "Password is Required and password should be more then 6 digit. <br>";
    //         }
    // }
    // ?>

     <!-- <form action="" method="POST">
         <input type="text" name="username" id="username" ><br>
         <input type="text" name="password" id="password"><br>
         <input type="submit" name="submit" value="go">        
    </form> -->

    <?php
        if(isset($_POST['submit'])){
            $tmp = $_FILES['image']['tmp_name'];
            $extension
            move_uploaded_file($tmp, "photos/Header.jpeg");
        }
    
    ?>


    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/jpeg,image/x-png"><br>
        <input type="submit" name="submit" value="go">
    
    </form>
</body>
</html>