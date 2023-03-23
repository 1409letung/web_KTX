<?php
   include('../../connect.php');
   $coso = $_POST['coso'];
   $sophong = $_POST['sophong'];
   $tongsogiuong = $_POST['tongsogiuong'];
   $tongsothietbi = $_POST['tongsothietbi'];
   $tenthietbi = $_POST['tenthietbi'];
   $trangthai = $_POST['trangthai'];
   $ghichu = $_POST['ghichu'];
   if(isset($_POST['themphong']))
   {
      $sql_them_phong = "INSERT INTO tb_phong(id_coso,sophong,tongsogiuong,tongsothietbi,tenthietbi,trangthai,ghichu) VALUES('".$coso."','".$sophong."','".$tongsogiuong."', '".$tongsothietbi."', '".$tenthietbi."','".$trangthai."','".$ghichu."')";
      mysqli_query($mysqli,$sql_them_phong);
      header('Location:../../index.php?action=phong&query=them');
   }
   elseif(isset($_POST['suaphong']))
   {
      $sql_update_phong = "UPDATE tb_phong SET id_coso='".$coso."',sophong='".$sophong."',tongsogiuong='".$tongsogiuong."',tongsothietbi='".$tongsothietbi."',tenthietbi='".$tenthietbi."',trangthai='".$trangthai."',ghichu='".$ghichu."' WHERE id_phong='$_GET[idphong]' ";
      mysqli_query($mysqli,$sql_update_phong);
      header('Location:../../index.php?action=phong&query=them');
      //sửa phòng bị lỗi
   }
   else
   {
      $id = $_GET['idphong'];
      $sql_xoa_phong = "DELETE FROM tb_phong WHERE id_phong = '".$id."'";
      mysqli_query($mysqli,$sql_xoa_phong);
      //header('Location:../../index.php?action=phong&query=them');
      echo "<script> window.location.href='../../index.php?action=phong&query=them'; </script>";
   }
?>
