<?php
     $sql_chitiet = "SELECT * FROM tb_baidang,tb_danhmucquan WHERE tb_baidang.id_quan=tb_danhmucquan.id_quan AND tb_baidang.id_baidang='$_GET[id]' LIMIT 1";
     $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
     while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
<h1 style="color:mediumseagreen; text-align:center">Thông tin chi tiết</h1>
<div class="imgbaidang">
        <img width="90%" src="admin/pageadmin/quanlybaidang/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
</div>

<div class="infobaidang">
      <h3> <?php echo $row_chitiet['tenbaidang'] ?> </h3>
      <p>Ngày đăng:<?php echo $row_chitiet['ngaydang'] ?> </p>
      <p> Giá cho thuê:<?php echo number_format($row_chitiet['gia'],0,',','.').'vnđ' ?></p>
      <p>Khu vực: <?php echo $row_chitiet['tenquan'] ?></p>
      <p>Thông tin cụ thể:<?php echo $row_chitiet['noidung'] ?> </p>
      <p>Số phòng:<?php echo $row_chitiet['sophong'] ?> </p>
      <p>Số giường:<?php echo $row_chitiet['tongsogiuong'] ?></p>
      <p>Tình trạng: <?php if($row_chitiet['tinhtrang']==1)
              {
                 echo 'Đang cho thuê';
              }else{
                   echo 'Mới mở';
              }
              ?></p>
     <p>Phòng hiện đang trống:<?php echo $row_chitiet['phongtrong'] ?></p>
     <p>Số giường(số phòng - số giường):<?php echo $row_chitiet['giuongtrong'] ?></p>
      <p>Liên hệ ngay để được tư vấn: 0345576789</p>
</div>
</div>
<?php
     }
?>