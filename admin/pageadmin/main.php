<div class="clear"></div>
<div class="main">
            <?php
                    if(isset($_GET['action']) && isset($_GET['query'])){
                        $tam = $_GET['action'];
                        $query = $_GET['query'];
                    }else{
                        $tam = '';
                        $query = '';
                    }
                    if($tam == 'taikhoan' && $query == 'them'){
                        include('taikhoan/them.php');
                        include('taikhoan/lietke.php');
                    }
                    elseif($tam == 'danhmucquan' && $query == 'them'){
                        include('danhmucquan/them.php');
                        include('danhmucquan/lietke.php');
                    }
                    elseif($tam == 'baidang' && $query == 'them'){
                        include('quanlybaidang/them.php');
                        include('quanlybaidang/lietke.php');
                    }
                    elseif($tam == 'baidang' && $query == 'sua'){
                        include('quanlybaidang/sua.php');
                    }elseif($tam == 'chothue' && $query == 'them'){
                        include('quanlychothue/lietke.php');
                    }
                    elseif($tam == 'hopdong' && $query == 'them'){
                        include('quanlyhopdong/them.php');
                        include('quanlyhopdong/lietke.php');
                    }
                    elseif($tam == 'hopdong' && $query == 'sua'){
                        include('quanlyhopdong/sua.php');
                    }
                    elseif($tam == 'coso' && $query == 'them'){
                        include('quanlycoso/them.php');
                        include('quanlycoso/lietke.php');
                    }elseif($tam == 'phong' && $query == 'them'){
                        include('quanlyphong/them.php');
                        include('quanlyphong/lietke.php');
                    }elseif($tam == 'phong' && $query == 'sua'){
                        include('quanlyphong/sua.php');
                    }elseif($tam == 'khachhang' && $query == 'them'){
                        include('quanlyttkh/them.php');
                        include('quanlyttkh/lietke.php');
                    }elseif($tam == 'khachhang' && $query == 'sua'){
                        include('quanlyttkh/sua.php');
                    }
                    else{
                        include('dashboard.php');
                    }
            ?>
</div>