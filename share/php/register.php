<?php
header("Content-type: text/html; charset=utf-8");
include('mysql.php');
$name = trim($_POST['name']);
$password = trim($_POST['passwrod']);

$sql  = "select name from user where name = '$name'";
$val = mysql_query($sql);

if(mysql_fetch_array($val)){
    echo '<script>alert("用户名已存在");window.history.go(-1);</script>';
    exit;
}else{

    
    
    
}