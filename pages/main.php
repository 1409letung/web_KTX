<div class="cartegory">
        <div class="container">
            <div class="row">
                <?php
                    include("sidebar/sidebar.php");
                ?>
                <div class="cartegory-right">
                
                <?php
                    if(isset($_GET['quanly'])){
                        $tam = $_GET['quanly'];
                    }else{
                        $tam = '';
                    }
                    if($tam == 'fullbaidang'){
                        include('main/indexmain.php');
                    }elseif($tam == 'danhmucquan'){
                        include('main/danhmucquan.php');
                    }
                    elseif($tam == 'chitietbaidang'){
                        include('main/chitietbaidang.php');
                    }
                    elseif($tam == 'search'){
                        include('main/search.php');
                    }
                    elseif($tam == 'thongbao'){
                        include('main/thongbao.php');
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>