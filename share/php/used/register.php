<?php
header("Content-type: text/html; charset=utf-8");


/*$url = "name=".$_POST['name']."&"."pasw=".$_POST['pasw'];

echo "<a href='registerNext.php?$url'>aaaa</a>";*/



require_once "smtp.php"; 
//******************** 配置信息 ******************************** 

include('mysql.php');

  $name = trim($_POST['name']);

    $query = "select * from user where name = '$name'";
    $val = mysql_query($query);
 
    if(mysql_fetch_array($val)){
        echo '<script>alert("用户名已存在");window.history.go(-1);</script>';
        exit;
    }

$smtpserver = "smtp.163.com";//SMTP服务器 
$smtpserverport =25;//SMTP服务器端口 
$smtpusermail = "oll1001@163.com";//SMTP服务器的用户邮箱 
$smtpemailto = "$_POST[name]";//发送给谁 
$smtpuser = "oll1001@163.com";//SMTP服务器的用户帐号 
$smtppass = "zxcvbnm123";//SMTP服务器的用户密码 
$mailtitle = "用户注册";//邮件主题 

$url = "name=".$_POST['name']."&"."pasw=".$_POST['pasw'];
// echo $url;
$mailcontent = "尊敬的用户：
    <br/>
    <br/>
    <br/>
    您好！恭喜您注册成。
    <br/>
     <br/>
    <br/>
    <br/>
    这是一封注册认证邮件，请点击以下链接确认：
    http://yi-23.com/php/registerNext.php?$url
    <br/>
     <br/>
    <br/>
    <br/>
    如果链接不能点击，请复制地址到浏览器，然后直接打开。
    <br/>
     <br/>
    <br/>
    <br/>
    上述链接48小时内有效。如果激活链接失效，请您登录网站http://yi-23.com。
    <br/>
     <br/>
    <br/>
    <br/>
    <h2> 感谢您的注册</h2>";//邮件内容 
$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件 
//************************ 配置信息 **************************** 
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证. 
$smtp->debug = false;//是否显示发送的调试信息 
$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype); 
echo "<div style='width:300px; margin:36px auto;'>"; 
if($state==""){ 
echo "对不起，邮件发送失败！请检查邮箱填写是否有误。"; 
echo "<a href='index.html'>点此返回</a>"; 
exit(); 
} 
echo "恭喜！邮件发送成功！！"; 
