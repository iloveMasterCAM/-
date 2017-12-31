<?php
header("Content-Type:text/html;charset=UTF-8");
include("mysql.php");

$cookie = $_COOKIE['token'];
//$sql = "insert into website(id,userid,name,url,img) values (null,$cookie,'$_GET[name]','$_GET[url]','')";
$sql = "insert into website(id, userid, name, url, img) VALUES (null,'$cookie','$_GET[name]','$_GET[url]','')";


if(mysql_query($sql)){
 echo "添加成功";
}else{
echo "添加失败";
}

?>