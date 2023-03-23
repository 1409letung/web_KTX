<?php
    $mysqli = new mysqli("localhost", "root", "", "web_ktx");
    if($mysqli->connect_error){
        echo "Kết nối lối Mysql".$mysqli->connect_error;
        exit();
    }
?>