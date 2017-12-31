<?php

include("mysql.php");
//UPDATE `user` SET `id`=[value-1],`name`=[value-2],`password`=[value-3],`bgimg`=[value-4],`token`=[value-5],`Pattern`=[value-6],`fontcolor`=[value-7],`newsf`=[value-8],`baidu`=[value-9],`news`=[value-10] WHERE 1
$cookie = $_COOKIE['token'];
$sql = "update user set fontcolor = '$_GET[navcolor]', newsf = '$_GET[newscolor]',baidu = '$_GET[baidu]', news = '$_GET[news]' where token = '$cookie'";

mysql_query($sql);


