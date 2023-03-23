<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Thông tin cá nhân</title>
</head>
<?php
     session_start();
     if(!isset($_SESSION['login'])){
         header('Location:login.php');
     }else{
         if(!isset($_SESSION['customer'])){
             header('Location:login.php');
         }
     }
?>
<body>
<!-- <h1>Customer</h1>
<a href="logout.php?logout=0">logout</a> -->
<?php
    include("admin/connect.php");
?>
<!-- --------------------------------------Header------------------------------------- -->
<!-- <header>
<div class="logo">
        <img style="width: 150px; height:90px" src="img/lg.png">
    </div>
    <div class="menu">
        <li><a href="index.php">TRANG CHỦ</a></li>
        <li><a href="baidang.php?quanly=fullbaidang">BÀI ĐĂNG</a></li>
        <li><a href="baidang.php?quanly=thongbao">THÔNG BÁO</a></li>
    </div>
    <div class="others">
        <li><input placeholder="Tìm kiếm ..." type="text"> <i class="fas fa-search"></i> </li>
        <li><a class="fa fa-user" href="login.php"></a></li>
    </div>
</header> -->
<!-- -----------------------------------Thông tin cá nhân----------------------------------------- -->
 <h1>Customer</h1>
<a href="logout.php">logout</a>
<!------------------------------------------Footer-------------------------------------------------->
<div class="footer-top">
    <li><a href=""></a>Liên hệ</li>
    <li><a href=""></a>Tuyển dụng</li>
    <li><a href=""></a>Giới thiệu</li>
    <li>
        <a href="" class="fab fa-facebook-f"></a>
        <a href="" class="fab fa-twitter"></a>
        <a href="" class="fab fa-youtube"></a>
    </li>
</div>
<div class="footer-center">
<p> 
    Công ty TNHHTN Group 5 <br>
    Địa chỉ: 221 Nguyễn Văn Lượng, Phường 17, Quận Gò Vấp, Thành phố Hồ Chí Minh - 0345587708 <br>
    Tư vấn online: <b>0246 662 3434</b> 
</p>
</div>
<div class="footer-bottom">
    @Copyright by Gunt1409
</div>
</body>
</html>

