<?php
   include('../../connect.php');
   $tentaikhoan = $_POST['tentaikhoan'];
   $matkhau = $_POST['matkhau'];
   $role = $_POST['role'];
   if(isset($_POST['taotaikhoan']))
   {
      $sql_them = "INSERT INTO tb_taikhoan(username, password,role) VALUES('".$tentaikhoan."','".$matkhau."','".$role."')";
      mysqli_query($mysqli, $sql_them);
      header('Location:../../index.php?action=taikhoan&query=them');
   }
   elseif(isset($_POST['suataikhoan']))
   {

   }
   else
   {
      $id = $_GET['idtk'];
      $sql_xoa = "DELETE FROM tb_taikhoan WHERE id_tk = '".$id."'";
      mysqli_query($mysqli, $sql_xoa);
      header('Location:../../index.php?action=taikhoan&query=them');
   }
?>