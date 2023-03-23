<?php
     $sql_lietke_taikhoan = " SELECT * FROM tb_taikhoan ORDER BY id_tk ASC";
     $query_lietke_taikhoan = mysqli_query($mysqli, $sql_lietke_taikhoan);
?>
<h3 style="color:mediumseagreen" >Danh sách tài khoản</h3>
<table border="1px" width=30% style="border-collapse:collapse; border:5px #333333;">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        <th> Tùy chọn </th>
    </tr>
    
    <?php
       $i = 0;
       while($row = mysqli_fetch_array($query_lietke_taikhoan)){
       $i++;
    ?>
         <tr>
              <th> <?php echo $i ?> </th>
              <th> <?php echo $row['username'] ?> </th>
              <th> <?php echo $row['password'] ?> </th>
              <th> <?php echo $row['role'] ?> </th>
              <th> <a style="text-decoration: none" href="pageadmin/taikhoan/xuly.php?idtk=<?php echo $row['id_tk'] ?>"> &#10008; </a> </th>
         </tr>

    <?php
    }
    ?>
</table>