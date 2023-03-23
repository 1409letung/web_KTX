<!-- <?php
     // if(isset($_GET['logout'])&&$_GET['logout']==1){
     //      unset($_SESSION['login']);
     //      header('Location:../login.php');
     //}
?> -->

<?php
     if(isset($_GET['logout'])&&$_GET['logout']==1){
          unset($_SESSION['login']);
          header('Location:../index.php');
     }
?>

<div class="logout">
    <p style="color:red;text-align:center;"> Xin chào, <?php if(isset($_SESSION['login'])){
          echo $_SESSION['login'];
     } ?>
        <a style="text-decoration: none;" href="index.php?logout=1"> &#10145; </a>
   </p>
     
</div>
