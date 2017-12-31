<?php
include("mysql.php");
header("Content-Type:text/html;charset=UTF-8");
/*$_GET['openId']
$_GET['nickname']*/
$sql = "select * from BindPlatform where open_id = '$_GET[openId]'";

$con = mysql_fetch_assoc(mysql_query($sql));

if($con){
//    $con['user_id']
    //echo $con['user_id'];
    $sqluser = "select * from user where id= $con[user_id]";
    $val = mysql_fetch_assoc(mysql_query($sqluser));
    setcookie('token',$val['token'],time()+(3600*24)*360);
    echo $val['token'];
echo '1';
}else{
    
    //INSERT INTO `user`(`id`, `name`, `password`, `bgimg`, `token`, `Pattern`, `fontcolor`, `newsf`, `baidu`, `news`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])
    
  $token = md5($_GET['openId'].$_GET['nickname']);
    $sql = "insert into user (id,name, password, bgimg, token) values (null,'$_GET[nickname]','$_GET[openId]','../img/1.png','$token')";
    mysql_query($sql);
    $id = mysql_insert_id();
    $BindPlatform = "insert into BindPlatform (id,user_id, open_id, name) values (null,$id,'$_GET[openId]','QQ')";
    mysql_query($BindPlatform);

    $login = "select token from user where id = $id";
    $con = mysql_fetch_assoc(mysql_query($login));
    setcookie('token',$con['token'],time()+(3600*24)*360);
    echo $con['token'];
    
    echo '0';
}

/*
$sql = "select id from user where id = 323";

//mysql_query($sql)
$con = mysql_fetch_assoc(mysql_query($sql));
if($con){
    print_r($con);
}else{
    
    $token = md5("12132"."1231321");
    $sql = "insert into user (id,name, password, bgimg, token) values (null,'12132','12132','../img/1.png','$token')";
    $con = mysql_fetch_assoc(mysql_query($sql));
    echo gettype(mysql_insert_id());
   // $sql = "insert into BindPlatform (id,user_id,open_id,name) values (null,)"
    
    //echo '0';
}*/


