<?php
     include('../../connect.php');
     $sql_lietke_hopdong = " SELECT * FROM tb_hopdong,tb_coso WHERE tb_hopdong.id_coso=tb_coso.id_coso ORDER BY id_hopdong ASC";
     $query_lietke_hopdong = mysqli_query($mysqli,$sql_lietke_hopdong);
?>
<h3 style="color:mediumseagreen;text-align:center;" >Danh sách hóa đơn hợp đồng  </h3>
<table  border="1px" width=100% style="border-collapse:collapse; border:5px #333333;">
    <tr>
        <th>Tháng</th>
        <th>ID Hợp đồng</th>
        <th>Tên hợp đồng</th>
        <th>Khách hàng</th>
        <th>Số giường</th>
        <th>Số phòng</th>
        <th>Cơ sở</th>
        <th>Giá cho thuê(tháng)</th>
        <th> Tình trạng </th>
    </tr>
    <?php
       $i;
       while($row = mysqli_fetch_array($query_lietke_hopdong)){
       $n = $row['thoigian'];
       for($i=1;$i<=$n;$i++){
    ?>
         <tr>
              <th> <?php echo $i ?> </th>
              <th> <?php echo $row['id_hopdong'] ?> </th>
              <th> <?php echo $row['tenhopdong'] ?> </th>
              <th> <?php echo $row['benthue'] ?> </th>
              <th> <?php echo $row['sogiuong'] ?> </th>
              <th> <?php echo $row['sophong'] ?> </th>
              <th> <?php echo $row['tencoso'] ?> </th>
              <th> <?php echo number_format($row['giathue'],0,',','.').'vnđ' ?> </th>
              <th> <a href="hoadon.php?status=0">Chưa thu</a>
                  <?php 
                     if(isset($_GET['status'])&&$_GET['status']==0){
                            echo'Đã thu';
                  }?>
              </th>
         </tr>
    <?php
       }
    }
    ?>
</table>