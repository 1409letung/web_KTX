
<div class="cartegory-left">
                    <li class="cartegory-left-li"> <a href=""> <b style="color:mediumseagreen">DANH SÁCH QUẬN</b> </a> </li>
                    <ul class="list_cartegory">
                        <?php
                            $sql_danhmucquan = "SELECT * FROM tb_danhmucquan ORDER BY id_quan ASC";
                            $query_danhmucquan = mysqli_query($mysqli,$sql_danhmucquan);
                            while($row=mysqli_fetch_array($query_danhmucquan)){
                        ?>
                        <li><a  href="baidang.php?quanly=danhmucquan&id=<?php echo $row['id_quan'] ?>"> <?php echo $row['tenquan'] ?> </a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>