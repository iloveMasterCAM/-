<?php
session_start();
include('../mysql.php');
include_once( 'config.php' );
include_once( 'saetv2.ex.class.php' );

$c = new SaeTClientV2( WB_AKEY , WB_SKEY , $_SESSION['token']['access_token'] );
$ms  = $c->home_timeline(); // done
$uid_get = $c->get_uid();
$uid = $uid_get['uid'];
$user_message = $c->show_user_by_id( $uid);//根据ID获取用户等基本信息

$sql = "SELECT * FROM user WHERE name = $uid";
//mysql_num_rows(mysql_query($sql))>0
$val = mysql_query($sql);
if(mysql_num_rows($val)>0){
$rs = mysql_fetch_assoc($val);
     setcookie('token',$rs['token'],time()+(3600*24)*360,'/');
   
}else{
    $token = md5($uid.'123456'.time());
    $sql = "INSERT INTO `user`(`ID`, `nickname`, `name`, `password`,`headimg`,`Recommend`, `history`, `skin`, `skin_address`, `news`,`token`) VALUES (null,'$user_message[screen_name]','$uid','123456','$user_message[profile_image_url]',0,0,0,0,0,'$token')";
  mysql_query($sql);
    
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
echo "<script> window.location.href='../../index.html'; </script>";


