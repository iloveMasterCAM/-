<?php
header("Content-Type:text/html;charset=UTF-8");
if(isset($_GET['auch'])){
    session_start();
    if( strtolower($_GET['auch']) == strtolower($_SESSION['authcode'])){
        echo "正确";
    }else{
        echo "错误";
    }

}
