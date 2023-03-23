<?php
   include('../../connect.php');
   $tenquan = $_POST['tenquan'];
   if(isset($_POST['themquan']))
   {
      $sql_them_quan = "INSERT INTO tb_danhmucquan(tenquan) VALUES('".$tenquan."')";
      mysqli_query($mysqli, $sql_them_quan);
      header('Location:../../index.php?action=danhmucquan&query=them');
   }
   elseif(isset($_POST['suaquan']))
   {

   }
   else
   {
      $id = $_GET['idquan'];
      $sql_xoa = "DELETE FROM tb_danhmucquan WHERE id_quan = '".$id."'";
      mysqli_query($mysqli, $sql_xoa);
      header('Location:../../index.php?action=danhmucquan&query=them');
   }
?>