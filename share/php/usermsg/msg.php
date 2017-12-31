<?php
// error_reporting(0);    //关闭错误报告
include('../mysql.php');  
header("Content-Type:text/html;charset=UTF-8");
$cookie = $_COOKIE['token'];
//SELECT * FROM `user` WHERE token = '50c636bc829e94a96a73c97070821b1b'
$sql = "SELECT * FROM user WHERE token = '$cookie'";
$v = mysql_query($sql);
$val = mysql_fetch_assoc($v);
     echo json_encode($val);




















