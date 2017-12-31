<?php
include('../mysql.php');  
header("Content-Type:text/html;charset=UTF-8");
$cookie = $_COOKIE['token'];
//$_POST['url'];
//$_POST['name'];
//$_POST['tt'];
//$_POST['class'];
//INSERT INTO `website`(`ID`, `userID`, `url`, `name`, `tt`, `class`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
$sql = "insert into website (ID, userID, url, name, tt, class) values (null,'$cookie', '$_POST[url]', '$_POST[name]', '$_POST[tt]','$_POST[class]')";

mysql_query($sql);

/*
url 地址	name 网站名	tt 首字母	class 分类id

*/


