<?php
include('../mysql.php');  
header("Content-Type:text/html;charset=UTF-8");
$cookie = $_COOKIE['token'];
//INSERT INTO `class`(`ID`, `userID`, `classid`, `name`, `tt`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
//SELECT * FROM `user` WHERE 1

if(isset($_POST['name']) && isset($_POST['tt'])){
    $sql = "select ID from user where token = '$_COOKIE[token]'";
    $v = mysql_query($sql);
     $val = mysql_fetch_assoc($v);
    $sql = "insert into class (ID, userID, classid, name, tt) values (null,'$_COOKIE[token]',$val[ID],'$_POST[name]','$_POST[tt]')";
    mysql_query($sql);
}
