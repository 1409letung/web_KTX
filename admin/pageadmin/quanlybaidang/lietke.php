<?php
     $sql_lietke_baidang = " SELECT * FROM tb_baidang,tb_danhmucquan WHERE tb_baidang.id_quan=tb_danhmucquan.id_quan ORDER BY id_baidang ASC";
     $query_lietke_baidang = mysqli_query($mysqli, $sql_lietke_baidang);
?>
<h3 style="color:mediumseagreen" >Danh sách bài đăng</h3>
<table border="1px" width=100% style="border-collapse:collapse; border:5px #333333;">
    <tr>
        <th>ID</th>
        <th>Khu vực</th>
        <th>Tên bài đăng</th>
        <th> Ngày đăng </th>
        <th> Nội dung </th>
        <th> Hình ảnh </th>
        <th> Số phòng </th>
        <th> Tổng số giường </th>
        <th> Giá</th>
        <th> Tình trạng</th>
        <th>Phòng hiện đang trống</th>
        <th>Số giường trống</th>
        <th> Tùy chọn </th>
    </tr>
    
    <?php
       $i = 0;
       while($row = mysqli_fetch_array($query_lietke_baidang)){
       $i++;
    ?>
         <tr>
              <th> <?php echo $i ?> </th>
              <th> <?php echo $row['tenquan'] ?> </th>
              <th> <?php echo $row['tenbaidang'] ?> </th>
              <th> <?php echo $row['ngaydang'] ?> </th>
              <th> <?php echo $row['noidung'] ?> </th>
              <th> <img src="pageadmin/quanlybaidang/uploads/<?php echo $row['hinhanh'] ?>"  width="200px" height="180px">  </th>
              <th> <?php echo $row['sophong'] ?> </th>
              <th> <?php echo $row['tongsogiuong'] ?> </th>
              <th> <?php echo $row['gia'] ?> </th>
              <th> <?php if($row['tinhtrang']==1)
              {
                 echo 'Đang cho thuê';
              }else{
                   echo 'Mới mở';
              }
              
              ?> </th>
              <th> <?php echo $row['phongtrong'] ?> </th>
              <th> <?php echo $row['giuongtrong'] ?> </th>
              <th> <a style="text-decoration: none" href="pageadmin/quanlybaidang/xuly.php?idbaidang=<?php echo $row['id_baidang'] ?>"> &#10008; </a><a style="text-decoration: none" href="?action=baidang&query=sua&idbaidang=<?php echo $row['id_baidang'] ?>">&#9881;</a> </th>
         </tr>

    <?php
    }
    ?>
</table>