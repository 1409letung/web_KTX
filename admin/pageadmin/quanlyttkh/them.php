<h3 style="color:mediumseagreen"> Thêm thông tin khách hàng</h3>
<table border="1px" width=50% style="border-collapse:collapse; border:5px #333333;">
    <form method="POST" action="pageadmin/quanlyttkh/xuly.php" enctype="multipart/form-data">
    <tr>
        <td> Họ và tên:</td>
        <td><input type="text" name="hoten"></td>
    </tr>
    <tr>
        <td> Giới tính:</td>
        <td>
            <select name="gioitinh">
                <option value="1">Nam</option>
                <option value="0">Nữ</option>
            </select>
        </td>
    </tr>
    <tr>
        <td> Ngày sinh:</td>
        <td><input type="text" name="ngaysinh"></td>
    </tr>
    <tr>
        <td> CMND/CCCD:</td>
        <td><input type="text" name="cmnd"></td>
    </tr>
    <tr>
        <td> Số điện thoại:</td>
        <td><input type="text" name="sdt"></td>
    </tr>
    <tr>
        <td> Nghề nghiệp:</td>
        <td><input type="text" name="nghenghiep"></td>
    </tr>
    <tr>
        <td> Địa chỉ thường trú:</td>
        <td><input type="text" name="diachithuongtru"></td>
    </tr>
    <tr>
        <td> Tên tài khoản:</td>
        <td><input type="text" name="taikhoan"></td>
    </tr>
    <tr>
        <td> Mật khẩu:</td>
        <td><input type="text" name="matkhau"></td>
    </tr>
    <tr>
        <td colspan="3"> <input type="submit" name="themttkh" value="Thêm TTKH"> </td>
    </tr>
    </form>
</table>