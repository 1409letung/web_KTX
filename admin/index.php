<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleadmin.css">
    <title>Admin</title>
</head>
<?php
     session_start();
     if(!isset($_SESSION['login'])){
         header('Location:../login.php');
     }else{
         if(!isset($_SESSION['admin'])){
             header('Location:../login.php');
         }
     }
?>
<body>
    <h1 class="title_admin">Welcome to Admin KTX</h1>
    <div class="wrapper">
     <?php
         include("connect.php");
         include("pageadmin/header.php");
         include("pageadmin/menu.php");
         include("pageadmin/main.php");
     ?>
     </div>
</body>
</html>