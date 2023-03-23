<?php
     $sql_sua_baidang = " SELECT * FROM tb_baidang WHERE id_baidang = '$_GET[idbaidang]' LIMIT 1";
     $query_sua_baidang = mysqli_query($mysqli, $sql_sua_baidang);
?>
<h3 style="color:mediumseagreen"> Sửa bài đăng</h3>
<table border="1px" width=50% style="border-collapse:collapse; border:5px #333333;">
<?php
   while($row = mysqli_fetch_array($query_sua_baidang)){
?>
    <form method="POST" action="pageadmin/quanlybaidang/xuly.php?idbaidang=<?php echo $row['id_baidang'] ?>" enctype="multipart/form-data">
    <tr>
        <td> Chọn quận</td>
        <td>
            <select name="quan" id="">
                <?php
                    $sql_quan = "SELECT * FROM tb_danhmucquan ORDER BY id_quan ASC";
                    $query_quan = mysqli_query($mysqli,$sql_quan);
                    while($row_quan = mysqli_fetch_array($query_quan)){
                        if($row_quan['id_quan']==$row['id_quan']){
                ?>
                <option selected value="<?php echo $row_quan['id_quan'] ?>" > <?php echo $row_quan['tenquan'] ?> </option>
                <?php
                    }else{    
                ?>
                 <option value="<?php echo $row_quan['id_quan'] ?>" > <?php echo $row_quan['tenquan'] ?> </option>
                <?php        
                   }
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td> Tên bài đăng:</td>
        <td><input type="text" value="<?php echo $row['tenbaidang'] ?>" name="tenbaidang"></td>
    </tr>
    <tr>
        <td> Ngày đăng:</td>
        <td><input type="text" value="<?php echo $row['ngaydang'] ?>" name="ngaydang"></td>
    </tr>
    <tr>
        <td> Nội dung</td>
        <td> <textarea rows="10" <?php echo $row['noidung'] ?> name="noidung"></textarea> </td>
    </tr>
    <tr>
        <td> Hình ảnh:</td>
        <td>
            <input type="file" name="hinhanh">
            <img src="pageadmin/quanlybaidang/uploads/<?php echo $row['hinhanh'] ?>"  width="200px" height="180px">
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
        <td> Giá:</td>
        <td><input type="text" value="<?php echo $row['gia'] ?>" name="gia"></td>
    </tr>
    <tr>
        <td> Tình trạng:</td>
        <td>
            <select name="tinhtrang">
                <?php
                    if($row['tinhtrang']==1){
                ?>
                <option value="1" selected>Đang cho thuê</option>
                <option value="0">Mới mở</option>
                <?php
                    }else{
                ?>
                <option value="1">Đang cho thuê</option>
                <option value="0" selected>Mới mở</option>
                <?php
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td> Phòng hiện đang trống:</td>
        <td><input type="text" value="<?php echo $row['phongtrong'] ?>" name="phongtrong"></td>
    </tr>
    <tr>
        <td> Số giường trống:</td>
        <td><input type="text" value="<?php echo $row['giuongtrong'] ?>" name="giuongtrong"></td>
    </tr>
    <tr>
        <td colspan="3"> <input type="submit" name="suabaidang" value="Sửa bài đăng"> </td>
    </tr>
    </form>
<?php
}
?>
</table>