<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Ký Túc Xá Tư Nhân</title>
</head>
<body>
<header>
<div class="logo">
        <img style="width: 150px; height:90px" src="img/lg.png" href="index.php">
    </div>
    <div class="menu">
        <li><a href="index.php">TRANG CHỦ</a></li>
        <li><a href="baidang.php?quanly=fullbaidang">BÀI ĐĂNG</a></li>
        <li><a href="baidang.php?quanly=thongbao">THÔNG BÁO</a></li>
    </div>
    <div class="others">
        <li><input placeholder="Tìm kiếm ..." type="text"> <i class="fas fa-search"></i> </li>
        <li><a class="fa fa-user" href="login.php"></a></li>
    </div>
</header>
<!-- ---------------------------slider-------------------------->
<section id="slider">
   <div class="aspect-ratio-169">
        <img src="img/s1.jpg">
        <img src="img/s2.jpg">
        <img src="img/s3.jpg">
        <img src="img/s4.jpg">
   </div>
   <div class="dot-container">
       <div class="dot active"></div>
       <div class="dot"></div>
       <div class="dot"></div>
       <div class="dot"></div>
   </div>
</section>
<div class="clear"></div>
<section class="app-container">
    <p>Tải ứng dụng của chúng tôi</p>
    <div class="app-google">
        <img  src="img/ggplay.png" alt="">
        <img  src="img/appstoren.png" alt="">
    </div>
    <p> Nhận thông báo mới nhất của chúng tôi</p>
    <input type="text" placeholder="Nhập email của bạn...">
    <i class="fas fa-arrow-left"></i>
</section>
<!--Footer-->
<div class="footer-top">
    <li><a href=""></a>Liên hệ</li>
    <li><a href=""></a>Tuyển dụng</li>
    <li><a href=""></a>Giới thiệu</li>
    <li>
        <a href="" class="fab fa-facebook-f"></a>
        <a href="" class="fab fa-twitter"></a>
        <a href="" class="fab fa-youtube"></a>
    </li>
</div>
<div class="footer-center">
<p> 
    Công ty TNHHTN Group 5 <br>
    Địa chỉ: 221 Nguyễn Văn Lượng, Phường 17, Quận Gò Vấp, Thành phố Hồ Chí Minh - 0345587708 <br>
    Tư vấn online: <b>0246 662 3434</b> 
</p>
</div>
<div class="footer-bottom">
    @Copyright by Gunt1409
</div>
</body>
<script>
    //header color when page move
   const header = document.querySelector("header")
   window.addEventListener("scroll", function(){
       x = window.pageYOffset
       if(x>0){
           header.classList.add("sticky")
       }
       else{
           header.classList.remove("sticky")
       }
   })
  
    //slider
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector(".aspect-ratio-169")
    const dotItem = document.querySelectorAll(".dot")
    let imgNumber = imgPosition.length
    let index=0
    //console.log(imgPosition)
    imgPosition.forEach(function(image, index){
        image.style.left = index*100 + "%"
        dotItem[index].addEventListener("click", function(){
        slider(index)
        })
    })
    //dot các nút bấm slider
    function imgSlide(){
        index++;
        console.log(index)
        if(index >= imgNumber){index=0}
        slider(index)
    }
    function slider(index){
        imgContainer.style.left = "-" + index*100 + "%"
        const dotActive = document.querySelector('.active')
        dotActive.classList.remove("active")
        dotItem[index].classList.add("active")
    }
    setInterval(imgSlide,3500)

</script>
</html>
