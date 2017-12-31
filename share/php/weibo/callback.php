<?php
session_start();

include_once( 'config.php' );
include_once( 'saetv2.ex.class.php' );

$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

if (isset($_REQUEST['code'])) {
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = WB_CALLBACK_URL;
	try {
		$token = $o->getAccessToken( 'code', $keys ) ;
	} catch (OAuthException $e) {
	}
}

if ($token) {
	$_SESSION['token'] = $token;
	setcookie( 'weibojs_'.$o->client_id, http_build_query($token) );
?>
授权完成
<?php
} else {
?>
授权失败，请联系我们。
<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script>
        
        window.onload = function (){
        
            var obj = document.getElementById("a");
            var span = document.getElementById("span");
            var i = 3;
             var time = setInterval(link,1000)
           function link(){
                i--;
                if(i == 0){
                   obj.click("return false");
                    
                    clearInterval(time)
    
                }else{
                span.innerHTML = i;
                }
                 
               
            }
           
            link()
        }
        
    </script>
</head>
<body>
    <a id="a" href="weibolist.php"><span id="span"></span>秒后跳转进入首页</a>
</body>
</html>
