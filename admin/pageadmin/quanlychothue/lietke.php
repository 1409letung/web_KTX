<?php
     $sql_thue = " SELECT * FROM tb_hopdong,tb_coso,tb_phong,tb_khachhang ORDER BY id_khachhang ASC";
     $query_thue = mysqli_query($mysqli, $sql_thue);
?>
<h3 style="color:mediumseagreen" >Thông tin cho thuê</h3>
<table  border="1px" width=100% style="border-collapse:collapse; border:5px #333333;">
    <tr>
        <th>STT</th>
        <th>ID Hợp đồng</th>
        <th>Tên hợp đồng</th>
        <th>Khách hàng</th>
        <th>Số phòng</th>
        <th>Cơ sở</th>
        <th>Địa chỉ</th>
    </tr>
    
    <?php
       $i = 0;
       while($row = mysqli_fetch_array($query_thue)){
        $i+=1;
    ?>
         <tr>
              <th> <?php echo $i ?> </th>
              <th> <?php echo $row['id_hopdong'] ?> </th>
              <th> <?php echo $row['tenhopdong'] ?> </th>
              <th> <?php echo $row['hoten'] ?> </th>
              <th> <?php echo $row['sophong'] ?> </th>
              <th> <?php echo $row['tencoso'] ?> </th>
              <th> <?php echo $row['diachi'] ?> </th>
         </tr>

    <?php
    }
    ?>
</table>