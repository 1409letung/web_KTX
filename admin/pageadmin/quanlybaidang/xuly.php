<?php
   include('../../connect.php');
   $quan = $_POST['quan'];
   $tenbaidang = $_POST['tenbaidang'];
   $ngaydang = $_POST['ngaydang'];
   $noidung = $_POST['noidung'];
   $hinhanh = $_FILES['hinhanh']['name'];
   $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
   $hinhanh = time().'_'.$hinhanh;
   $sophong = $_POST['sophong'];
   $tongsogiuong = $_POST['tongsogiuong'];
   $gia = $_POST['gia'];
   $tinhtrang = $_POST['tinhtrang'];
   $phongtrong = $_POST['phongtrong'];
   $giuongtrong = $_POST['giuongtrong'];
   if(isset($_POST['thembaidang']))
   {
      $sql_them_baidang = "INSERT INTO tb_baidang(id_quan,tenbaidang,ngaydang,noidung,hinhanh,sophong,tongsogiuong,gia,tinhtrang,phongtrong,giuongtrong) VALUES('".$quan."','".$tenbaidang."', '".$ngaydang."', '".$noidung."', '".$hinhanh."','".$sophong."','".$tongsogiuong."', '".$gia."', '".$tinhtrang."', '".$phongtrong."', '".$giuongtrong."')";
      mysqli_query($mysqli,$sql_them_baidang);
      move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
      header('Location:../../index.php?action=baidang&query=them');
   }
   elseif(isset($_POST['suabaidang']))
   {
      if($hinhanh!=''){
         move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
         $sql_update = "UPDATE tb_baidang SET id_quan='".$quan."',tenbaidang='".$tenbaidang."', ngaydang='".$ngaydang."', noidung='".$noidung."', hinhanh='".$hinhanh."',sophong='".$sophong."',tongsogiuong='".$tongsogiuong."', gia='".$gia."', tinhtrang='".$tinhtrang."', phongtrong='".$phongtrong."', giuongtrong='".$giuongtrong."' WHERE id_baidang='$_GET[idbaidang]' ";
         //xóa hình ảnh cũ
         $sql = "SELECT * FROM tb_baidang WHERE id_baidang = '$_GET[idbaidang]' LIMIT 1";
         $query = mysqli_query($mysqli,$sql);
         while($row = mysqli_fetch_array($query))
         {
             unlink('uploads/'.$row['hinhanh']);
         }
      }
      else{
         $sql_update = "UPDATE tb_baidang SET id_quan='".$quan."',tenbaidang='".$tenbaidang."', ngaydang='".$ngaydang."', noidung='".$noidung."',sophong='".$sophong."',tongsogiuong='".$tongsogiuong."', gia='".$gia."', tinhtrang='".$tinhtrang."' WHERE id_baidang='$_GET[idbaidang]' ";
      }
      mysqli_query($mysqli,$sql_update);
      header('Location:../../index.php?action=baidang&query=them');
   }
   else
   {
      $id = $_GET['idbaidang'];
      $sql = "SELECT * FROM tb_baidang WHERE id_baidang = '$id' LIMIT 1";
      $query = mysqli_query($mysqli,$sql);
      while($row = mysqli_fetch_array($query))
      {
         unlink('uploads/'.$row['hinhanh']);
      }
      $sql_xoa_baidang = "DELETE FROM tb_baidang WHERE id_baidang = '".$id."'";
      mysqli_query($mysqli,$sql_xoa_baidang);
      //header('Location:../../index.php?action=baidang&query=them');
      echo "<script> window.location.href='../../index.php?action=baidang&query=them'; </script>";
   }
?>
