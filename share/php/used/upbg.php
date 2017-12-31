<?php
include("mysql.php");
//UPDATE `user` SET `id`=[value-1],`name`=[value-2],`password`=[value-3],`bgimg`=[value-4],`token`=[value-5],`Pattern`=[value-6],`fontcolor`=[value-7] WHERE 1
$cookie = $_COOKIE['token'];
$sql = "update user set bgimg = '$_GET[img]' where token = '$cookie'";
mysql_query($sql);
echo $cookie;
