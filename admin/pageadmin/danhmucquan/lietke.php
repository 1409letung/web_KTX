<?php
     $sql_lietke_quan = " SELECT * FROM tb_danhmucquan ORDER BY id_quan ASC";
     $query_lietke_quan = mysqli_query($mysqli, $sql_lietke_quan);
?>
<h3 style="color:mediumseagreen" >Danh sách quận</h3>
<table border="1px" width=30% style="border-collapse:collapse; border:5px #333333;">
    <tr>
        <th>ID</th>
        <th>Tên quận</th>
        <th> Tùy chọn </th>
    </tr>
    
    <?php
       $i = 0;
       while($row = mysqli_fetch_array($query_lietke_quan)){
       $i++;
    ?>
         <tr>
              <th> <?php echo $i ?> </th>
              <th> <?php echo $row['tenquan'] ?> </th>
              <th> <a style="text-decoration: none" href="pageadmin/danhmucquan/xuly.php?idquan=<?php echo $row['id_quan'] ?>"> &#10008; </a> </th>
         </tr>

    <?php
    }
    ?>
</table>