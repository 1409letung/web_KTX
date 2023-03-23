<h3 style="color:mediumseagreen"> Thêm phòng</h3>
<table border="1px" width=50% style="border-collapse:collapse; border:5px #333333;">
    <form method="POST" action="pageadmin/quanlyphong/xuly.php" enctype="multipart/form-data">
    <tr>
        <td> Chọn cơ sở</td>
        <td>
            <select name="coso" id="">
                <?php
                    $sql_coso = "SELECT * FROM tb_coso ORDER BY id_coso ASC";
                    $query_coso = mysqli_query($mysqli,$sql_coso);
                    while($row_coso = mysqli_fetch_array($query_coso)){
                ?>
                <option value="<?php echo $row_coso['id_coso'] ?>" > <?php echo $row_coso['tencoso'] ?> </option>
                <?php
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td> Số phòng:</td>
        <td><input type="text" name="sophong"></td>
    </tr>
    <tr>
        <td> Tổng số giường:</td>
        <td><input type="text" name="tongsogiuong"></td>
    </tr>
    <tr>
        <td> Tổng số thiết bị:</td>
        <td><input type="text" name="tongsothietbi"></td>
    </tr>
    <tr>
        <td> Tên thiết bị:</td>
        <td> <textarea rows="10"  name="tenthietbi"></textarea> </td>
    </tr>
    <tr>
        <td> Trạng thái:</td>
        <td>
            <select name="trangthai" id="">
                <option value="1">Mới</option>
                <option value="0">Cũ </option>
            </select>
        </td>
    </tr>
    <tr>
        <td> Ghi chú:</td>
        <td><input type="text" name="ghichu"></td>
    </tr>
    <tr>
        <td colspan="3"> <input type="submit" name="themphong" value="Thêm phòng"> </td>
    </tr>
    </form>
</table>