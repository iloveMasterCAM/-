<?php

require_once("../../API/qqConnectAPI.php");
include('../../../mysql.php');
$qc = new QC();

/*$token =  $qc->qq_callback();
$uid = $qc->get_openid();

$qc = new QC($acs,$oid);  
$uinfo = $qc->get_user_info();  */

$qc = new QC();  
$token = $qc->qq_callback();//callback主要是验证 code和state,返回token信息，并写入到文件中存储，方便get_openid从文件中度  
$id = $qc->get_openid();//根据callback获取到的token信息得到openid,所以callback必须在openid前调用  
$qc = new QC($token,$id);  
$arr = $qc->get_user_info();  

$sql = "SELECT * FROM user WHERE name = '$id'";
$val = mysql_query($sql);
if(mysql_num_rows($val)>0){
$rs = mysql_fetch_assoc($val);
     setcookie('token',$rs['token'],time()+(3600*24)*360,'/');
}else{
   $arr = $qc->get_user_info();  
    $sq = "INSERT INTO `user`(`ID`, `nickname`, `name`, `password`,`headimg`,`Recommend`, `history`, `skin`, `skin_address`, `news`,`token`) VALUES (null,'$arr[nickname]','$id','123456','$arr[figureurl_2]',0,0,0,0,0,'$token')";
 mysql_query($sq);
 $id = mysql_insert_id();
    $num = intval($id+10);
    $name = ['综合','购物','社区','工具','影视'];
    $tt = ['zonghe','gouwu','shequ','gongju','yingshi'];
    for($i=0; $i<5; $i++){
        $classid = $i+$num;
        $sql = "insert into class (ID,userID,classid,name,tt) values (null,'$token',$id,'$name[$i]','$tt[$i]$classid')";
        mysql_query($sql);    
    }
    
     setcookie('token',$token,time()+(3600*24)*360,'/');
}
echo "<script> window.location.href='../../../../index.html'; </script>"
?>
