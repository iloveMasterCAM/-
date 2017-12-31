<?php
include('../mysql.php');  
header("Content-Type:text/html;charset=UTF-8");
$cookie = $_COOKIE['token'];
//SELECT `ID`, `nickname`, `name`, `password`, `headimg`, `Recommend`, `history`, `skin`, `skin_address`, `news`, `token` FROM `user` WHERE 1
$sql = "select Recommend, history, skin, news from user where token = '$cookie'";
$id = mysql_query($sql);

$val = mysql_fetch_assoc($id);

//foreach($val as $k => $v){
//    
//    if($v == 0){
//        $val[$k] = 'false';
//    }else{
//        $val[$k] = 'true';
//    }
//
//}


//for($i=0; $i<count($val); $i++){
    
//    if($val[$i] == 0){
//        $val[$i] = 'false';
//    }else{
//         $val[$i] = 'true';
//    }
   // echo $val[i];
//}
echo json_encode($val);

//    