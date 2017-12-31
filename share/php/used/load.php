<?php
header("Content-Type:text/html;charset=UTF-8");
include("mysql.php");

 function load(){
 
    $cookie = $_COOKIE['token'];

     $sql = "select * from user where token = '$cookie'";
     $v = mysql_query($sql);
     
     if($arr = mysql_fetch_assoc($v)){
        //print_r($arr);
        echo json_encode($arr);
        //foreach($arr as $key => $val){
//            echo $val."<br/>";
            //echo $key.$val."<br/>";
       // }
     }
 };
load();
?>