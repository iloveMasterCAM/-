<?php

/*
if(isset($_POST['authcode'])){
    session_start();
    if( strtolower($_POST['authcode']) == strtolower($_SESSION['authcode'])){
        echo "正确";
    }else{
        echo "错误";
    }

}
*/
session_start();

if(isset($_GET['auth'])){

    if($_GET['auth'] == $_SESSION['auth']){
        include("mysql.php");
        $pasw = md5(trim($_GET['pasw1']));
        $sql = "update user set password = '$pasw' where name = '$_GET[name]'";
        mysql_query($sql);
        echo "正确";
    }else{
        echo "错误";
    }
}



