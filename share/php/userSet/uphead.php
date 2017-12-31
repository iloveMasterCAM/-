<?php
include('../mysql.php');  
$cookie = $_COOKIE['token'];
$base64 = "$_POST[data]";
$img = base64_decode($base64);
$a = file_put_contents("../../userimg/".$cookie.".jpg", $img);//返回的是字节数

//UPDATE `user` SET `headimg`='adsf'WHERE ID=1

$sql = "UPDATE user SET headimg = 'http://localhost/share/userimg/".$cookie.".jpg' WHERE token = '$cookie'";
mysql_query($sql);