<?php
     $sql_sua_phong = " SELECT * FROM tb_phong WHERE id_phong = '$_GET[idphong]' LIMIT 1";
     $query_sua_phong = mysqli_query($mysqli, $sql_sua_phong);
?>
<h3 style="color:mediumseagreen"> Sửa thông tin phòng</h3>
<table border="1px" width=50% style="border-collapse:collapse; border:5px #333333;">
<?php
   while($row = mysqli_fetch_array($query_sua_phong)){
?>
    <form method="POST" action="pageadmin/quanlyphong/xuly.php?idphong=<?php echo $row['id_phong'] ?>" enctype="multipart/form-data">
    <tr>
        <td> Chọn cơ sở</td>
        <td>
            <select name="quan" id="">
                <?php
                    $sql_coso = "SELECT * FROM tb_coso ORDER BY id_coso ASC";
                    $query_coso = mysqli_query($mysqli,$sql_coso);
                    while($row_coso = mysqli_fetch_array($query_coso)){
                        if($row_coso['id_coso']==$row['id_coso']){
                ?>
                <option selected value="<?php echo $row_coso['id_coso'] ?>" > <?php echo $row_coso['tencoso'] ?> </option>
                <?php
                    }else{    
                ?>
                 <option value="<?php echo $row_coso['id_coso'] ?>" > <?php echo $row_coso['tencoso'] ?> </option>
                <?php        
                   }
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td> Số phòng:</td>
        <td><input type="text" value="<?php echo $row['sophong'] ?>" name="sophong"></td>
    </tr>
    <tr>
        <td> Tổng số giường:</td>
        <td><input type="text" value="<?php echo $row['tongsogiuong'] ?>" name="tongsogiuong"></td>
    </tr>
    <tr>
        <td> Tổng số thiết bị:</td>
        <td><input type="text" value="<?php echo $row['tongsothietbi'] ?>" name="tongsothietbi"></td>
    </tr>
    <tr>
        <td> Tên thiết bị:</td>
        <td> <textarea rows="10" <?php echo $row['tenthietbi'] ?> name="tenthietbi"></textarea> </td>
    </tr>
    <tr>
        <td> Trạng thái:</td>
        <td>
            <select name="trangthai">
                <?php
                    if($row['trangthai']==1){
                ?>
                <option value="1" selected>Mới</option>
                <option value="0">Cũ</option>
                <?php
                    }else{
                ?>
                <option value="1">Mới</option>
                <option value="0" selected>Cũ</option>
                <?php
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td> Ghi chú:</td>
        <td><input type="text" value="<?php echo $row['ghichu'] ?>" name="ghichu"></td>
    </tr>
    <tr>
        <td colspan="3"> <input type="submit" name="suaphong" value="Sửa"> </td>
    </tr>
    </form>
<?php
}
?>
</table>