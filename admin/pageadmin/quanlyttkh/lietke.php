<?php
     $sql_lietke_ttkh = " SELECT * FROM tb_khachhang ORDER BY id_khachhang ASC";
     $query_lietke_ttkh = mysqli_query($mysqli, $sql_lietke_ttkh);
?>
<h3 style="color:mediumseagreen" >Danh sách thông tin khách hàng</h3>
<table  border="1px" width=100% style="border-collapse:collapse; border:5px #333333;">
    <tr>
        <th>STT</th>
        <th>Họ tên</th>
        <th>Giới tính</th>
        <th>Ngày sinh</th></th>
        <th>CMND/CCCD</th>
        <th>SĐT</th>
        <th>Nghề nghiệp</th>
        <th>Địa chỉ thường trú</th>
        <th>Tài khoản</th>
        <th>Mật khẩu</th>
        <th> Tùy chọn </th>
    </tr>
    
    <?php
       $i = 0;
       while($row = mysqli_fetch_array($query_lietke_ttkh)){
       $i++;
    ?>
         <tr>
              <th> <?php echo $i ?> </th>
              <th> <?php echo $row['hoten'] ?> </th>
              <th> <?php if($row['gioitinh']==1)
              {
                 echo 'Nam';
              }else{
                   echo 'Nữ';
              }
              ?> </th>
              <th> <?php echo $row['ngaysinh'] ?> </th>
              <th> <?php echo $row['cmnd'] ?> </th>
              <th> <?php echo $row['sdt'] ?> </th>
              <th> <?php echo $row['nghenghiep'] ?> </th>
              <th> <?php echo $row['diachithuongtru'] ?> </th>
              <th> <?php echo $row['taikhoan'] ?> </th>
              <th> <?php echo $row['matkhau'] ?> </th>
              <th> <a style="text-decoration: none" href="pageadmin/quanlyttkh/xuly.php?idkhachhang=<?php echo $row['id_khachhang'] ?>"> &#10008; </a><a style="text-decoration: none" href="?action=khachhang&query=sua&idkhachhang=<?php echo $row['id_khachhang'] ?>">&#9881;</a> </th>
         </tr>

    <?php
    }
    ?>
</table>