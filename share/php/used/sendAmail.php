<?php
    session_start();
require_once "smtp.php"; 
//******************** 配置信息 ******************************** 

include('mysql.php');


  $email = trim($_GET['email']);
//$email = "1091060034@qq.com";
    $query = "select * from user where name = '$email'";
    $val = mysql_query($query);
 
    if(!mysql_fetch_array($val)){
        echo '用户名不存在';
        exit;
    }

$email = trim($_GET['email']);
$smtpserver = "smtp.163.com";//SMTP服务器 
$smtpserverport =25;//SMTP服务器端口 
$smtpusermail = "oll1001@163.com";//SMTP服务器的用户邮箱 
$smtpemailto = "$email";//发送给谁 
$smtpuser = "oll1001@163.com";//SMTP服务器的用户帐号 
$smtppass = "zxcvbnm123";//SMTP服务器的用户密码 
$mailtitle = "重置密码";//邮件主题 

$str = '';
for($i=0; $i<4; $i++){
 $str.= rand(0,9);
    
}
$_SESSION['auth'] = $str;
//echo $str;
$mailcontent = "尊敬的用户：
    <br/>
    <br/>
    <br/>
    您好！你的重置密码的验证码如下。
    <br/>
    <br/>
    <h2 style='color:#f00056;'>$str</h2>
    <br/>
    <br/>
    <br/>
    yi-23 http://www.yi-23.com/
    <br/>
    <br/>
    <h2>(这是一封自动产生的email，请勿回复。)</h2>";//邮件内容 
$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件 
//************************ 配置信息 **************************** 
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证. 
$smtp->debug = false;//是否显示发送的调试信息 
$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype); 
if($state==""){ 
echo "邮件发送失败"; 
exit(); 
} 
echo "邮件发送成功"; 





