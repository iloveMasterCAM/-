<?php
include('../mysql.php');  
header("Content-Type:text/html;charset=UTF-8");
$cookie = $_COOKIE['token'];
//DELETE FROM `website` WHERE 1
$sql = "delete from website where id =  $_POST[id]";
mysql_query($sql);