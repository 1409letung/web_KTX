<h3 style="color:mediumseagreen"> Thêm bài đăng</h3>
<table border="1px" width=50% style="border-collapse:collapse; border:5px #333333;">
    <form method="POST" action="pageadmin/quanlybaidang/xuly.php" enctype="multipart/form-data">
    <tr>
        <td> Chọn quận</td>
        <td>
            <select name="quan" id="">
                <?php
                    $sql_quan = "SELECT * FROM tb_danhmucquan ORDER BY id_quan ASC";
                    $query_quan = mysqli_query($mysqli,$sql_quan);
                    while($row_quan = mysqli_fetch_array($query_quan)){
                ?>
                <option value="<?php echo $row_quan['id_quan'] ?>" > <?php echo $row_quan['tenquan'] ?> </option>
                <?php
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td> Tên bài đăng:</td>
        <td><input type="text" name="tenbaidang"></td>
    </tr>
    <tr>
        <td> Ngày đăng:</td>
        <td><input type="text" name="ngaydang"></td>
    </tr>
    <tr>
        <td> Nội dung</td>
        <td> <textarea rows="10"  name="noidung"></textarea> </td>
    </tr>
    <tr>
        <td> Hình ảnh:</td>
        <td><input type="file" name="hinhanh"></td>
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
        <td> Giá:</td>
        <td><input type="text" name="gia"></td>
    </tr>
    <tr>
        <td> Tình trạng:</td>
        <td>
            <select name="tinhtrang" id="">
                <option value="1">Đang cho thuê</option>
                <option value="0">Mới mở</option>
            </select>
        </td>
    </tr>
    <tr>
        <td> Phòng hiện đang trống:</td>
        <td><input type="text" name="phongtrong"></td>
    </tr>
    <tr>
        <td> Số giường trống(phòng-giường):</td>
        <td><input type="text" name="giuongtrong"></td>
    </tr>
    <tr>
        <td colspan="3"> <input type="submit" name="thembaidang" value="Thêm bài đăng"> </td>
    </tr>
    </form>
</table>