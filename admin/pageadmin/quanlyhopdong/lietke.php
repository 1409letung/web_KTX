<?php
     $sql_lietke_hopdong = " SELECT * FROM tb_hopdong,tb_coso WHERE tb_hopdong.id_coso=tb_coso.id_coso ORDER BY id_hopdong ASC";
     $query_lietke_hopdong = mysqli_query($mysqli, $sql_lietke_hopdong);
?>
<h3 style="color:mediumseagreen" >Danh sách hợp đồng</h3>
<table  border="1px" width=100% style="border-collapse:collapse; border:5px #333333;">
    <tr>
        <th>STT</th>
        <th>ID Hợp đồng</th>
        <th>Tên hợp đồng</th>
        <th>Bên cho thuê</th>
        <th>Bên thuê</th>
        <th>Điều khoản</th>
        <th>Giá thuê(Tháng)</th>
        <th>Ngày ký</th>
        <th>Thời gian thuê(Tháng)</th>
        <th>Số giường</th>
        <th>Số phòng</th>
        <th>Cơ sở</th>
        <th>Ảnh chụp hợp đồng</th>
        <th> Tùy chọn </th>
    </tr>
    
    <?php
       $i = 0;
       while($row = mysqli_fetch_array($query_lietke_hopdong)){
       $i++;
    ?>
         <tr>
              <th> <?php echo $i ?> </th>
              <th> <?php echo $row['id_hopdong'] ?> </th>
              <th> <?php echo $row['tenhopdong'] ?> </th>
              <th> <?php echo $row['benchothue'] ?> </th>
              <th> <?php echo $row['benthue'] ?> </th>
              <th> <?php echo $row['dieukhoan'] ?> </th>
              <th> <?php echo number_format($row['giathue'],0,',','.').'vnđ' ?> </th>
              <th> <?php echo $row['ngayky'] ?> </th>
              <th> <?php echo $row['thoigian'] ?> </th>
              <th> <?php echo $row['sogiuong'] ?> </th>
              <th> <?php echo $row['sophong'] ?> </th>
              <th> <?php echo $row['tencoso'] ?> </th>
              <th> <img src="pageadmin/quanlyhopdong/uploads/<?php echo $row['anhhopdong'] ?>"  width="200px" height="180px">  </th>
              <th> <a style="text-decoration: none" href="pageadmin/quanlyhopdong/xuly.php?idhopdong=<?php echo $row['id_hopdong'] ?>"> &#10008; </a><a style="text-decoration: none" href="?action=hopdong&query=sua&idhopdong=<?php echo $row['id_hopdong'] ?>">&#9881;</a> 
              <a style="text-decoration: none" href="pageadmin/quanlyhopdong/hoadon.php"> &#9851; </a>
              </th>
         </tr>

    <?php
    }
    ?>
</table>