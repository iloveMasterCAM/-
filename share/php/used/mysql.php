<?php
error_reporting(0);
header("Content-Type:text/html;charset=UTF-8");
$con = mysql_connect("bdm123604532.my3w.com","bdm123604532","ainiyoAINIYO") or die("链接失败");
if(!$con){
    echo "连接失败！";
}
mysql_select_db('bdm123604532_db');
mysql_query('set names utf8');
//INSERT INTO `user`(`id`, `name`, `password` ,`baidu` ) VALUES(null,'aa','123456',120)
    //INSERT INTO `user`(`id`, `name`, `password` ,`baidu` ) VALUES(null,'aa','123456',120)
/*$sql = "INSERT INTO `user`(`id`, `name`, `password` ,`baidu` ) VALUES(null,'ASDF','123456',120)";
mysql_query($sql);*/

/*header("Content-Type:text/html;charset=UTF-8");
$link = mysql_connect("bdm123604532.my3w.com","bdm123604532","ainiyoAINIYO")or die("数据库链接失败1");
//mysql_select_db("bdm123604532_db",$link);
if(!$link){
    echo '数据库链接失败';
}*/
/*
<li>标题：<?php $rs['title']></li>
    <li>标题：<?php $rs['time']></li>
    <li>标题：<?php $rs['content']></li>
*/