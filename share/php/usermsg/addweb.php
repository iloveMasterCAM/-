<?php
include('../mysql.php');  
header("Content-Type:text/html;charset=UTF-8");
$cookie = $_COOKIE['token'];
/*
INSERT INTO `website`(`ID`, `userID`, `url`, `name`, `tt`, `class`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
*/
/*
SELECT * FROM `user` WHERE 1
*/
$id_sql = "select id from user where token = '$cookie'";
//mysql_fetch_assoc
//mysql_query($id_sql);

$id = mysql_fetch_assoc(mysql_query($id_sql))['id'];


$sql = "insert into website (id,userID,url,name,tt,class) values (null,$id,'$_POST[url]','$_POST[name]','$_POST[class]')";
    mysql_query($sql);
    


