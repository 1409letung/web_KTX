<?php
     $sql_lietke_coso = " SELECT * FROM tb_coso ORDER BY id_coso ASC";
     $query_lietke_coso = mysqli_query($mysqli, $sql_lietke_coso);
?>
<h3 style="color:mediumseagreen" >Danh sách cơ sở</h3>
<table border="1px" width=30% style="border-collapse:collapse; border:5px #333333;">
    <tr>
        <th>STT</th>
        <th>Tên cơ sở</th>
        <th> Địa chỉ</th>
        <th> Tổng số phòng</th>
        <th> Tùy chọn </th>
    </tr>
    
    <?php
       $i = 0;
       while($row = mysqli_fetch_array($query_lietke_coso)){
       $i++;
    ?>
         <tr>
              <th> <?php echo $i ?> </th>
              <th> <?php echo $row['tencoso'] ?> </th>
              <th> <?php echo $row['diachi'] ?> </th>
              <th> <?php echo $row['tongsophong'] ?> </th>
              <th> <a style="text-decoration: none" href="pageadmin/quanlycoso/xuly.php?idcoso=<?php echo $row['id_coso'] ?>"> &#10008; </a> </th>
         </tr>

    <?php
    }
    ?>
</table>