<h3 style="color:mediumseagreen"> Tạo hợp đồng</h3>
<table border="1px" width=50% style="border-collapse:collapse; border:5px #333333;">
    <form method="POST" action="pageadmin/quanlyhopdong/xuly.php" enctype="multipart/form-data">
    <tr>
        <td> Tên hợp đồng:</td>
        <td><input type="text" name="tenhopdong"></td>
    </tr>
    <tr>
        <td> Bên cho thuê:</td>
        <td><input type="text" name="benchothue"></td>
    </tr>
    <tr>
        <td> Bên thuê:</td>
        <td><input type="text" name="benthue"></td>
    </tr>
    <tr>
        <td> Điều khoản:</td>
        <td> <textarea rows="10"  name="dieukhoan"></textarea> </td>
    </tr>
    <tr>
        <td> Giá cho thuê(Tháng):</td>
        <td><input type="text" name="giathue"></td>
    </tr>
    <tr>
        <td> Ngày ký:</td>
        <td><input type="text" name="ngayky"></td>
    </tr>
    <tr>
        <td> Thời gian thuê(tháng):</td>
        <td><input type="text" name="thoigian"></td>
    </tr>
    <tr>
        <td> Số giường:</td>
        <td><input type="text" name="sogiuong"></td>
    </tr>
    <tr>
        <td> Số phòng:</td>
        <td><input type="text" name="sophong"></td>
    </tr>
    <tr>
        <td> Cơ sở:</td>
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
        <td> Ảnh chụp hợp đồng:</td>
        <td><input type="file" name="anhhopdong"></td>
    </tr>
    <tr>
        <td colspan="3"> <input type="submit" name="taohopdong" value="Tạo hợp đồng"> </td>
    </tr>
    </form>
</table>