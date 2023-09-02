<?php

 include ('../configs/constants.php')

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

    <div class="login">
        <h1 class="text-center">Login</h1><br><br>

        <?php 
          if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            unset($_SESSION['login']);
          }

          if(isset($_SESSION['no-login-message'])){
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
          }

        ?>
        <br><br>

        <form action="" method="post" class="text-center">
            <label for="username">Username: </label>
            <input type="text" name="username" placeholder="Enter username"><br><br>
            <label for="username">Password: </label>
            <input type="password" name="password" placeholder="Enter password"><br><br>

            <input type="submit" name="submit" value="login" class="btn-primary">
            
        </form>
        <br><br>

        <p class="text-center">Created By - Durjoy</p>
    </div>
    
</body>
</html>


<?php
 
 if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'";

    $res = mysqli_query($conn,$sql);

    $count = mysqli_num_rows($res);

    if($count == 1){

        $_SESSION['login'] = "<div class='success text-center'>Login Successful.</div>";
        $_SESSION['user'] = $username;
        header('location:'.SITEURL.'admin/');

    }else{

        $_SESSION['login'] = "<div class='error text-center'>Login Failed! Please Try again.</div>";
        header('location:'.SITEURL.'admin/login.php');
    
    }


 }

?>