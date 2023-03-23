<?php
     $sql_sua_hopdong = " SELECT * FROM tb_hopdong WHERE id_hopdong = '$_GET[idhopdong]' LIMIT 1";
     $query_sua_hopdong = mysqli_query($mysqli, $sql_sua_hopdong);
?>
<h3 style="color:mediumseagreen"> Sửa hợp đồng</h3>
<table border="1px" width=50% style="border-collapse:collapse; border:5px #333333;">
<?php
   while($row = mysqli_fetch_array($query_sua_hopdong)){
?>
    <form method="POST" action="pageadmin/quanlyhopdong/xuly.php?idhopdong=<?php echo $row['id_hopdong'] ?>" enctype="multipart/form-data">
    <tr>
        <td> Tên hợp đồng:</td>
        <td><input type="text" value="<?php echo $row['tenhopdong'] ?>" name="tenhopdong"></td>
    </tr>
    <tr>
        <td> Bên cho thuê:</td>
        <td><input type="text" value="<?php echo $row['benchothue'] ?>" name="benchothue"></td>
    </tr>
    <tr>
        <td> Bên thuê:</td>
        <td><input type="text" value="<?php echo $row['benthue'] ?>" name="benthue"></td>
    </tr>
    <tr>
        <td> Điều khoản:</td>
        <td> <textarea rows="10" <?php echo $row['dieukhoan'] ?> name="dieukhoan"></textarea> </td>
    </tr>
    <tr>
        <td> Giá thuê(tháng):</td>
        <td><input type="text" value="<?php echo $row['giathue'] ?>" name="giathue"></td>
    </tr>
    <tr>
        <td> Ngày ký:</td>
        <td><input type="text" value="<?php echo $row['ngayky'] ?>" name="ngayky"></td>
    </tr>
    <tr>
        <td> Thời gian(Tháng):</td>
        <td><input type="text" value="<?php echo $row['thoigian'] ?>" name="thoigian"></td>
    </tr>
    <tr>
        <td> Số giường:</td>
        <td><input type="text" value="<?php echo $row['sogiuong'] ?>" name="sogiuong"></td>
    </tr>
    <tr>
        <td> Số phòng:</td>
        <td><input type="text" value="<?php echo $row['sophong'] ?>" name="sophong"></td>
    </tr>
    <tr>
        <td> Cơ sở:</td>
        <td>
            <select name="coso" id="">
                <?php
                    $sql_cs = "SELECT * FROM tb_coso ORDER BY id_coso ASC";
                    $query_cs = mysqli_query($mysqli,$sql_cs);
                    while($row_cs = mysqli_fetch_array($query_cs)){
                        if($row_cs['id_coso']==$row['id_coso']){
                ?>
                <option selected value="<?php echo $row_cs['id_coso'] ?>" > <?php echo $row_cs['tencoso'] ?> </option>
                <?php
                    }else{    
                ?>
                 <option value="<?php echo $row_cs['id_coso'] ?>" > <?php echo $row_cs['tencoso'] ?> </option>
                <?php        
                   }
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td> Ảnh chụp hợp đồng:</td>
        <td>
            <input type="file" name="anhhopdong">
            <img src="pageadmin/quanlyhopdong/uploads/<?php echo $row['anhhopdong'] ?>"  width="200px" height="180px">
        </td>
    </tr>
    <tr>
        <td colspan="3"> <input type="submit" name="suahopdong" value="Sửa hợp đồng"> </td>
    </tr>
    </form>
<?php
}
?>
</table>