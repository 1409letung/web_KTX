<?php
      session_start();
      include('admin/connect.php');
      if(isset($_POST['login'])){
        $taikhoan=$_POST['username'];
        $matkhau=md5($_POST['password']);
        $sql=mysqli_query($mysqli, "SELECT * FROM tb_taikhoan WHERE username='".$taikhoan."' AND password='".$matkhau."'");
        if(mysqli_num_rows($sql)>0){
          $row=mysqli_fetch_array($sql);
          $_SESSION['login'] = $row['username'];
          if($row['role']==0){
            $_SESSION['customer']=$row['role'];
            header('Location:customer.php');
          }else{
            $_SESSION['admin']=$row['role'];
            header('Location:admin/index.php');
          }
        }else{
          echo"<script> alert('Tài khoản hoặc mật khẩu không đúng!') </script>";
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Đăng nhập</title>
</head>
<body>
<div class="login">
  <div class="form">
    <h2>Welcome!</h2>
    <form action="" autocomplete="off" method="POST">
            <input type="text" placeholder="Tài khoản" name="username">
            <input type="password" placeholder="Mật khẩu" name="password">
            <input type="submit" value="Đăng nhập" class="submit" name="login">
    </form>
  </div>
</div>
</body>
</html>