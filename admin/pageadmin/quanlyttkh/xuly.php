<?php
   include('../../connect.php');
   $hoten = $_POST['hoten'];
   $gioitinh = $_POST['gioitinh'];
   $ngaysinh = $_POST['ngaysinh'];
   $cmnd = $_POST['cmnd'];
   $sdt = $_POST['sdt'];
   $nghenghiep = $_POST['nghenghiep'];
   $diachithuongtru = $_POST['diachithuongtru'];
   $taikhoan = $_POST['taikhoan'];
   $matkhau = $_POST['matkhau'];
   if(isset($_POST['themttkh']))
   {
      $sql_them_ttkh = "INSERT INTO tb_khachhang(hoten,gioitinh,ngaysinh,cmnd,sdt,nghenghiep,diachithuongtru,taikhoan,matkhau) VALUES('".$hoten."','".$gioitinh."', '".$ngaysinh."', '".$cmnd."', '".$sdt."','".$nghenghiep."','".$diachithuongtru."','".$taikhoan."','".$matkhau."')";
      mysqli_query($mysqli,$sql_them_ttkh);
      header('Location:../../index.php?action=khachhang&query=them');
   }
   elseif(isset($_POST['suattkh']))
   {
      $sql_update = "UPDATE tb_khachhang SET hoten='".$hoten."',gioitinh='".$gioitinh."',ngaysinh='".$ngaysinh."',cmnd='".$cmnd."',sdt='".$sdt."',nghenghiep='".$nghenghiep."',diachithuongtru='".$diachithuongtru."',taikhoan='".$taikhoan."',matkhau='".$matkhau."' WHERE id_khachhang='$_GET[idkhachhang]' ";
      mysqli_query($mysqli,$sql_update);
      header('Location:../../index.php?action=khachhang&query=them');
   }
   else
   {
      $id = $_GET['idkhachhang'];
      $sql_xoa_ttkh = "DELETE FROM tb_khachhang WHERE id_khachhang = '".$id."'";
      mysqli_query($mysqli,$sql_xoa_ttkh);
      //header('Location:../../index.php?action=khachhang&query=them');
      echo "<script> window.location.href='../../index.php?action=khachhang&query=them'; </script>";
   }
?>
