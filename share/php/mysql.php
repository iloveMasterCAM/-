<?php
error_reporting(0);
header("Content-Type:text/html;charset=UTF-8");
$con = mysql_connect("localhost","root","") or die("链接失败");
if(!$con){
    echo "连接失败！";
}
mysql_select_db('linxishare');
mysql_query('set names utf8');


