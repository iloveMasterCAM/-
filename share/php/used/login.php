<?php
include("mysql.php");
header("Content-type: text/html; charset=utf-8");
error_reporting(0);

//$_COOKIT('uid');

function login(){
$sql = "SELECT * FROM user WHERE name='$_GET[name]'";
    $v = mysql_query($sql);
    if($rs = mysql_fetch_array($v)){
        
        if($rs['password'] == md5($_GET['pasw'])){
//            setcookie('name',$_GET[name],time()+(3600*24)*360);
            setcookie('token',$rs['token'],time()+(3600*24)*360);
            echo $rs['token'];
            echo '------';
            
        }else{
            echo "密码错误";
        }
        
    }else{
        echo "用户错误";
    }
    
}

echo login();


