<?php
     $sql_pro = "SELECT * FROM tb_baidang,tb_danhmucquan WHERE tb_baidang.id_quan=tb_danhmucquan.id_quan ORDER BY tb_baidang.id_baidang DESC LIMIT 10";
     $query_pro = mysqli_query($mysqli,$sql_pro);
?>

<p style="text-align: center; font-size: 20px;"> <b style="color:mediumseagreen">BÀI ĐĂNG MỚI NHẤT </b> </p>
<?php
       while($row = mysqli_fetch_array($query_pro)){
?>
                    <div class="cartegory-right-content">
                        
                        <a href="baidang.php?quanly=chitietbaidang&id=<?php echo $row['id_baidang'] ?>">
                          <img src="admin/pageadmin/quanlybaidang/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                          <h1><?php  echo $row['tenbaidang'] ?></h1>
                          <p>Giá: <?php echo number_format($row['gia'],0,',','.').'vnđ' ?>  </p>
                          <p> <?php echo $row['tenquan'] ?> </p>
                        </a>
                        
                    </div>
<?php
   }
?>
                    