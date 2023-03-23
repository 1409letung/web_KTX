<?php
     $sql_lietke_phong = " SELECT * FROM tb_phong,tb_coso WHERE tb_phong.id_coso=tb_coso.id_coso ORDER BY id_phong ASC";
     $query_lietke_phong = mysqli_query($mysqli, $sql_lietke_phong);
?>
<h3 style="color:mediumseagreen" >Danh sách phòng</h3>
<table border="1px" width=100% style="border-collapse:collapse; border:5px #333333;">
    <tr>
        <th>STT</th>
        <th>Tên cơ sở</th>
        <th>Số phòng</th>
        <th> Tổng số giường </th>
        <th> Tổng số thiết bị </th>
        <th> Tên thiết bị </th>
        <th> Trạng thái </th>
        <th> Ghi chú </th>
        <th> Tùy chọn </th>
    </tr>
    
    <?php
       $i = 0;
       while($row = mysqli_fetch_array($query_lietke_phong)){
       $i++;
    ?>
         <tr>
              <th> <?php echo $i ?> </th>
              <th> <?php echo $row['tencoso'] ?> </th>
              <th> <?php echo $row['sophong'] ?> </th>
              <th> <?php echo $row['tongsogiuong'] ?> </th>
              <th> <?php echo $row['tongsothietbi'] ?> </th>
              <th> <?php echo $row['tenthietbi'] ?> </th>
              <th> <?php if($row['trangthai']==1)
              {
                 echo 'Mới';
              }else{
                 echo 'Cũ';
              }
              
              ?> </th>
              <th> <?php echo $row['ghichu'] ?> </th>
              <th> <a style="text-decoration: none" href="pageadmin/quanlyphong/xuly.php?idphong=<?php echo $row['id_phong'] ?>"> &#10008; </a><a style="text-decoration: none" href="?action=phong&query=sua&idphong=<?php echo $row['id_phong'] ?>">&#9881;</a> </th>
         </tr>

    <?php
    }
    ?>
</table>