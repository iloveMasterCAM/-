<?php
include('../mysql.php');  
header("Content-Type:text/html;charset=UTF-8");
$cookie = $_COOKIE['token'];
//UPDATE `user` SET `ID`=[value-1],`nickname`=[value-2],`name`=[value-3],`password`=[value-4],`headimg`=[value-5],`Recommend`=[value-6],`history`=[value-7],`skin`=[value-8],`skin_address`=[value-9],`news`=[value-10],`token`=[value-11] WHERE 1
//{"Recommend":Recommend,history:history,skin:skin,news:news}
$sql = "update user set Recommend = $_POST[Recommend], history = $_POST[history], skin = $_POST[skin], news = $_POST[news] where token = '$cookie'";
mysql_query($sql);
echo $_POST['news'];