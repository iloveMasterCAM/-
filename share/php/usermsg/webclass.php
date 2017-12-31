<?php
// error_reporting(0);    //关闭错误报告
include('../mysql.php');  
header("Content-Type:text/html;charset=UTF-8");
$cookie = $_COOKIE['token'];
//SELECT * FROM `user` WHERE token = '50c636bc829e94a96a73c97070821b1b'
//$sql = "SELECT id FROM user WHERE token = '$cookie'";
//$id = mysql_fetch_assoc(mysql_query($sql));
// $id['id'];
/*
SELECT `ID`, `userID`, `classid`, `name`, `tt` FROM `class` WHERE 1
*/
$sql = "select classid, name, tt from class where userID = '$cookie'";

$sq = mysql_query($sql);
$arr = array();
 $i = 0;
while ($val = mysql_fetch_assoc($sq)) {
    $sql_url = "select ID, url , name , tt ,class from website where class = '$val[tt]'";
    $a = mysql_query($sql_url);
    array_push($arr,$val);
     $val_arr =  array();
    while($url = mysql_fetch_assoc($a)){
       array_push($val_arr,$url);
    }
     array_push($arr[$i],$val_arr);
     $i++;
}
echo json_encode($arr);
//print_r($arr);



