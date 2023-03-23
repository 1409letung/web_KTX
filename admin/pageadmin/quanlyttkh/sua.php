<?php
     $sql_sua_ttkh = " SELECT * FROM tb_khachhang WHERE id_khachhang = '$_GET[idkhachhang]' LIMIT 1";
     $query_sua_ttkh = mysqli_query($mysqli, $sql_sua_ttkh);
?>
<h3 style="color:mediumseagreen"> Sửa thông tin khách hàng</h3>
<table border="1px" width=50% style="border-collapse:collapse; border:5px #333333;">
<?php
   while($row = mysqli_fetch_array($query_sua_ttkh)){
?>
    <form method="POST" action="pageadmin/quanlyttkh/xuly.php?idkhachhang=<?php echo $row['id_khachhang'] ?>" enctype="multipart/form-data">
    <tr>
        <td> Họ tên:</td>
        <td><input type="text" value="<?php echo $row['hoten'] ?>" name="hoten"></td>
    </tr>
    <tr>
        <td> Giới tính:</td>
        <td>
            <select name="gioitinh">
                <?php
                    if($row['gioitinh']==1){
                ?>
                <option value="1" selected>Nam</option>
                <option value="0">Nữ</option>
                <?php
                    }else{
                ?>
                <option value="1">Nam</option>
                <option value="0" selected>Nữ</option>
                <?php
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td> Ngày sinh:</td>
        <td><input type="text" value="<?php echo $row['ngaysinh'] ?>" name="ngaysinh"></td>
    </tr>
    <tr>
        <td> CMND/CCCD:</td>
        <td><input type="text" value="<?php echo $row['cmnd'] ?>" name="cmnd"></td>
    </tr>
    <tr>
        <td> SĐT:</td>
        <td><input type="text" value="<?php echo $row['sdt'] ?>" name="sdt"></td>
    </tr>
    <tr>
        <td> Nghề nghiệp:</td>
        <td><input type="text" value="<?php echo $row['nghenghiep'] ?>" name="nghenghiep"></td>
    </tr>
    <tr>
        <td> Địa chỉ thường trú:</td>
        <td><input type="text" value="<?php echo $row['diachithuongtru'] ?>" name="diachithuongtru"></td>
    </tr>
    <tr>
        <td> Tài khoản:</td>
        <td><input type="text" value="<?php echo $row['taikhoan'] ?>" name="taikhoan"></td>
    </tr>
    <tr>
        <td> Mật khẩu:</td>
        <td><input type="text" value="<?php echo $row['matkhau'] ?>" name="matkhau"></td>
    </tr>
    <tr>
        <td colspan="3"> <input type="submit" name="suattkh" value="Sửa thông tin khách hàng"> </td>
    </tr>
    </form>
<?php
}
?>
</table>