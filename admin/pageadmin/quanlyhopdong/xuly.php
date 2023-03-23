<?php
   include('../../connect.php');
   $tenhopdong = $_POST['tenhopdong'];
   $benchothue = $_POST['benchothue'];
   $benthue = $_POST['benthue'];
   $dieukhoan = $_POST['dieukhoan'];
   $giathue = $_POST['giathue'];
   $ngayky = $_POST['ngayky'];
   $thoigian = $_POST['thoigian'];
   $sogiuong = $_POST['sogiuong'];
   $sophong = $_POST['sophong'];
   $coso = $_POST['coso'];
   $hinhanh = $_FILES['anhhopdong']['name'];
   $hinhanh_tmp = $_FILES['anhhopdong']['tmp_name'];
   $hinhanh = time().'_'.$hinhanh;
   if(isset($_POST['taohopdong']))
   {
      $sql_tao_hopdong = "INSERT INTO tb_hopdong(tenhopdong,benchothue,benthue,dieukhoan,giathue,ngayky,thoigian,sogiuong,sophong,id_coso,anhhopdong) VALUES('".$tenhopdong."','".$benchothue."', '".$benthue."', '".$dieukhoan."','".$giathue."','".$ngayky."', '".$thoigian."', '".$sogiuong."', '".$sophong."', '".$coso."','".$hinhanh."')";
      mysqli_query($mysqli,$sql_tao_hopdong);
      move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
      header('Location:../../index.php?action=hopdong&query=them');
   }
   elseif(isset($_POST['suahopdong']))
   {
      if($hinhanh!=''){
         move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
         $sql_update = "UPDATE tb_hopdong SET tenhopdong='".$tenhopdong."', benchothue='".$benchothue."', benthue='".$benthue."', dieukhoan='".$dieukhoan."',giathue='".$giathue."',ngayky='".$ngayky."', thoigian='".$thoigian."', sogiuong='".$sogiuong."', sophong='".$sophong."', id_coso='".$coso."', anhhopdong='".$hinhanh."' WHERE id_hopdong='$_GET[idhopdong]' ";
         $sql = "SELECT * FROM tb_hopdong WHERE id_hopdong = '$_GET[idhopdong]' LIMIT 1";
         $query = mysqli_query($mysqli,$sql);
         while($row = mysqli_fetch_array($query))
         {
             unlink('uploads/'.$row['anhhopdong']);
         }
      }else{
         $sql_update = "UPDATE tb_hopdong SET tenhopdong='".$tenhopdong."', benchothue='".$benchothue."', benthue='".$benthue."', dieukhoan='".$dieukhoan."',giathue='".$giathue."',ngayky='".$ngayky."', thoigian='".$thoigian."', sogiuong='".$sogiuong."', sophong='".$sophong."', id_coso='".$coso."' WHERE id_hopdong='$_GET[idhopdong]' ";
      }
      //$sql_update = "UPDATE tb_hopdong SET tenhopdong='".$tenhopdong."', benchothue='".$benchothue."', benthue='".$benthue."', dieukhoan='".$dieukhoan."',giathue='".$giathue."',ngayky='".$ngayky."', thoigian='".$thoigian."', sogiuong='".$sogiuong."', sophong='".$sophong."', id_coso='".$coso."' WHERE id_hopdong='$_GET[idhopdong]' ";
      mysqli_query($mysqli,$sql_update);
      header('Location:../../index.php?action=hopdong&query=them');
   }
   else
   {
      $id = $_GET['idhopdong'];
      $sql = "SELECT * FROM tb_hopdong WHERE id_hopdong = '$id' LIMIT 1";
      $query = mysqli_query($mysqli,$sql);
      while($row = mysqli_fetch_array($query))
      {
         unlink('uploads/'.$row['anhhopdong']);
      }
      $sql_xoa_hopdong = "DELETE FROM tb_hopdong WHERE id_hopdong = '".$id."'";
      mysqli_query($mysqli,$sql_xoa_hopdong);
      // header('Location:../../index.php?action=hopdong&query=them');
      echo "<script> window.location.href='../../index.php?action=hopdong&query=them'; </script>";
   }
?>
