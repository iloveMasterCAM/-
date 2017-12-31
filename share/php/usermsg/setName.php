<?php
header("Content-Type:text/html;charset=UTF-8");
include('../mysql.php'); 
$cookie = $_COOKIE['token'];
/*
UPDATE `user` SET `ID`=[value-1],`nickname`=[value-2],`name`=[value-3],`password`=[value-4],`headimg`=[value-5],`Recommend`=[value-6],`history`=[value-7],`skin`=[value-8],`skin_address`=[value-9],`news`=[value-10],`token`=[value-11] WHERE 1
*/
$sql = "update user set nickname = '$_POST[name]' where token = '$cookie'";
 mysql_query($sql);


























