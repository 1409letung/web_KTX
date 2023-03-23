<?php
   include('../../connect.php');
   $tencoso = $_POST['tencoso'];
   $diachi = $_POST['diachi'];
   $tongsophong = $_POST['tongsophong'];
   if(isset($_POST['themcoso']))
   {
      $sql_them_coso = "INSERT INTO tb_coso(tencoso,diachi,tongsophong) VALUES('".$tencoso."','".$diachi."','".$tongsophong."')";
      mysqli_query($mysqli, $sql_them_coso);
      header('Location:../../index.php?action=coso&query=them');
   }
   elseif(isset($_POST['suaquan']))
   {

   }
   else
   {
      $id = $_GET['idcoso'];
      $sql_xoa = "DELETE FROM tb_coso WHERE id_coso = '".$id."'";
      mysqli_query($mysqli, $sql_xoa);
      header('Location:../../index.php?action=coso&query=them');
   }
?>