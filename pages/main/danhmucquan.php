<?php
     $sql_pro = "SELECT * FROM tb_baidang WHERE tb_baidang.id_quan='$_GET[id]' ORDER BY id_baidang ASC";
     $query_pro = mysqli_query($mysqli,$sql_pro);
     $sql_cate = "SELECT * FROM tb_danhmucquan WHERE tb_danhmucquan.id_quan='$_GET[id]' LIMIT 1";
     $query_cate = mysqli_query($mysqli,$sql_cate);
     $row_title = mysqli_fetch_array($query_cate)
?>

<p style="text-align: center; font-size: 20px;"> <b style="color:mediumseagreen">Ký túc xá khu vực: <?php echo $row_title['tenquan'] ?> </b> </p>
<?php
      while($row_pro = mysqli_fetch_array($query_pro)){
?>
                    <div class="cartegory-right-content">
                        
                        <a href="baidang.php?quanly=chitietbaidang&id=<?php echo $row_pro['id_baidang'] ?>">
                            <img src="admin/pageadmin/quanlybaidang/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="">
                            <h1><?php  echo $row_pro['tenbaidang'] ?></h1>
                            <p>Giá: <?php echo number_format($row_pro['gia'],0,',','.').'vnđ' ?>  </p>
                        </a>
                    </div>
 <?php
  }
 ?>