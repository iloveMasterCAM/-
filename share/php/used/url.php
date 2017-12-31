<?php
include("mysql.php");
header("Content-Type:text/html;charset=UTF-8");
$email="abc@163.com";
setcookie("cookie",$email,time()+3600,"/");
function load(){
$cookie = $_COOKIE['token'];

//SELECT * FROM `website` WHERE userid = 1
$sql = "select * from website where userid = '$cookie'";

$v = mysql_query($sql);
//$arr = array();
while($val = mysql_fetch_assoc($v)){

//$arr[] = json_encode($val,JSON_UNESCAPED_UNICODE);
    echo json_encode($val,JSON_UNESCAPED_UNICODE);
}
 //echo stripslashes(json_encode($arr,JSON_UNESCAPED_UNICODE)); //stripslashes 删除反斜杠  json_encode 转成json
}
 load();



 //$arr = array({'id':1,'name':'xxx'},{'id':1,'name':'xxx'},{'id':1,'name':'xxx'})






/*
$arr = array();
 
    for($i=0; $i<10; $i++){
    $arr[] = $i;
        
}
*/


?>